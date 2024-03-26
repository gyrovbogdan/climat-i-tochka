function showSideBar() {
    document.getElementById("sidebarMenu").style.visibility = "visible";
}

function hideSideBar() {
    document.getElementById("sidebarMenu").style.width = "0";
}

setTimeout(function () {
    document.querySelector("main").classList.add("body_visible");
}, 100);
