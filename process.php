<?php 

    if(isset($_POST['btn-send']))
    {
       $UserName = $_POST['UName'];
       $Email = $_POST['Email'];
       $Subject = $_POST['Subject'];
       $Msg = $_POST['msg'];

       if(empty($UserName) || empty($Email) || empty($Subject) || empty($Msg))
       {
           header('index.php?error');
       }
       else
       {
           $to = "imazik4004@gmail.com";

           if(mail($to,$Subject,$Msg,$Email))
           {
               header("index.php?success");
           }
       }
    }
    else
    {
        header("index.php");
    }
?>