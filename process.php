<?php 

    if(isset($_POST['btn-send']))
    {
       $UserName = $_POST['UName'];
       $Email = $_POST['Email'];
       $Subject = $_POST['Subject'];
       $Msg = $_POST['msg'];

       if(empty($UserName) || empty($Email) || empty($Subject) || empty($Msg))
       {
           header('Location:index.php?error');
       }
       else
       {
           $toEmail = "imazik4004@gmail.com";
           $mailHeaders = "From: " . $UserName . "<". $Email .">\r\n";

           if(mail($toEmail,$Subject,$Msg,$Email))
           {
            $message = "Your contact information is received successfully.";
        
           }
       }
    }
    else
    {
        header('Location:index.php');
    }
?>

