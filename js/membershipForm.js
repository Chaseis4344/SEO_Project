
// Determine if a field is blank
function isBlank(inputField){
    if (inputField.value=="") {
        return true;
    }
    return false;
}

// remove all error styles from the div passed in
function makeClean(element){
    element.classList.remove("error");		
}

function notValidPass(element){
	var password = element.value;
	
	
}

// Wait until the page is loaded, before doing any DOM stuff

window.addEventListener("load", function() {    

    // add listeners for classes with highlightable 
	var highlightableInputs = 
	document.querySelectorAll(".highlightable");
	for (var i=0; i < highlightableInputs.length; i++) {
		highlightableInputs[i].addEventListener("focus", function(e){	
        e.target.classList.toggle("highlight");
	});
		highlightableInputs[i].addEventListener("blur", function(e){
        e.target.classList.toggle("highlight");
		});
	}
    
    // add listeners for classes with required ... 
	var requiredInputs = document.querySelectorAll(".required");
	for (var i=0; i < requiredInputs.length;i++) {
		requiredInputs[i].addEventListener("change", function(e) {
        makeClean(e.target);
    });
}

    //on submitting the form, "empty" checks are performed on required inputs
	var mainForm = document.getElementById("mainForm");
	mainForm.addEventListener("submit", function(e) {
		var requiredInputs = document.querySelectorAll(".required");
		for (var i=0; i < requiredInputs.length; i++){
			if( isBlank(requiredInputs[i]) ){
				e.preventDefault();
				requiredInputs[i].classList.add("error");
			}
			else {
				makeClean(requiredInputs[i]);
			}
		}
		if(notValidPass(document.getElementById("inputPassword"))){
			
		}
	});
});