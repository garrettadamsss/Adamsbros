const fullname = document.myform.fullname;
const address = document.myform.address;
const city = document.myform.city; 
const state = document.myform.state;
const zip = document.myform.zip; 
const phone = document.myform.phone; 
const email= document.myform.email;
const message = document.myform.message; 
const form = document.myform; 


form.addEventListener("submit", (e) => {
    if(!validate()){
        e.preventDefault(); 
    }
    
});

function setErrorFor(input){
    const formControl = input.parentElement;    // .form-control 
    formControl.classList.add("error");   //add error class
}
function setSuccessFor(input){
    const formControl = input.parentElement;
    formControl.classList.add("success");
    formControl.classList.remove("error");
}
/*
function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}
*/
function validate(){

    const fullnameValue = fullname.value.trim(); 
    const addressValue = address.value.trim(); 
    const cityValue = city.value.trim();
    const stateValue = state.value.trim(); 
    const zipValue = zip.value.trim(); 
    const phoneValue = phone.value.trim(); 
    const emailValue = email.value.trim();
    const messageValue = message.value.trim(); 
    let successes = 0; 
    if(fullnameValue== null || fullnameValue == ""){
        setErrorFor(fullname);
    } else{
        setSuccessFor(fullname);
        successes += 1; 
    }
    if(addressValue== null || addressValue == ""){
        setErrorFor(address);
    } else{
        setSuccessFor(address);
        successes += 1; 
    }
    if(cityValue== null || cityValue == ""){
        setErrorFor(city);
    } else{
        setSuccessFor(city);
        successes += 1; 
    }
    if(stateValue== null || stateValue == ""){
        setErrorFor(state);
    } else{
        setSuccessFor(state);
        successes += 1; 
    }
    if(zipValue== null || zipValue == ""){
        setErrorFor(zip);
    } else{
        setSuccessFor(zip);
        successes += 1; 
    }
    if(phoneValue== null || phoneValue == ""){
        setErrorFor(phone);
    } else{
        setSuccessFor(phone);
        successes += 1; 
    }
    if(emailValue== null || emailValue == ""){
        setErrorFor(email);
    } else {
        setSuccessFor(email);
        successes += 1; 
    }
    if(messageValue== null || messageValue == ""){
        setErrorFor(message);
    } else{
        setSuccessFor(message);
        successes += 1; 
    }
    console.log(successes);
    if(successes == 8){
        return true; 
    } else {
        return false; 
    }
   /* if(fullname.parentElement.classList.contains("success")){
        form.unbind("submit");
    }
    */
}





