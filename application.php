<section class ="application-form" style = "margin-left:20px">
<h2>Prijava</h2>

<form action="includes/application.inc.php" method="post" enctype="multipart/form-data"> 
    <div class= "basic-info" style = "margin-bottom: 100px">
        <input type="text" name="fullname" placeholder="Ime i prezime..." style="margin-left: 20px" autocomplete="off" >
        <input type="email" name="email" placeholder="Email..."style="margin-left: 20px" autocomplete="off">
        <input type="text" name="phone_number" placeholder="Broj telefona... "style="margin-left: 20px" autocomplete="off">  
        <input type="text" name="faculty" placeholder="Fakultet..."style="margin-left: 20px" autocomplete="off" >


        <label for="grade">Godina studija</label>
        <select name="grade" id="grade" >
            <option value="Prva">Prva</option>
            <option value="Druga">Druga</option>
            <option value="Treca">Treca</option>
            <option value="Cetvrta">Cetvrta</option>
            <option value="Apsolvent">Apsolvent</option>
            <!-- <option value="Drugo">Drugo</option> -->
        </select>
        
        <input type="text" name="attend_why" placeholder="Zasto se prijavljujes..." style="margin-left: 20px" autocomplete="off">
    </div>

    
    <div class="container" style = "display:flex;">
        <div style="margin:20px;">
        <input type="checkbox" id="radionica1" name="radionica1" value="da"  onclick="myFunction(this.id)">
        <label for="radionica1"> Radionica 1</label><br>
        <p>Lorem ipsum dolor sit ametbr consectetur adipisicing elit. Quidem</p>
        </div>
        
        <div style="margin:20px;">
        <input type="checkbox" id="radionica2" name="radionica2" value="da"  onclick="myFunction(this.id)">
        <label for="radionica2">Radionica2</label><br>
        <p>Lorem ipsum dolor sit ametbr consectetur adipisicing elit. Quidem, enim.</p>
        </div>
        <div style="margin:20px;">
        <input type="checkbox" id="radionica3" name="radionica3" value="da"  onclick="myFunction(this.id)">
        <label for="radionica3">Radionica3</label>
        <p>Lorem ipsum dolor sit ametbr consectetur adipisicing elit. Quidem, enim.</p>
        </div>

    </div>

    <div id = "questions" style="display:none; margin-bottom:50px ;">
        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, neque aut mollitia obcaecati sapiente, odit magni aspernatur quis modi, consequuntur animi dignissimos explicabo inventore? Ipsa cupiditate eius eaque, saepe mollitia, deserunt assumenda nam maiores dicta corrupti veritatis sint, error aut numquam. Repudiandae commodi, fuga sequi modi suscipit officiis rerum dolorem.</p> -->
        <label for="radionice_why">Šta Vas je motivisalo da odaberete ove radionice? </label>
        <input type="text" name="radionice_why" placeholder="Zasto ova radionica/e..." style="margin-left: 20px" autocomplete="off"><br>

        <label for="radionice_experience">Koliko ste upoznati sa tehnologijama koje se obrađuju na radionicama koje ste odabrali?</label>
        <input type="text" name="radionice_experience" placeholder="Vase iskustvo..." style="margin-left: 20px" autocomplete="off">

    </div>

    <label for="panel">Da li zelite da ucestvujete na panelu?</label>
    <input type="checkbox" id="panel" name="panel" value="da" ><br><br>

    <label for="speed_dating"> Da li želite da učestvujete na speed dating-u sa kompanijom Levi9? </label>
    <input type="checkbox" id="speed_dating" name="speed_dating" value="da" ><br><br>

    <label for="microsoft_teams">Da li ste do sad koristili Microsoft Teams platformu?</label>
    <input type="checkbox" id="microsoft_teams" name="microsoft_teams" value="da" ><br><br>

    <label for="spam">Da li želite da dobijate obaveštenja o drugim projektima i aktivnostima FONIS-a? </label>
    <input type="checkbox" id="spam" name="spam" value="da" ><br><br>


    <label for="cv">Prilozite svoj cv</label>
    <input type="file" id="cv" name="cv" accept=".pdf"><br>
     
    
    
    

   
      
    


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




<script>
    function myFunction(id) {
  // Get the checkbox
  var checkBox = document.getElementById(id);
  // Get the output text
  var text = document.getElementById("questions");

  // If the checkbox is checked, display the output questions
  if (checkBox.checked == true){
    questions.style.display = "block";
  } 
//   else {
//     questions.style.display = "none";
//   }
//Ne treba, nema problema onda?
}
</script>