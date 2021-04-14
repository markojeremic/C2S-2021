<?php 

 if(isset($_POST['submit'])){

    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $phone_number = $_POST["phone_number"];
    $faculty = $_POST["faculty"];
    $grade = $_POST["grade"];
    $attend_why = $_POST["attend_why"];
    $radionica1 = $_POST["radionica1"];
    $radionica2 = $_POST["radionica2"];
    $radionica3 = $_POST["radionica3"];
    $radionice_why = $_POST["radionice_why"];
    $radionice_experience = $_POST["radionice_experience"];
    $panel= $_POST["panel"];
    $speed_dating= $_POST["speed_dating"];
    $microsoft_teams= $_POST["microsoft_teams"];
    $spam= $_POST["spam"];


    //$attend_what = $_POST["attend_what"];

    
   require_once 'dbh.inc.php';
   require_once 'validation.inc.php';
 
   //Pozivanje validacije i stavljanje gresaka u url
   if (emptyInput($fullname,$email,$phone_number,$faculty, $grade, $attend_why,)!==true) {
        header("location: ../application.php?error=emptyInput");
        exit();   
   }
   if (invalidEmail($email)!==true) {
        header("location: ../application.php?error=invalidEmail");
        exit();   
   }
   //Mozda ovde ne bih stavljao regex jer mozda neko uzme cirilicu i to pa da ga ne komplikujemo, videcemo
    // if (invalidname($fullname)!==true) {
    //     header("location: ../application.php?error=invalidname");
    //     exit();   
       
    //       }
       //    Ovde cemo dodavati jos validacije npr.
       
   submitApplication($conn, $fullname,$email,$phone_number,$faculty, $grade, $attend_why,
                    $radionica1,$radionica2,$radionica3,$radionice_why,$radionice_experience,$panel,$speed_dating,$microsoft_teams,$spam);

    //Ako nije dosao preko dugmeta za submit vracamo ga na formu
}else {
    header("location:.. /c2s-2021/application.php");
    echo("Greska");
    }