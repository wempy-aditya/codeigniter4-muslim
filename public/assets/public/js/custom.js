var scrollButton = document.getElementById("backToTop");
window.onscroll = function() {
    scrollFunction()
};
function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        scrollButton.style.display = "block";
    } else {
        scrollButton.style.display = "none";
    }
}
function backToTop(event) {
    event.preventDefault();
    window.scrollTo({top: 0, behavior: 'smooth'});
}