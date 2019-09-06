window.onload = function (){

};

function createResponse() {
	let input = document.getElementById("interfaceinput").value;
	console.log(input);
	let inputLength = input.length;
	let response = "That's " + input.length + " characters. ";
	console.log(response);
	if (inputLength < 30) {
		response = response + "Person of few words, I see."
	}
	if (inputLength > 100) {
		response = response + "Kind of a mouthful."
	}
	console.log(response);
	document.getElementById("response").innerHTML = response;
}

function reverseInput(){
	let input = document.getElementById("interfaceinput").value;
	console.log(input);
	let inputArr = input.split(" ");
	console.log(inputArr);
	let outputArr = inputArr.reverse();
	console.log(outputArr);
	let output = outputArr.join(" ");
	document.getElementById("response").innerHTML = output;
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