document.addEventListener("DOMContentLoaded", () => {
	const header = document.querySelector(".nastylashy-header");
	const mobileNavBtn = header.querySelector(".mobile-nav-btn");
    const navLinks = header.querySelectorAll('li a');

	mobileNavBtn.addEventListener("click", () => {
		if (header.hasAttribute("data-mobile-nav-open")) {
			header.removeAttribute("data-mobile-nav-open");
			document.body.removeAttribute("data-scroll-off");
			return;
		} else {
			header.setAttribute("data-mobile-nav-open", "");
			document.body.setAttribute("data-scroll-off", "");
		}
	});

    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            header.removeAttribute("data-mobile-nav-open");
            document.body.removeAttribute("data-scroll-off");
        })
    })
});
