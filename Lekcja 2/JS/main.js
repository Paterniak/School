function oblicz() {
    const year = document.getElementById('year').value;
    const error = document.getElementById('error');
    const wynik = document.getElementById('wynik');

    error.textContent = "";
    wynik.textContent = "";

    if (year < 1900 || year > 2099){
        error.textContent = "Podaj liczbę z przedziału 1900-2099";
        return;
    }

    const p = 24;
    const q = 5;

    const a = year % 19;
    const b = year % 4;
    const c = year % 7;
    const d = (19 * a + p) % 30;
    const e = (2 * b + 4 * c + 6 * d + q) % 7;

    let dni = 22 + d + e;

    if (dni > 31) {
        dni -= 31;
        if (dni > 25) {
            dni -= 7;
        }
        wynik.textContent = `Wielkanoc w roku ${year} wypada na ${dni} kwietnia.`;
    } else {
        wynik.textContent = `Wielkanoc w roku ${year} przypada na ${dni} marca.`;
    }
}