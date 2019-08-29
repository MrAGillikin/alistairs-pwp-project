window.onload = function (){

};

function myReplaceFunction() {
	let input = getElementByName("Input").value;

	document.getElementById("response").value = replaceWith(input);
}

function replaceWith(input){
	var arr = input.split(" "||", "||". "||"! "||"? ");
	let updatedArr = arr.map(
		(object) => {
			return object.length.toString;
		}
	);
	let result = updatedArr.join(" ");
}