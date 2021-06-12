const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
function myFunction() {
	var x = document.getElementById("myInput");
	if (x.type === "password")
		x.type = "text";
	else
		x.type = "password";
}