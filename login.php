<?php
include "db_conn.php";
function validate($data)
{
   $data=trim($data);
   $data=stripslashes($data);
   $data=htmlspecialchars($data);
   return $data;
}
   $uname=validate($_POST['uname']);
   $pass=validate($_POST['password']);
   if((isset($_POST['uname'])) && (isset($_POST['uname']))){

      if(empty($uname)){
         header("Location: index.php?error=username is required");
         exit();
      }
      elseif(empty($pass)){
         header("Location: index.php?error=password is required");
         exit();
      }
      else{
         $pass=md5($pass);
         $sql ="SELECT * FROM users WHERE user_name='$uname' AND password='$pass' ";

         $result = mysqli_query($conn,$sql);


         if (mysqli_num_rows($result)){
            $row=mysqli_fetch_assoc($result);
            // echo($row['name']);
            session_start();
            $_SESSION['loggedin']=true;
            $_SESSION['name']=$row['name'];
            $_SESSION['username']=$uname;
            header("Location:index.php");
            exit();
         }
         else{
            header("Location:home.php?error=username or password is incorrect");
            exit();
         }
      }
   }
   else{
      header("Location: index.php?error");
      exit();
   }
   
   ?>