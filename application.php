<section class ="application-form">
<h2>Prijava</h2>

<form action="includes/application.inc.php" method="post"> 
    
    <input type="text" name="fullname" placeholder="Ime i prezime..." >
    <input type="email" name="email" placeholder="Email...">
    <input type="text" name="phone_number" placeholder="Broj telefona... ">  
    <input type="text" name="faculty" placeholder="Fakultet..." >
    <!-- Ovde mozemo dropdown namestiti, znam za dobru jquery biblioteku, ali reko da vidim prvo, mozda imate nesto smisljeno -->
    <input type="text" name="grade" placeholder="Godina studija..." >
    <input type="text" name="attend_why" placeholder="Zasto se prijavljujes..." >

    <!-- Ovo neka ga ako budemo hteli posle -->
    <!-- <br><input type="radio" name="attend_what" value="Tech" id= "techRadio" >  
    <label for="techRadio"> Tech</label> <br>
    <input type="radio" name="attend_what" value="Radionice" id= "radioniceRadio"> 
    <label for="radioniceRadio">Radionice</label><br>

    <input type="radio" name="attend_what" value="RadioniceAndTech" id= "RadAndTechRadio"> 
    <label for="RadAndTechRadio">Tech i radionice</label><br>
      -->
      
    <div style="height: 50px;">

    </div>


    <button type="submit" name="submit">Sacuvaj</button>


</form>

<?php

if(isset($_GET["error"])){
    if($_GET["error"]=="emptyInput"){
        echo "<p>Fill in all fields </p>";
    }
    if($_GET["error"]=="invalidEmail"){ 
        echo "<p>Molimo unesite validan mejl </p>";
    }
    if($_GET["error"]=="stmtfailed"){
        echo "<p>Doslo je do greske, pokusajte ponovo</p>";
    }
    if($_GET["error"]=="none"){
        echo "<p>Uspesno ste predali prijavu</p>";
    }
}
?>
</section>