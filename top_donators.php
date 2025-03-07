<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>top Donators</title>
    <link rel="stylesheet" href="top_donators.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <div class="cover">
        <header>

            <div class="menu-container">
                <a href="Shark_attack.html">
                    <img src="Sharkattack.jpg" alt="Shark Attack">
                </a>

                <div class="submenu">
                    <ul>
                        <a href="about_us.html" target="_blank">
                            <li> About Us</li>
                        </a>
                        <a href="get_involved.html" target="_blank">
                            <li>Get Involved</li>
                        </a>
                        <li>
                            <a href="ways_to_give.html" target="_blank">Ways to Give</a>

                            <div class="dropdown_menu2">
                                <ul> <a href="top_donators.html" target="_blank">Top Donators</a></ul>
                                <ul> <a href="Donations.html" target="_blank">Donations</a></ul>
                            </div>

                        </li>
                        <li> <a href="our_work.html" target="_blank"> Our Work</li>
                        </a>
                        <li>
                            <a href="contact.html" target="_blank">Contact</a>

                            <div class="dropdown_menu">
                                <ul><a href="https://www.instagram.com/shark_attack121/" target="_blank"> Instagram</a>
                                </ul>
                            </div>
                        </li>
                        <a href="admin_page.php" target="_blank">Admin Page</a>
                    </ul>
                </div>
            </div>
        </header>

        <div class="guest">
            <p>Guest</p>
        </div>
        <article>
            <h1>Top Donators</h1>
            <div class="movedown">
                <p> Thank you for visiting our page and considering a donation to support our company. Your generosity
                    and
                    commitment mean so much to us, as each contribution helps us continue the work we’re passionate
                    about
                    and
                    make a difference in our community. Every gift, big or small, fuels our mission and brings us closer
                    to
                    our
                    goals. We know there are many causes you could choose to support, and we’re truly honored that
                    you’ve
                    chosen
                    ours. Your support inspires us to keep moving forward, and together, we can make a lasting impact.
                    Thank
                    you
                    for being part of this journey with us. </p>
                <p> Our Current top Donators are </p>
                <ul>

                    <li>
                        Leonardo Dicaprio Foundation,
                        Ashland University,
                        Disney
                    </li>

                </ul>
                <h1> If you would like to donate please either sign up or login in below to help out an animal in need
                </h1>
                <?php
function checksql() {
    include_once('connect.php');

    $login = $_POST['login'];
    $pass = $_POST['pass'];

    $sql = "SELECT login,pass FROM logindb WHERE login = '$login' AND pass = '$pass'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) { 
        header("Location: ./Donations.html");
        exit;
    }
    $conn->close();
}

if (isset($_POST['submit'])) {
    checksql();
} else {
?>
    
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <fieldset>
        <div class="box">
            <label>Login</label>
            <input type="text" name="login" id="login" placeholder="C0C0D21" required>
            <label>Password</label>
            <input type="password" name="pass" id="pass" required>
            <button type="submit" name="submit">Submit</button>
            <input type="reset" value="Cancel">
        </div>
        <a href="forgot-login.php" class="forgot-login-btn">Forgot login-id</a>
    </fieldset>
    
</form>
<?php } ?>

<?php
function insertuser() {
    include_once('connect.php');

    $signup = $_POST['signup'];
    $pass = $_POST['pass'];

    $sql = "INSERT INTO logindb (login, pass) VALUES ('$signup', '$pass')";

    if ($conn->query($sql) === TRUE) {
        echo "New record inserted.";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}

if (isset($_POST['signup_submit'])) {
    insertuser();
} else {
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <fieldset>
        <label>Sign up</label>
        <input type="text" name="signup" id="signup" placeholder="C0C0D21" required>
        <label>Password</label>
        <input type="password" name="pass" id="sign-pass" required>
        <button type="submit" name="signup_submit">Sign Up</button>
        <input type="reset" value="Cancel">
    </fieldset>
</form>
<?php } ?>

            </div>
           
    </div>
  
    </article>
    <footer>
        <p>Contact</p>
        <p> <b>Headquarters</b>: 12 Oaks Blvd Miami Florida <br>
            <a href="tel:419-412-3413"> 419-412-3413</a>
        </p>
        <p> <a href="Sharkattack@gmail.com"> sharkattack@gmail.com</a></p>
        <a href="https://www.instagram.com/shark_attack121/" target="_blank"> <br>
            <img src="Instagram-Logo.wine.png" alt="Instagram Logo" />
        </a>
    </footer>
    
</body>

</html>