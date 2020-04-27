let liEls = document.querySelectorAll(".carrousselcontent li");
let liTxt = document.querySelectorAll(".carrousseltext li");
let index = 0;
function show(increase)
{
  index = index + increase;
  index = Math.min(Math.max(index, 0), liEls.length - 1);
    liEls[index].scrollIntoView({ behavior: "smooth" });
    liTxt[index].scrollIntoView({ behavior: "smooth" });
}

var boxOne = document.getElementsByClassName('menu')[0];


document.getElementsByClassName('menubutton')[0].onclick = function () {

    if (this.id === 'openMenu') {
        this.id = 'closeMenu';
        boxOne.classList.remove('backTranslate');
        boxOne.classList.add('menuTranslate');
    } else {
        this.id = 'openMenu';
        boxOne.classList.remove('menuTranslate');
        boxOne.classList.add('backTranslate');
    }
}