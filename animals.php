<!DOCTYPE html>
<html>
<head>
<title>Thank you for donating here is your animal and its ID Number:</title>
</head>
<body>
<h1> Animal records</h1>
<?php

include_once('connect.php');


$AquaticAnimal = $_POST['AquaticAnimal'];
$gender = $_POST['gender'];
$id = $_POST['id'];
$fname = $_POST['fname'];
$email = $_POST['email'];




echo 'Your name: ' . $fname . '<br />';
echo 'Your email: ' . $email . '<br />';
echo 'Animal: ' . $AquaticAnimal . '<br />';
echo 'gender: ' . $gender . '<br />';
echo 'id: ' . $id . '<br />';



$sql = "INSERT INTO animalsdb (fname, email, animal, gender,id) VALUES ('$fname','$email','$AquaticAnimal', '$gender','$id')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();
?>
</body>
</html>
