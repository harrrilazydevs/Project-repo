	// <-------TEXT TYPING HOME SECTION--------->//
	const signUpButton = document.getElementById('signUp');
	const signInButton = document.getElementById('signIn');
	const container = document.getElementById('containerSignUp');
	signUpButton.addEventListener('click', () => {
		container.classList.add("right-panel-active");
	});
	signInButton.addEventListener('click', () => {
		container.classList.remove("right-panel-active");
	});
// <-------TEXT TYPING HOME SECTION--------->//

// <-------TEXT TYPING HOME SECTION--------->//
	var i = 0,
	dental_text;
	dental_text = "DIAGNOSTIC LABORATORY, X-RAY AND MEDICAL CLINIC"
	function typing() {
		if (i < dental_text.length) {
			document.getElementById("dental_text").innerHTML += dental_text.charAt(i);
			i++;
			setTimeout(typing, 70);
		}
	}
	typing();
// <-------TEXT TYPING HOME SECTION--------->//
