<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css" />
    <title>Document</title>
</head>
<body>

<form action="login.php" method="post">
  <section>
      <div class="imgBx">
          <img src="log1.jpg">

      </div>
      <div class="contentBx">
          <div class="formBx">
              <h2>login</h2>
              <form>
                  <div class="inputBx">
                      <span>username</span>
                      <input type="text" name="uname">

                  </div>
                  <div class="inputBx">
                      <span>password</span>
                      <input type="password" name="password">
                  </div>
                  <div class="remember">
                      <label>
                          <input type="checkbox" name="">remember me</label>
                  </div>
                  <div class="inputBx">
                      <input type="submit" value="sign in" name="">
                  </div>
                  <div class="inputBx">
                   <p>dont have an account? <a href="signup.php">signup</a></p>
                </div>
                
                <h3>login with social media</h3>
                <div class="s">
                    <img src="facebook.png" alt="">
                    <img src="google.png" alt="">
                    <img src="instagram.jpg" alt="">
                </div>
                
            </div>

      </div>
  </section>
</form>
</body>
</html>