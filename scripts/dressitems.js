let currentSet = 1;

function updateSelectedImgSet() {
const currentScroll = document.scrollingElement.scrollTop;
const scrollMax = document.scrollingElement.scrollHeight - document.scrollingElement.clientHeight;
const setsCount = 3;
const scrollPerSet = scrollMax / setsCount;
const scrolledSet = Math.floor(currentScroll / scrollPerSet) + 1;
if (scrolledSet == currentSet) {
  return;
}
currentSet = scrolledSet;
document.querySelectorAll('#left-pane .img').forEach((img) => {
  img.classList.toggle('visible', img.dataset.imageset <= currentSet);
});
}

window.onscroll = updateSelectedImgSet;
window.onresize = updateSelectedImgSet;