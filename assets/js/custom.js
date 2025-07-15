const navbar = document.getElementById("navbar");

window.addEventListener("scroll", function () {
	if (window.scrollY > 10) {
		navbar.style.top = "-100px";
	} else {
		navbar.style.top = "0";
	}
});
