function Zastosuj() {
    const img = document.getElementById('pszczola');
    const blur = document.getElementById('blur').checked;
    const sepia = document.getElementById('sepia').checked;
    const negatyw = document.getElementById('negatyw').checked;
    
    let filterValue = '';

    if (blur){
        filterValue += 'blur(10px)';
    }
    if (sepia){
        filterValue += 'sepia(100%)';
    }
    if (negatyw){
        filterValue += 'invert(100%)';
    }
    img.style.filter = filterValue.trim();
}



function Kolorowy() {
    const img = document.getElementById('drzewo');
    img.style.filter = 'none';
}
function CzarnoBialy() {
    const img = document.getElementById('drzewo');
    img.style.filter = 'grayscale(100%)';
}



function Przezroczystosc() {
    const img = document.getElementById('owoce');
    const przezroczystoscValue = document.getElementById('przezroczystosc').value;
    img.style.filter = `opacity(${przezroczystoscValue}%)`;
}



function Jasnosc() {
    const img = document.getElementById('zolw');
    const jasnoscValue = document.getElementById('jasnosc').value;
    img.style.filter = `brightness(${jasnoscValue}%)`;
}