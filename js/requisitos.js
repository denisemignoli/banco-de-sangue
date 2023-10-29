document.addEventListener("DOMContentLoaded", function () {
	    const menus = document.querySelectorAll(".menu");

	    menus.forEach((menu) => {
		            const toggle = menu.querySelector(".toggle");
		            const submenu = menu.querySelector(".submenu");

		            toggle.addEventListener("click", () => {
				                if (submenu.style.display === "none" || submenu.style.display === "") {
							                submenu.style.display = "block";
							                toggle.textContent = "▼ Clique para recuar";
							            } else {
									                    submenu.style.display = "none";
									                    toggle.textContent = "▶ Clique para expandir";
									                }
				            });
		        });
});

