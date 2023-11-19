<?php
  $errorCode = isset($_GET['error']) ? $_GET['error'] : null;

  if ($errorCode === '2') {
    $errorMessage = 'Username already taken. Please try again.';
} else {
    $errorMessage = null;
}

?>

<html>
  <head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="../css/main.css" />
    <link rel="stylesheet" href="../css/signup.css" />
  </head>
  <body>
    <div id="header">
      <div id="title">
        <span class="header-text">Juan Pablo Ghantous - Dynamic Portfolio</span>
      </div>
      <div class="header-button">
        <img src="../images/icons/user.png" />
      </div>
    </div>
    <div id="content">
      <div id="signup-box"> 
        <div id="signup-header">
          <div class="signup-button" onclick="GoToLogin()">
            <span>Log In</span>
          </div>
          <div class="signup-button" style="background-color: #688b75; cursor: default">
            <span>Sign Up</span>
          </div>
        </div>
        <div id="signup-form">
          <form action="../backend/signup.php", method="POST", name="signup-form">
            <?php 
              if (!empty($errorMessage)) {
                echo '<label style="color: rgb(179, 44, 44)">'.$errorMessage.'</label><br>';
              }
            ?>
            <div id="text-region">
                <div class="text-region-column">
                    <label for="fullname">Full Name</label>
                    <input type="text" name="fullname" class="text-field">
                    <br>  
                    <label for="username">Username</label>
                    <input type="text" name="username" class="text-field">
                    <br>
                </div>
                <div  class="text-region-column">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="text-field">
                    <br>
                    <label for="conf-password">Confirm Password</label>
                    <input type="password" name="conf-password" class="text-field">
                    <br>
                </div>
            </div>
            <div>
                <input type="radio" name="sex" id="male" value="m"> 
                <label for="male">Male</label>
                <input type="radio" name="sex" id="female" value="f"> 
                <label for="female">Female</label>
            </div>
            <div>
                <label for="bithdate">Date of Birth&nbsp;&nbsp;&nbsp;</label>
                <input type="date" name="birthdate" id="birthdate">
            </div>
            <br>
            <div>
              <input type="button" value="Sign Up" class="form-button" onclick="SignUp()">
              <input type="button" value="Cancel" class="form-button" onclick="ClearForm()">
            </div>
          </form>
        </div>        
      </div>
    </div>
    <div id="footer">
      <div id="social-medias">
        <a href="https://www.twitter.com" target="_blank"
          ><img src="../images/icons/twitter.png"
        /></a>
        <a
          href="https://open.spotify.com/user/y74hmya3dklwhy5e2zdbx1uiu?si=fc0a43d5e50a417a"
          target="_blank"
          ><img src="../images/icons/spotify.png"
        /></a>
        <a href="https://instagram.com/juanpghantoush" target="_blank"
          ><img src="../images/icons/instagram.png"
        /></a>
        <a href="https://www.linkedin.com/in/juanghantous/" target="_blank"
          ><img src="../images/icons/linkedin.png"
        /></a>
      </div>
      <div id="course-text">
        <span class="footer-text">
          CSC443 - Dynamic Portfolio - Fall 2023
        </span>
      </div>
    </div>
    <script>
      function GoToLogin() {
        window.location = 'login.php'
      }
      function SignUp() {
        var form = document.querySelector("form[name='signup-form']");

        var fullname = form.elements["fullname"].value;
        var username = form.elements["username"].value;
        var password = form.elements["password"].value;
        var confPassword = form.elements["conf-password"].value;
        var sex = form.elements["sex"].value;
        var birthdate = form.elements["birthdate"].value;

        if (fullname=="" || username=="" || password=="" || confPassword=="" || sex=="" || birthdate=="") {
            alert("All fields must be filled.");
            return;
        }
        if (password!=confPassword) {
            alert("Passwords do not match.");
            return;
        }
        form.submit();
      }
      function ClearForm() {
        var form = document.querySelector("form[name='signup-form']");
        form.elements["username"].value = "";
        form.elements["fullname"].value = "";
        form.elements["password"].value = "";
        form.elements["conf-password"].value = "";
        form.elements["sex"].value = "";
        form.elements["birthdate"].value = "";
      }
    </script>
  </body>
</html>
