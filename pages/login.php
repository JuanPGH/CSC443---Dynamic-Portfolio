<html>
  <head>
    <title>Log In</title>
    <link rel="stylesheet" href="../css/main.css" />
    <link rel="stylesheet" href="../css/login.css" />
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
      <div id="login-box"> 
        <div id="login-header">
          <div class="login-button" style="background-color: #688b75; cursor: default">
            <span>Log In</span>
          </div>
          <div class="login-button" onclick="GoToSignup()">
            <span>Sign Up</span>
          </div>
        </div>
        <div id="login-form">
          <form action="../backend/login.php", method="POST", name="login-form">
            <label for="username">Username</label>
            <input type="text" name="username" class="text-field">
            <br>
            <label for="password">Password</label>
            <input type="password" name="password" class="text-field">
            <br>
            <div id="login-decision">
              <input type="button" value="Log In" class="form-button" onclick="LogIn()">
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
      function GoToSignup() {
        window.location = 'signup.php'
      }
      function LogIn() {
        var form = document.querySelector("form[name='login-form']");
        var username = form.elements["username"].value;
        var password = form.elements["password"].value;
        if (username=="" || password=="") {
          alert("All fields must be filled!")
        }
        else {
          form.submit();
        }
      }
      function ClearForm() {
        var form = document.querySelector("form[name='login-form']");
        form.elements["username"].value = "";
        form.elements["password"].value = "";
      }
    </script>
  </body>
</html>
