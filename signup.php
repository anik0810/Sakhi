<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" href="login.css" />
</head>
<body>
     <form action="signup-check.php" method="post">
          <section>
          <div class="imgBx">
          <img src="log1.jpg">

      </div>
         <div class="contentBx">
         <div class="formBx">
              <h2>Sign Up</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>
     <div class="contact">
     <div class="box">
          <label>Name<br></label>
          <?php if (isset($_GET['name'])) { ?>
               <div class="inputBx">
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br><br>
          <?php }else{ ?>
               </div>
               <div class="inputBx">
               <input type="text" 
                      name="name" 
                      placeholder="Name"><br><br>
          <?php }?>
          <div class="inputBx">
          <div class="inputBx">
          <label>User Name<br></label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"><br><br>
          <?php }?>
          </div>

     	<label>Password<br></label>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br><br>

          <label>Re Password<br></label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Re_Password"><br><br>

                 <div class="inputBx">
                      <input type="submit" value="Sign Up" name="">
                  </div>
          <div class="inputBx">
          <a href="home.php" class="ca">Already have an account?</a>
          </div>
     </div>
     </div>
     <h3>Sign Up with social media</h3>
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