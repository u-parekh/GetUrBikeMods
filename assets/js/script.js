const bar = document.getElementById('bar');
const close = document.getElementById('close');
const nav = document.getElementById('navbar');

if (bar) {
    bar.addEventListener('click',() => {
        nav.classList.add('active');
    })

}

if (close) {
    close.addEventListener('click',() => {
            nav.classList.remove('active');
        })
}

var mainImg = document.getElementById("mainImg");
var smallImg = document.getElementsByClassName("small-img");

for(let i=0; i<4; i++){
    smallImg[i].onclick = function(){
        mainImg.src= smallImg[i].src;
    }
}
