<?php
    require_once("includes/config.php");
    require_once("includes/classes/FormSanitizer.php");
    require_once("includes/classes/Account.php");
    require_once("includes/classes/Constants.php");
    // imports access to class files
       
        $account = new Account($con); // created an instance of the class

        if(isset($_POST["submitButton"])) {
            
            $firstName = FormSanitizer::sanitizeFormString($_POST["firstName"]);
            $lastName = FormSanitizer::sanitizeFormString($_POST["lastName"]);
            $userName = FormSanitizer::sanitizeFormUsername($_POST["userName"]);
            $email = FormSanitizer::sanitizeFormEmail($_POST["email"]);
            $email2 = FormSanitizer::sanitizeFormEmail($_POST["email2"]);
            $password = FormSanitizer::sanitizeFormPassword($_POST["password"]);
            $password2 = FormSanitizer::sanitizeFormPassword($_POST["password2"]);

            $account->validateFirstName($firstName);
            
        }
// core structure of page below
?>
<!DOCTYPE html>
        
<html>
    <head>
        <title>Welcome to TravFlix</title>
        <link rel="stylesheet" type="text/css" href="assets/style/style.css" />
    </head>
    <body>
        
        <div class="signInContainer">

            <div class="column">

                <div class="header">
                    <img src="assets/images/TravFlixLogo.png" title="Logo" alt="Site Logo" />
                    <h3>Sign Up</h3>
                    <span>to continue to TravFlix</span>
                    
                </div>

                <form method="POST">


                    <?php echo $account->getError(Constants::$firstNameCharacters); ?>
                    <input type="text" name ="firstName" placeholder ="First name" required>

                    <input type="text" name ="lastName" placeholder ="Last name" required>

                    <input type="text" name ="username" placeholder ="Username" required>

                    <input type="email" name ="email" placeholder ="Email" required>

                    <input type="email" name ="email2" placeholder ="Confirm email" required>

                    <input type="password" name ="password" placeholder ="Password" required>

                    <input type="password" name ="password2" placeholder ="Confirm Password" required>

                    <input type="submit" name ="submitButton" value="SUBMIT">
                </form>
                <a href="login.php" class="signInMessage">Already have an account? Sign in here!</a>

            </div>

        </div>
    </body>
</html>