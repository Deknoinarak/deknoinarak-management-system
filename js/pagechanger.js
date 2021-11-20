// Type Your Website Name Here...
const webName = "Your Website";

// Get URL
const URLPathname = window.location.pathname;

// Log Pathname In Console
console.log("Now You're In: " + window.location.pathname);

// Change Title Of The Document
if (URLPathname == "/index/home") {
    document.title = "Home" + " - " + webName;
}
else if (URLPathname == "/index/portfolio") {
    document.title = "Portfolio" + " - " + webName;
}
else if (URLPathname == "/index/project") {
    document.title = "Project" + " - " + webName;
}
else if (URLPathname == "/index/contact") {
    document.title = "Contact" + " - " + webName;
}
else if (URLPathname == "/index/aboutus") {
    document.title = "About Us" + " - " + webName;
}
else if (URLPathname.includes("/article")) {
    document.title = "Article" + " - " + webName;
}
else if (URLPathname == "/article/") {
    document.title = "404 Page Not Found" + " - " + webName;
}
else {
    document.title = "404 Page Not Found" + " - " + webName;
}

// Debug
console.log("Operation Completed");