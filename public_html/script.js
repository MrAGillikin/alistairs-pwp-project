window.onload = function (){

};

function myReplaceFunction() {
	let input = document.getElementById("interfaceinput").value;

	document.getElementById("response").value = replaceWith(input);
}

function replaceWith(input){
	var arr = input.split(" "||", "||". "||"! "||"? ");
	console.log(arr);
	let updatedArr = arr.map(
		(object) => {
			return object.length.toString;
		}
	);
	let result = updatedArr.join(" ");
	console.log(result);
	return result;
}