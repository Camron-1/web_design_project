function donationnumber(){
let Donationtype = document.getElementById("Donationtype").value;

if (Donationtype == "Donation1") {
    Donationtype = "25$";
} else if (Donationtype =="Donation2") {
    Donationtype = "50$";
} else if (Donationtype == "Donation3") {
    Donationtype = "75$";
} else if (Donationtype =="Donation4") {
    Donationtype = "100$";
}
alert("You selected a donation of: " + Donationtype);
alert("thank you for donating");

}

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

