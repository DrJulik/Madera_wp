// Select DOM items

const menuBtn = document.querySelector(".open-nav-btn");
const menu = document.querySelector(".site-nav");
const menuPanel = document.querySelector(".panel-half");
const menuNav = document.querySelector(".nav-half");
const closeBtn = document.querySelectorAll(".close-nav");
// const navItems = document.querySelectorAll('.nav-item');

// set initial state of menu

let showMenu = false;

menuBtn.addEventListener("click", toggleMenu);

function toggleMenu() {
	if (!showMenu) {
		menuBtn.classList.add("nav-open");
		menu.classList.add("nav-open");
		menuNav.classList.add("nav-open");
		menuPanel.classList.add("nav-open");
		// navItems.forEach(item => item.classList.add('show'));

		// set menu state
		showMenu = true;
	}
}

closeBtn.forEach(item => item.addEventListener("click", closeMenu));

function closeMenu() {
	if (showMenu) {
		menuBtn.classList.remove("close");
		menu.classList.remove("nav-open");
		menuNav.classList.remove("nav-open");
		menuPanel.classList.remove("nav-open");
		//   navItems.forEach(item => item.classList.remove('show'));

		// set menu state
		showMenu = false;
	}
}

// Adding class to shrink navbar on scroll
jQuery(document).ready(function($) {
	$(document).on("scroll", function() {
		if ($(document).scrollTop() > 80) {
			$(".navbar").addClass("navbar-shrink");
		} else {
			$(".navbar").removeClass("navbar-shrink");
		}
	});
});

// PRELOADER JS
jQuery(window).load(function() {
	jQuery(".preloader").addClass("start");
	jQuery(".preloader")
		.delay(700)
		.fadeOut(700);
});
