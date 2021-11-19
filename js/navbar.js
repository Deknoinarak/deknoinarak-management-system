// Navigation Bar Variable
const hamburger = document.querySelector(".hamburger");
const menu = document.querySelector(".menu");

// If Hamburger Got Clicked
hamburger.addEventListener('click', function() {
    this.classList.toggle('is-active');
    menu.classList.toggle('is-active');
    
})

// Navbar Links Variable
const links = document.querySelectorAll(".menu a");

// Switch Navbar Links Active
switch (URLPathname) {
    case "/index/home":
        links[0].classList.add("is-active");
        break;
    case "/index/portfolio":
        links[1].classList.add("is-active");
        break;
    case "/index/project":
        links[2].classList.add("is-active");
        break;
    case "/index/aboutus":
        links[3].classList.add("is-active");
        break;
    case "/index/contact":
        links[4].classList.add("is-active");
        break;
    default:
        break;
}

// Debug
console.log("Operation Completed");