// var allInput = document.getElementsByClassName("type");
// var inputLogin =document.getElementsByClassName('type')[0];
// var inputPassword =document.getElementsByClassName('type')[1];
// console.log(allInput);
// var name = document.forms["divform_connex"]["login"];               

var input_login=document.getElementById("input_login");
var password=document.getElementById("input-password");
var divform_connex=document.getElementById("divform_connex");


function validateEmail (email)  {
  const re=(
    /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
  );
  if(re.test(email.toLowerCase().trim())){
    return true;
  }
  else{
    return false;
  }

};
// console.log(validateEmail);
 input_login.onkeyup= function(){
   if(validateEmail(input_login.value.trim())){
    input_login.style.border='4px solid green';
   }else{
     
    input_login.style.border='4px solid red';
   }
 }
 

 password.onkeyup=function(){
   if(validatePassword(password)){
    password.style.border='4px solid green';
   }else{
    password.style.border='4px solid red';
   }
 }
 function validatePassword(password){
  const re= new RegExp("(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{6,})");
if(re.test(password.value)){
      return true;
    }else{
      return false;
    }
}
// function validformuaire(input){
//    if(input.value.trim()===''){}
// }
// divform_connex.addEventListener('submit',function(e){
//         e.preventDefault();//bloquer la soumission du formulaire
//         if(validateEmail (input_login.value));
//         if(validatePassword(password.value));
// })
function valider(){
  if (input_login.value == "")                                  
    { 
        alert("Mettez votre login."); 
        input_login.focus(); 
        return false; 
    }   
    if (password.value == "")                                  
    { 
        alert("Mettez votre password."); 
        password.focus(); 
        return false; 
    }   
    return true;
}


// function showError(input, message) {//Afficher les messages d'erreur
//   const formControl = input.parentElement;
//   formControl.className = 'form-control error';
//   const small = formControl.querySelector('small');
//   small.innerText = message;
// }
// function showSuccess(input) {
//   const formControl = input.parentElement;
//   formControl.className = 'form-control success'; 
// }
// function checkRequired(inputArray) {// Tester si les champs ne sont pas vides
//     inputArray.forEach(input => {
//         if (input.value.trim() === '') {
//             showError(input,`${getFieldName(input)} is required`);
//         }else{
//             showSuccess(input);
//         }
//     });
// }
// function getFieldName(input) {//Retour le nom de chaque input en se basant sur son id
//   return input.id.charAt(0).toUpperCase() + input.id.slice(1);
// }
divform_connex.addEventListener('submit',function(e){
  if(!valider()){
  e.preventDefault();
  }
});




  // const validatePassword = (password)=>{
  //       const re= new RegExp("(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{6,})");
  //   if(re.test(password.value)){
  //     return true;
  //   }else{
  //     return false;
  //   }
  // }

//   var alpha = pwd.match(/[a-zA-Z]/g);
//     var num = pwd.match(/[0-9]/g);
  