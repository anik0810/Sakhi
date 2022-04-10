<?php

function validate($data)
{
   $data=trim($data);
   $data=stripslashes($data);
   $data=htmlspecialchars($data);
   return $data;
}
   $spoint=validate($_POST['spoint']);
   $epoint=validate($_POST['epoint']);


    if(empty($spoint)){
       header("Location: ac.php?error=starting point is required");
       exit();
    }
    elseif(empty($epoint)){
       header("Location: ac.php?error=end is required");
       exit();
    }
    else{
        header("Location: home.php");
        exit();
      // echo "hello";
    }

  