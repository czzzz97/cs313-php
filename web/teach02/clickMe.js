function clicked() {
	console.log("Button was clicked.");
	window.alert("Clicked!");
}

function changeColor() {
	console.log("Time to change");
	var color = document.getElementById("color").value;
	document.getElementById("changeable").style.color = color;
}