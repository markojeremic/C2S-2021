<?php

function emptyInput($fullname,$email,$phone_number,$faculty, $grade, $attend_why){

    if(empty($fullname) || empty($email) || empty($phone_number) || empty($faculty) || empty($grade) || empty($attend_why)){
        return false;
    }
    else return true;
}

function invalidEmail($email){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        return true;
    }
    else return false;
}
function invalidname($fullname){
   
    if(preg_match($fullname,"/^[a-zA-Z0-9]*$/")){
        
        return true;
    }

    else return false;
}

function submitApplication($conn, $fullname,$email,$phone_number,$faculty, $grade, $attend_why){

   
    $sql = "INSERT INTO applications (fullname, email, phone_number, faculty, grade, attend_why) VALUES (?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../application.php?error=stmtfailed");
        exit();

    }
    
        mysqli_stmt_bind_param($stmt, "ssssss", $fullname,$email,$phone_number,$faculty,$grade,$attend_why);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    
        //Ovde menjamo redirect ako prodje sve, tipa mozemo na index da ode, a mozemo i napraviti nesto na vrhu
        header("location: ../application.php?error=none");
        exit();
      
       
    
}