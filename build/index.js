/******/ (function() { // webpackBootstrap
var __webpack_exports__ = {};
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
//*** VARIABLES ************************
const searchIcon = document.querySelector('.search-icon');
const searchOverlay = document.getElementById('searchOverlay');
const navigation = document.querySelector('.fixed-top');
const closeButton = document.querySelector('.fa-window-close');
const bodyElement = document.querySelector('body');
const searchField = document.getElementById('search-field');
const resultsDiv = document.querySelector('.spinner');
const carouselItem = document.querySelector('.carousel-item');
let isSpinnerVisible = false;
let isOverlayOpen = false;
let typingTimer;
let previousValue; //*** VARIABLES ************************
//*** EVENT LISTENERS ******************
// window.addEventListener('scroll', navBackground);

window.addEventListener('keydown', keyPressDispatcher);
searchIcon.addEventListener('click', show);
closeButton.addEventListener('click', hide);
searchField.addEventListener('keyup', typingLogic); //*** EVENT LISTENERS ******************
//*** FUNCTIONS ************************

function addActiveClass() {
  if (carouselItem) {
    carouselItem.classList.add('active');
  }
}

addActiveClass();

function typingLogic() {
  if (searchField.value != previousValue) {
    clearTimeout(typingTimer);

    if (searchField.value) {
      if (isSpinnerVisible == false) {
        resultsDiv.innerHTML = '<i class="mt-5 text-white fas fa-spinner fa-spin"></i>';
        isSpinnerVisible = true;
      }

      typingTimer = setTimeout(getResults, 500);
    } else {
      resultsDiv.innerHTML('');
      isSpinnerVisible = false;
    }
  }

  previousValue = searchField.value;
}

function getResults() {
  fetch(superstreetData.root_url + '/wp-json/superstreet/search?term=' + searchField.value).then(r => r.json()).then(data => {
    console.log(data);
    resultsDiv.innerHTML = `
        ${data.general.length ? '<ul class="list-unstyled">' : '<p class="text-light">No information matches that search</p>'}
            ${data.general.map(item => `<li><h2><a class="yellowBG text-light d-block" href="${item.permalink}">${item.title}</a></li></h2>`).join('')}
        ${data.general.length ? '</ul>' : ''}
      `;
    isSpinnerVisible = false;
  }).catch(e => console.log(e));
}

function show() {
  searchOverlay.classList.toggle('d-none');
  bodyElement.classList.add('no-scroll');
  searchField.focus();
  isOverlayOpen = true;
}

function hide() {
  searchOverlay.classList.add('d-none');
  bodyElement.classList.remove('no-scroll');
  searchField.value = '';
  resultsDiv.innerHTML = '';
  isOverlayOpen = false;
}

function keyPressDispatcher(event) {
  if (event.code == 'KeyS' && isOverlayOpen == false) {
    show();
  } else if (event.code == 'Escape' && isOverlayOpen == true) {
    hide();
  }
}
/******/ })()
;
//# sourceMappingURL=index.js.map