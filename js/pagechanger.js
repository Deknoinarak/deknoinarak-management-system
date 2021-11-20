// Type Your Website Name Here...
const webName = "Your Website";

// Get URL
const URLPathname = window.location.pathname;

// Log Pathname In Console
console.log("Now You're In: " + window.location.pathname);

// Change Title Of The Document
if (document.querySelector("article-page")) {
    document.title = "Article" + " - " + webName;
}
else {
    switch (URLPathname) {
        case "/index/home":
            document.title = "Home" + " - " + webName;
            break;
        case "/index/portfolio":
            document.title = "Portfolio" + " - " + webName;
            break;
        case "/index/project":
            document.title = "Project" + " - " + webName;
            break;
        case "/index/contact":
            document.title = "Contact" + " - " + webName;
            break;
        case "/index/aboutus":
            document.title = "About Us" + " - " + webName;
            break;
        default:
            document.title = "404 Page Not Found" + " - " + webName;
    }
}

// Debug
console.log("Operation Completed");