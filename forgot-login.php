<?php if (isset($_POST['submit'])) {
    // Get values from the form
    $login = $_POST['login'];
    $pass = $_POST['pass'];
    // Establish database connection
    include_once('connect.php');

    // Prepare SQL query to update the password for the user
    $sql = "UPDATE logindb SET pass='$pass' WHERE login='$login'";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Password updated successfully.";
        header("Location: ./top_donators.php");
    } else {
        echo "Error updating password: " . $conn->error;
    }

    // Close the connection
    $conn->close();
}
?>





<!DOCTYPE html>
<html lang="en">
<h1>Please enter a username to update the password.</h1> 

<head>
    <meta charset="utf-8" />
    <title>Reset password and username </title>
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <fieldset>
        <div class="box">
            <label>Reset</label>
            <input type="text" name="login" id="login" placeholder="C0C0D21" required>
            <label>Password</label>
            <input type="password" name="pass" id="pass" required>
            <button type="submit" name="submit">Submit</button>
            <input type="reset" value="Cancel">
        </div>
    </fieldset>
    
</form>

