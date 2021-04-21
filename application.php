<link rel="stylesheet" href="./style.css" />
<link rel="stylesheet" type="text/css">

<section id="" style = "margin-left:20px">
<h2>Prijava</h2>



<form action="includes/application.inc.php" method="post" enctype="multipart/form-data"> 
    <div class= "basic-info" style = "margin-bottom: 50px">
        <label for="fullname">Ime i prezime:</label>
        <input type="text" name="fullname" placeholder=" Ime i prezime..."  autocomplete="off" > <br>

        <label for="mail">Email:</label>
        <input id="mail" type="email" name="email" placeholder=" Email..." style="margin-left: 60px;" > <br>

        <label for="fullname">Broj telefona:</label>
        <input type="text" name="phone_number" placeholder=" Broj telefona... " style="margin-left: 15px;" autocomplete="off">  <br>

        <label for="faculty">Fakultet:</label>
        <input type="text" name="faculty" placeholder=" Fakultet..." autocomplete="off" style="margin-left: 48px;margin-bottom: 15px;" ><br>


        <label for="grade">Godina studija</label>
        <select name="grade" id="grade" >
            <option value="Prva">Prva</option>
            <option value="Druga">Druga</option>
            <option value="Treca">Treca</option>
            <option value="Cetvrta">Cetvrta</option>
            <option value="Apsolvent">Apsolvent</option>
            <option value="Master studije">Master studije</option>
            <option value="Doktorske studije">Doktorske studije</option>
           
        </select><br>

        <div style="margin-top:20px ;">Zašto ste odlučili da učestvujete na ovom projektu?</div>
        <textarea name="attend_why" placeholder="" autocomplete="off" cols="50" rows="4" maxlength="254" ></textarea>
      
    </div>

    
    <div class="prijava-radionice" style = "display:flex;">
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
        <!-- <br>
        <label for="none">Ne želim da prisustvujem radionicama</label>
        <input type="checkbox" name="none"> -->
        </div>

    </div>

    <div id = "extraquestions" style="display:none; margin-bottom:50px ;">
       
        <div style="margin-top:20px ;">Šta Vas je motivisalo da odaberete ove radionice? </div>
        <textarea name="radionice_why" placeholder="" autocomplete="off" cols="50" rows="4" maxlength="254" ></textarea><br>

        <div style="margin-top:20px ;">Koliko ste upoznati sa tehnologijama koje se obrađuju na radionicama koje ste odabrali?</div>
        <textarea name="radionice_experience" placeholder="" autocomplete="off" cols="50" rows="4" maxlength="254" ></textarea><br>
        

    </div>

    <div class="prijava-questions">
    <label for="panel">Da li želite da učestvujete na panelu?</label>
    <input type="checkbox" id="panel" name="panel" value="da" ><br><br>

    <label for="speed_dating"> Da li želite da učestvujete na speed dating-u sa kompanijom Levi9? </label>
    <input type="checkbox" id="speed_dating" name="speed_dating" value="da" ><br><br>

    <label for="microsoft_teams">Da li ste do sad koristili Microsoft Teams platformu?</label>
    <input type="checkbox" id="microsoft_teams" name="microsoft_teams" value="da" ><br><br>

    <label for="spam">Da li želite da dobijate obaveštenja o drugim projektima i aktivnostima FONIS-a? </label>
    <input type="checkbox" id="spam" name="spam" value="da" ><br><br>


    <label for="cv">Priložite svoj CV </label>
    <input type="file" id="cv" name="cv" accept=".pdf"><br>

    <button type="submit" name="submit">Sačuvaj</button>
    </div>



</form>

<?php
// Moramo nekako pametnije da namestimo ovo ispisivanje gresaka, 
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




<style>
   
body{
    background: url("img/pozadinaprijave.jpg")no-repeat ;
    background-size: cover;
    color: white;
 
}
textarea{
    resize: none;
       
}
#extraquestions{
    margin-top: 20px;
    text-align: center;
}
.prijava-questions{
    text-align: center;
    margin-top: 20px;
    margin-bottom: 150px;
}
.prijava-radionice{
    display: grid;
    grid-template-areas: 'heading' 'text';
    position: relative;
    margin-left: 300px;
    top: 10%;
    left: 12%;
    width: 40%;
    padding: 2%;
    grid-gap: 5%;
    background: rgba(255, 255, 255, 0.2);
    border: 1px solid #ffffff;
    box-sizing: border-box;
    backdrop-filter: blur(74px);
    border-radius: 15px;
}

/* Treba namestiti ovde da bude isto kao select, nije sada dobro */
   option{
    background: rgba(255, 255, 255, 0.2);
    color: black;
   }
   
    input,select, textarea{
        background: rgba(255, 255, 255, 0.2);
        border: 1px solid #FFFFFF;
        border-color: white;
        box-sizing: content-box;
        border-radius: 15px;
        color: white;
        font-family: Roboto;
        font-style: normal;
        margin-bottom: 10px;
        margin-left: 10px;
    }
     
    ::placeholder{
        color: white;
    }

        
    h2 {
        margin-top: 120px;
        font-family: Roboto;
        font-style: normal;
        font-weight: 900;
        font-size: 3rem;
        line-height: 94px;
        text-align: center;
        color: #FFFFFF;
        text-shadow: 8px -8px 10px rgba(255, 255, 255, 0.07), -30px 30px 30px rgba(0, 0, 0, 0.2), -10px 10px 10px rgba(0, 0, 0, 0.35);
        margin-bottom: 50px;
    }

    .basic-info{
        text-align: center;
    }

 </style> 

<script>
    function myFunction(id) {
  // Get the checkbox
  var checkBox = document.getElementById(id);
  // Get the output text
  var text = document.getElementById("extraquestions");

  // If the checkbox is checked, display the output questions
  if (checkBox.checked == true){
    extraquestions.style.display = "block";
  } 
//   else {
//     questions.style.display = "none";
//   }
//Ne treba, nema problema onda?
}
</script>