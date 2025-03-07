function validateEmail(){
    var email=document.getElementById("mail").value
    alert(email);
    var emailformat=
    /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if( email.match(emailformat))
        alert("valid Email Address")
    
else
    alert("Error invalid email address try again")


}