<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Icard </title>
         <link rel="stylesheet" href="icard_css.css">
    <style>

    </style>
</head>
<body>

<?php
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $id_num = $_POST['id_num'];
      $father = $_POST['father'];
      $mobile = $_POST['mobile'];
      $address = $_POST['address'];
      $bddate = $_POST['birthdate'];
      $blood = $_POST['blood'];
      $sign = $_POST['sign'];
     // Get photo
      $photoname = $dir.$_FILES['photo']['name'];
      $photo_tempname = $dir.$_FILES['photo']['tmp_name'];
      $photo = "pics/".$photoname;
      move_uploaded_file($photo_tempname,$photo);  
               // Get sign photo
      $sign_photoname = $dir.$_FILES['sign']['name'];
      $sign_photo_tempname = $dir.$_FILES['sign']['tmp_name'];
      $sign_photo = "pics/".$sign_photoname;
      move_uploaded_file($sign_photo_tempname,$sign_photo);
          
      $user = 'root';
      $pass = 'mysql';
      $db = 'Icard';
      $conn = new mysqli('localhost',$user,$pass,$db);

      $sql = "INSERT INTO `icard_data`(`Fname`, `Lname`, `ID`, `Father`, `Mobile`, `address`, `birthDate`, `blood`, `photo`, `sign_photo`)
              VALUES ('$fname','$lname','$id_num','$father','$mobile','$address','$bddate','$blood','$photo','$sign_photo')";
    
    $conn->query($sql);

?>




    <div class="header">
        <h1> Identity Card Generator </h1>
     </div>
<center>
  
    <div id="card">
        <div class="bor" id="bor">
            <div class="inside">
                <div class="top">
                      <div class="proct">PROCTORIAL DEPARTMENT</div>
                      <div class="jmi">JAMIA MILLIA ISLAMIA</div>
                      <div class="cen">(A CENTRAL UNIVERSITY)</div>
                </div>
                <div class="middle1">
                   <div class="sign"> <img id="sign" src='<?php echo $sign_photo;?>' height="33px" width="80px"> </div>
                    <div class="id" id="idd"> <?php echo $id_num; ?> </div><br><br>         
                    <div class="photo"> <img id="pic" src='<?php echo $photo;?>' height="85px" width="80px"> </div><br>
                    <div class="name" id="nme"> <?php echo $fname ." ". $lname; ?> </div>
                    <div class="dip" >Dip. Computer Engg. -I-<br>Yr.</div>
                </div>           
                <div class="middle2"> 
                    <div class ="uni" id="univer"> University Polytechnic</div> 
                    <div class ="fac"> FACULTY OF ENGINEERING & TECHNOLOGY</div>
                </div>
                <div class="bottom"> 
                    <div > <img class="slogo" src="sslogo.jpg" height="65px" width="65px"> </div>
                    <div class="idate"> Issue Date: <span class="date"> 27/09/2018</span></div>
                    <div class="idate"> Validity: 30/05/2020</div>
                    <div > <img class="logo" src="jmi.png" height="57px" width="55px"> </div>
                    <div > <img class="proc" src="prot.jpeg" height="70px" width="165px"> </div>
                    <div class="chief">Chief Proctor</div>
                </div>
            </div>
        </div>
             <!--Backside html-->
             <div class="bor2">
                <div class="inside2">
                    <div class="top2">
                      <div class="bar">
                          <img src="bbb.JPG" height="40" width="160">
                          <div id="id2"> <?php echo $id_num; ?> </div>
                      </div>               
                    </div>
                    <div class="middle12">
                        <div class="always">ALWAYS CARRY THIS CARD AND SURRENDER <br> WHEN ASKED BY PROCTORIAL STAFF</div>
                    </div>
                    <div class="middle22">
                        <div class="blood">
                            <div class="bgroup">Blood Group </div>
                            <div id="group"> <?php echo $blood ?> </div>
                        </div>
                         <div class="info">Student info.</div>
                         <div class="indian">Indian</div>
                       <div class="data">
                            Fr Name : <span id="fathername"> <?php echo $father ?> </span> <br> 
                            Birth Date : <span id="bdate"> <?php echo $bddate ?> </span> <br>
                            Contact Number : <span id="phone"> <?php echo $mobile ?> </span> <br>
                            Address : <span id="address"> <?php echo $address ?> </span>
                       </div>
                    </div>
                    <div class="middle23">
                        <div class="lost">If this card is lost, lodge FIR and Report to <br>cheif proctor and librarian</div>
                    </div> 
                    <div class="bottom2"> 
                        <div class="emergency">Emergency contact No. (Security Centre):<br> 8744010360</div>
                    </div>
                </div>
            </div>
    </div>
</center>
<div class="footer">
    Copyright &copy 2020 | All rights reserved | SAQIB <br>
    +91 95480 97513 <br>
    mohdsaqibnavodaya@gmail.com
  </div>


</body>
</html>
