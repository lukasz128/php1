document.addEventListener("DOMContentLoaded", init);

function init()
{
	const forms = document.querySelectorAll(".main-form");

	forms[0].onsubmit = (() => {
		if(validation()) 
			return true;
		else 
			return false;
		
	});


	forms[1].onsubmit = (() => {
		if(validationId(forms[1].elements[0])) 
			return true;
		else 
			return false;
		
	});

	forms[2].onsubmit =  (() => {
		if(validationId(forms[2].elements[0]) && validationValue())
			return true;
		else
			return false;
	});


	function validation()
	{
		return	validationName(forms[0].elements[0]) && 
			validationPrice(forms[0].elements[1]) && 
			validationQuantity(forms[0].elements[2]) &&
			validationCategory(forms[0].elements[3]) &&
			validationDescription(forms[0].elements[4]) &&
			validationRating(forms[0].elements[5]);
	}

	function validationName(input) 
	{
		let pattern = /^[a-zA-ZĘĄŚŻŹĆÓŁęąśżźćół0-9 ]{3,}$/;

		if(input.value.match(pattern) == null) {
			input.focus();
			input.classList.add("valid-input");
			return false;
		}
		else {
			input.classList.remove("valid-input");
			return true;
		}
	}

	function validationPrice(input)
	{
		let pattern = /^[0-9.]{1,}$/;
		if(input.value.match(pattern) == null || input.value == 0) {	
			input.focus();
			input.classList.add("valid-input");
			return false;
		}
		else {
			input.classList.remove("valid-input");
			return true;
		}
	}

	function validationQuantity(input)
	{
		let pattern = /^[0-9]{1,}$/;
		if(input.value.match(pattern) == null || input.value == 0) {
			input.focus();
			input.classList.add("valid-input");
			return false;
		}
		else {
			input.classList.remove("valid-input");
			return true;
		}
	}

	function validationCategory(input)
	{
		if(input.value == 'valid') {
			input.focus();
			input.classList.add("valid-input");
			return false;
		}
		else {
			input.classList.remove("valid-input");
			return true;
		}
	}

	function validationDescription(input)
	{
		if(input.value == "") {
			input.focus();
			input.classList.add("valid-input");
			return false;
		}
		else {
			input.classList.remove("valid-input");
			return true;
		}
	}

	function validationRating(input)
	{
		if(input.value == 'valid') {
			input.focus();
			input.classList.add("valid-input");
			return false;
		}
		else {
			input.classList.remove("valid-input");
			return true;
		}
	}

	function validationId(input)
	{
		if(isNaN(input.value) || input.value == "") {
			input.focus();
			input.classList.add("valid-input");
			return false;
		}
		else {
			input.classList.remove("valid-input");
			return true;
		}
	}

	function validationValue()
	{
		let submit = forms[2].elements[1];
		let input = forms[2].elements[2];
		if(submit.value == "cena_brutto") {
			if(validationPrice(input)) {
				input.classList.remove("valid-input");
				return true;
			}
			else {
				input.focus();
				input.classList.add("valid-input");
				return false;
			}
		}
		else if(submit.value == "ilosc") {
			if(validationQuantity(input)) {
				input.classList.remove("valid-input");
				return true;
			}
			else {
				input.focus();
				input.classList.add("valid-input");
				return false;
			}
		}
		else if(submit.value == "nazwa") {
			if(validationName(input)) {
				input.classList.remove("valid-input");
				return true;
			}
			else {
				input.focus();
				input.classList.add("valid-input");
				return false;
			}
		}
		else if(submit.value == "opis") {
			if(validationDescription(input)) {
				input.classList.remove("valid-input");
				return true;
			}
			else {
				input.focus();
				input.classList.add("valid-input");
				return false;	
			}
		}
	}

	/*
	function IfInvalid(input)
	{
		input.focus();
		input.classList.add("valid-input");
		return false;
	}

	function IfValid(input)
	{
		input.classList.remove("valid-input");
		return true;
	}
	*/
}
console.log("test valid");