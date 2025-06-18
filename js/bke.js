// Spel instellingen
const SPELER_ROOD = "R";
const SPELER_GEEL = "Y";
let huidigeSpeler = SPELER_ROOD;

const TOTAAL_RIJEN = 6;
const TOTAAL_KOLOMMEN = 7;

let speelbord = [];
let vrijeRijenPerKolom = [];
let spelIsAfgelopen = false;

let topscores = haalScoresOpVanLocalStorage();

window.onload = function () {
  startNieuwSpel();
  toonScores();
};

function startNieuwSpel() {
  speelbord = [];
  vrijeRijenPerKolom = Array(TOTAAL_KOLOMMEN).fill(TOTAAL_RIJEN - 1);
  spelIsAfgelopen = false;
  huidigeSpeler = SPELER_ROOD;

  document.getElementById("winner").innerText = "";

  const speelbordElement = document.getElementById("board");
  speelbordElement.innerHTML = "";

  for (let rijIndex = 0; rijIndex < TOTAAL_RIJEN; rijIndex++) {
    let rij = [];
    for (let kolomIndex = 0; kolomIndex < TOTAAL_KOLOMMEN; kolomIndex++) {
      rij.push(" ");
      const tegel = document.createElement("div");
      tegel.id = rijIndex + "-" + kolomIndex;
      tegel.classList.add("tile");
      tegel.addEventListener("click", wanneerTegelGeklikt);
      speelbordElement.appendChild(tegel);
    }
    speelbord.push(rij);
  }
}

function wanneerTegelGeklikt() {
  if (spelIsAfgelopen) return;

  const tegelId = this.id.split("-");
  const kolomNummer = parseInt(tegelId[1]);
  const rijNummer = vrijeRijenPerKolom[kolomNummer];

  if (rijNummer < 0) return;

  zetSteenOpBord(rijNummer, kolomNummer);
  controleerOfErEenWinnaarIs(rijNummer, kolomNummer);

  if (!spelIsAfgelopen) {
    wisselVanSpeler();
  }
}

function zetSteenOpBord(rijPositie, kolomPositie) {
  speelbord[rijPositie][kolomPositie] = huidigeSpeler;

  const tegelElement = document.getElementById(rijPositie + "-" + kolomPositie);
  if (huidigeSpeler === SPELER_ROOD) {
    tegelElement.classList.add("red-piece");
  } else {
    tegelElement.classList.add("yellow-piece");
  }

  vrijeRijenPerKolom[kolomPositie]--;
}

function wisselVanSpeler() {
  if (huidigeSpeler === SPELER_ROOD) {
    huidigeSpeler = SPELER_GEEL;
  } else {
    huidigeSpeler = SPELER_ROOD;
  }
}

function controleerOfErEenWinnaarIs(rijStart, kolomStart) {
  if (
    controleerVierOpEenRijHorizontaal(rijStart) ||
    controleerVierOpEenRijVerticaal(kolomStart) ||
    controleerVierOpEenRijDiagonaalLinksBovenNaarRechtsOnder(
      rijStart,
      kolomStart
    ) ||
    controleerVierOpEenRijDiagonaalLinksOnderNaarRechtsBoven(
      rijStart,
      kolomStart
    )
  ) {
    spelIsAfgelopen = true;
    laatWinnaarZien();
  }
}

function controleerVierOpEenRijHorizontaal(rijNummer) {
  let aantalOpEenRij = 0;

  for (let kolomNummer = 0; kolomNummer < TOTAAL_KOLOMMEN; kolomNummer++) {
    if (speelbord[rijNummer][kolomNummer] === huidigeSpeler) {
      aantalOpEenRij++;
      if (aantalOpEenRij === 4) return true;
    } else {
      aantalOpEenRij = 0;
    }
  }
  return false;
}

function controleerVierOpEenRijVerticaal(kolomNummer) {
  let aantalOpEenKolom = 0;

  for (let rijNummer = 0; rijNummer < TOTAAL_RIJEN; rijNummer++) {
    if (speelbord[rijNummer][kolomNummer] === huidigeSpeler) {
      aantalOpEenKolom++;
      if (aantalOpEenKolom === 4) return true;
    } else {
      aantalOpEenKolom = 0;
    }
  }
  return false;
}

function controleerVierOpEenRijDiagonaalLinksBovenNaarRechtsOnder(
  startRij,
  startKolom
) {
  let huidigeRij = startRij;
  let huidigeKolom = startKolom;

  while (huidigeRij > 0 && huidigeKolom > 0) {
    huidigeRij--;
    huidigeKolom--;
  }

  let aantalOpDiagonaal = 0;
  while (huidigeRij < TOTAAL_RIJEN && huidigeKolom < TOTAAL_KOLOMMEN) {
    if (speelbord[huidigeRij][huidigeKolom] === huidigeSpeler) {
      aantalOpDiagonaal++;
      if (aantalOpDiagonaal === 4) return true;
    } else {
      aantalOpDiagonaal = 0;
    }
    huidigeRij++;
    huidigeKolom++;
  }
  return false;
}

function controleerVierOpEenRijDiagonaalLinksOnderNaarRechtsBoven(
  startRij,
  startKolom
) {
  let huidigeRij = startRij;
  let huidigeKolom = startKolom;

  while (huidigeRij < TOTAAL_RIJEN - 1 && huidigeKolom > 0) {
    huidigeRij++;
    huidigeKolom--;
  }

  let aantalOpDiagonaal = 0;
  while (huidigeRij >= 0 && huidigeKolom < TOTAAL_KOLOMMEN) {
    if (speelbord[huidigeRij][huidigeKolom] === huidigeSpeler) {
      aantalOpDiagonaal++;
      if (aantalOpDiagonaal === 4) return true;
    } else {
      aantalOpDiagonaal = 0;
    }
    huidigeRij--;
    huidigeKolom++;
  }
  return false;
}

function laatWinnaarZien() {
  let tekst = huidigeSpeler === SPELER_ROOD ? "Rood wint!" : "Geel wint!";
  document.getElementById("winner").innerText = tekst;

  topscores[huidigeSpeler]++;
  slaScoresOpInLocalStorage();
  toonScores();
}

// Highscores opslaan en tonen

function haalScoresOpVanLocalStorage() {
  const opgeslagenData = localStorage.getItem("highscores");
  return opgeslagenData ? JSON.parse(opgeslagenData) : { R: 0, Y: 0 };
}

function slaScoresOpInLocalStorage() {
  localStorage.setItem("highscores", JSON.stringify(topscores));
}

function toonScores() {
  document.getElementById("scoreRood").innerText = "Rood: " + topscores.R;
  document.getElementById("scoreGeel").innerText = "Geel: " + topscores.Y;
}

function resetScores() {
  topscores = { R: 0, Y: 0 };
  slaScoresOpInLocalStorage();
  toonScores();
}
