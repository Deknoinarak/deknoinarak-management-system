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
if (URLPathname == "/index/home") {
    links[0].classList.add("is-active");
}
else if (URLPathname == "/index/portfolio") {
    links[1].classList.add("is-active");
}
else if (URLPathname.includes("/article")) {
    links[2].classList.add("is-active");
}
else if (URLPathname == "/index/aboutus") {
    links[3].classList.add("is-active");
}
else if (URLPathname == "/index/contact") {
    links[4].classList.add("is-active");
}
else if (URLPathname == ("/article/")) {

}

// Debug
console.log("Operation Completed");