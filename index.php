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

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume | Isaac John</title>
    <link rel="stylesheet" href="styles.css">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

</head>
    <body class="container mx-auto ">
        <section class="row align-items-center hero">
          
            <div class="col-4 profile-pic">
              <img src="./img/zik.PNG" alt="">
            </div>
            
            <div class="col-8 profile-detail">
                <h1>Isaac  John</h1>
                <h3>Web Developer</h3>
               <a href="#contact"><button class="contact-me" id="#form">CONTACT ME</button></a> <br>
                <div class="mt-4 row-cols-6 badge">
                   
                </div>
            </div>
      
          </section>
        
       <section class="row skill ">
          
        <div class="col-4">
            <div class="about">
                <p>
                    I’m a professional and
                    talented web developer
                    with frontend and
                    backend development
                    skills.<br><br>
                    I am passionate about
                    leveraging my diverse
                    backgrounds to
                    decipher challenging
                    problems and create
                    delightful experiences.
                </p>
             </div>

             <div class="education">
                 <h4 class="mt-4 mb-3 ">Education</h4>
                 <div class="flex row edu-year">
                     <div class="col-4">
                         <h5>2015</h5> 
                     </div>
                     <div class="flex-col col-8">
                         <h5>University of Maiduguri</h5>
                         <p>B.Sc Computer Science</p>
                     </div>
                     <h4 class="mt-4 mb-3 ">Courses</h4>
                     <div class="col-4">
                        <h5>2019</h5> 
                    </div>
                     <div class="flex-col col-8">
                         <h5>Coursera</h5>
                         <p>Front-End Web UI Framework</p>
                     </div>
                 </div>
             </div>  
            </div>        
        
        
         <div class="expe col-8">
                <div class="experience">
                    <h3>Experience</h3>
                   <div class="row">
                       <div class="col-md-1">
                           <span class="year">2020</span>
                       </div>
                       <div class="col-md-8 work">
                           <h2>HNGI7</h2>
                           <h4>Back-End Developer</h4>
                           <ul>
                               <li>I assisted the backend team to implement
                                some cool features on the website.</li>
                                <li>Joined in the design of the HNGI7 registration page</li>
                           </ul>
                       </div>
                   </div>
                </div>
               
                <div class="experience">
                   <div class="row">
                       <div class="col-md-1">
                           <span class="year">2019</span>
                       </div>
                       <div class="col-md-8 work">
                           <h2>HNGI6</h2>
                           <h4>Front-End Developer</h4>
                           <ul>
                               <li> Worked on different features and part
                                of the website to enhance user experience
                                </li>
                                <li>Worked on a design for an app</li>
                           </ul>
                       </div>
                   </div>
                </div>
            
                <div class="experience">
                   <div class="row">
                       <div class="col-md-1">
                           <span class="year">2018</span>
                       </div>
                       <div class="col-md-8 work">
                           <h2>HNGI5</h2>
                           <h4>Intern Front-End Developer</h4>
                           <ul>
                               <li>Worked closely with the team to
                                implement new features for the website
                                </li>
                                <li>Worked closely with the team to
                                    implement new features for the website
                                </li>
                           </ul>
                       </div>
                   </div>
                </div>
           </div>
    
          <section>
              <div class="mt-5 col my-skill">
                  <h1>Skills</h1>
                </div>
              <div class="row skillset">
                  <div class="col">
                      <ul>
                          <li>HTML</li>
                          <li>CSS</li>
                          <li>JAVASCRIPT</li>
                      </ul>
                  </div>
                  <div class="col">
                        <ul>
                            <li>HTML</li>
                            <li>CSS</li>
                            <li>JAVASCRIPT</li>
                        </ul>  
                    </div>
                  <div class="col">
                    <ul>
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>JAVASCRIPT</li>
                    </ul>    
                  </div>
              </div>
              
          </section>

          <section class="mx-auto row col-6" id="form">
          <h2 class="mt-5 mb-5 text-center" id="contact">Contact Me</h2>
          <p class="text-center">I am available to work on your projects and bring your ideas to life. I am just a click away.</p>   
            </div>

            <?php 
                            $Msg = "";
                            if(isset($_GET['error']))
                            {
                                $Msg = " Please Fill in the Blanks ";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }

                            if(isset($_GET['success']))
                            {
                                $Msg = " Your Message Has Been Sent ";
                                echo '<div class="alert alert-success">'.$Msg.'</div>';
                            }
                        
                        ?>
              
                    <div class="card-body">
                        <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
                            <input type="text" name="UName" placeholder="User Name" class="mb-2 form-control">
                            <input type="email" name="Email" placeholder="Email" class="mb-2 form-control">
                            <input type="text" name="Subject" placeholder="Subject" class="mb-2 form-control">
                            <textarea name="msg" class="mb-2 form-control" placeholder="Write The Message"></textarea>
                            <button class="btn btn-success" name="btn-send"> Send </button>
                        </form>
                    </div>
               
        </section>
         
    </body>
</html>

