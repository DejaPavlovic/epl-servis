let macbookView = document.querySelector('.macBook');
let imacView = document.querySelector('.iMac');
let ipadView = document.querySelector('.iPad');
let macminiView = document.querySelector('.macMini');
function showMacbookView() {
    macbookView.style.display = 'block';
    imacView.style.display = 'none';
    ipadView.style.display = 'none';
    macminiView.style.display = 'none';
}
function showImacView() {
    macbookView.style.display = 'none';
    imacView.style.display = 'block';
    ipadView.style.display = 'none';
    macminiView.style.display = 'none';
}
function showIpadView() {
    macbookView.style.display = 'none';
    imacView.style.display = 'none';
    ipadView.style.display = 'block';
    macminiView.style.display = 'none';
}
function showMacminiView() {
    macbookView.style.display = 'none';
    imacView.style.display = 'none';
    ipadView.style.display = 'none';
    macminiView.style.display = 'block';
}


