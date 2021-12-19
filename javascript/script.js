
function onMouseOverButton(button) {
	element = document.getElementById(button);
	element.style.backgroundColor = "#FFA500AA";
	element.style.color = "#506369";
}

function onMouseNotOverButton(button) {
	element = document.getElementById(button);
	element.style.background = "transparent";
	element.style.color = "#657884";
}

function ajustementHeader(){
	let width = document.body.clientWidth * 1.1 + 500;
	let n2 = document.body.clientWidth / 10 - 50;
	
	if (document.body.clientWidth < 800) {
		document.getElementById("page-header").style.borderRadius = "0";
	}else{
		document.getElementById("page-header").style.borderRadius = "0px 0px " + width/10-50 + "px 0px / 0px 0px " + width/10-50 + "px 0px";
	}
}

function getValue() {
    let input = document.getElementById("inValue").value;

    document.getElementById("r").innerHTML = "Résultat : " + input + " km/h = " + input/3.6 + " m/s";
}