window.onload = function (){

};

function myReplaceFunction() {
	let input = document.getElementById("interfaceinput").value;

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
	return result;
}