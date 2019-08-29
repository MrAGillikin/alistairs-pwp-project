window.onload = function (){

};

function createResponse() {
	let input = document.getElementById("interfaceinput").value;
	let inputLength = input.length;
	response = "That's " + input.length + "characters."
	if (inputLength < 30) {
		response = response + "Person of few words, I see."
	}
	if (inputLength > 100) {
		response = response + "Kind of a mouthful."
	}
	document.getElementById("response").value = response;
}

function myReplaceFunction() {
	let input = document.getElementById("interfaceinput").value;
	console.log(input);
	document.getElementById("response").value = replaceWith(input);
}

function replaceWith(input){
	console.log(input);
	let inputArray = input.split(" ");
	console.log(inputArray);
	let updatedArr = inputArray.map(
		(object) => {
			return object.length.toString;
		}
	);
	let result = updatedArr.join(" ");
	console.log(result);
	return result;
}