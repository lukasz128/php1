document.addEventListener("DOMContentLoaded", init);

function init()
{
	const header = document.querySelector(".main-header");
	const scrollUp = document.querySelector(".scroll-up");

	window.addEventListener("scroll", () => {
		// console.log(window.pageYOffset);

		if(window.innerWidth > 800) {
			if(window.pageYOffset > 120) 
				header.classList.add("toggle-padding-in-header");
			else 
				header.classList.remove("toggle-padding-in-header");
		}


		if(window.pageYOffset > 500)
			scrollUp.classList.add("show-scroll-up-element");
		else
			scrollUp.classList.remove("show-scroll-up-element");
	});


	scrollUp.addEventListener("click", () => {
		window.scrollTo({
			'behavior': 'smooth',
			'top': 0
		});
	});
}
console.log("test main");