<?php include('controller.php') ?>


<!DOCTYPE html>
<html lang="en">
      
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous">
      </script>

    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/forgottenstyle.css">
    <title>Sign in & Sign up Form</title>
  </head>

  <body>
    <div class="container">
    
      <div class="forms-container">
        <div class="signin-signup">

          <form action="login.php" class="sign-in-form" method="POST" autocomplete="off">
            <h2 class="title">Sign in</h2>

            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="email" />
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password" />
            </div>

            <a class="social-text-2" onclick="openPopup()">Forgotten Password?</a>

                <div class="popup" id="popup">
                  <img src="image/forgotten-password.jpg">
                <h2>Forgotten Your password!</h2>
                <p>Please enter the email address you used to register</p>
                <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" />
            </div>
                <button type="button" onclick="closePopup()">Retrieve Password</button>
                </div>
             

            <input type="submit" name="login" value="Sign In" class="btn solid" />
            
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>

            <a class="cancel-text-sign-in">go to back</a>

          </form>
          
          <form action="login.php" class="sign-up-form" method="POST" autocomplete="off">
            <h2 class="title">Sign up</h2>

            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="uname" placeholder="Username" required/>
            </div>

            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" placeholder="Email" required/>
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" id="password" placeholder="Password" required/>
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="confirmPassword" id="password" placeholder="Confirm Password" required/>
            </div>

            <input type="submit" name="signup" class="btn" value="Sign Up" />

            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
                </div>
              <a class="cancel-text-sign-up">go to back</a>

          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
              ex ratione. Aliquid!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

  

    <script src="js/app.js"></script>

<script type="text/javascript">
  
  let popup = document.getElementById("popup");

  function openPopup(){
    popup.classList.add("open-popup");
  }

  function closePopup(){
    popup.classList.remove("open-popup");
  }

</script>

  </body>
</html>
