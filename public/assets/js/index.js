//sticky navbar
/*window.onscroll = function() {myFunction()};

const header = document.getElementById("navbar");
const articles = document.getElementsByTagName("article")

const sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
    articles.style.marginBottom = '1px'
  } else {
    header.classList.remove("sticky");
    articles.style.marginBottom = '8vmin'
  }
}*/


//smooth scroll to div when clicking anchor
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

//added a function so the mail shouldn't be empty
function empty() {
    let x;
    x = document.getElementById("email").value;
    if (x == "") {
        alert("Entrez une adresse e-mail s'il vous plaît!");
        return false;
    };
}

//hover invert color stuff
function changeColor(obj) {
    if (obj.style.backgroundColor = 'white') {
        obj.style.backgroundColor = 'black';
        obj.style.color = 'white';
    }
}

function changeColorBack(obj){
    if (obj.style.backgroundColor = 'black') {
        obj.style.backgroundColor = 'white';
        obj.style.color = 'black';
    }
}