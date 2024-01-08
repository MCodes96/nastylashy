document.addEventListener("DOMContentLoaded", () => {
	const faqSection = document.querySelector(".faq");

	if (!faqSection) return;

	const accordions = faqSection.querySelectorAll(".accordion");

	accordions.forEach((accordion) => {
		const accordionButton = accordion.querySelector("button");
		const accordionContent = accordion.querySelector(".accordion-content");

		accordionButton.addEventListener("click", () => {
			if (accordion.classList.contains("open")) {
				accordion.classList.remove("open");
				accordionContent.style.maxHeight = 0;
			} else {
				accordion.classList.add("open");
				accordionContent.style.maxHeight = accordionContent.scrollHeight + 20 + "px"; // 20px is the padding
				accordions.forEach((acc) => {
					if (acc !== accordion) {
						acc.classList.remove("open");
						acc.querySelector(".accordion-content").style.maxHeight = 0;
					}
				});
			}
		});

		accordionButton.addEventListener("keydown", (e) => {
			if (e.key === "Enter") {
				accordionContent.classList.toggle("open");
			}
		});
	});
});
