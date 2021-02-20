<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Icard</title>
         <link rel="stylesheet" href="icard_css.css">
    <style>
    </style>
</head>
<body>
    <div class="header">
       <h1> Identity Card Generator </h1>
    </div>
    <center>    
    <form  method="POST" action="Icard.php" enctype="multipart/form-data" onsubmit="return fun()" > 
        <div id="input">
             <h3>Identity Card form</h3><br>
             <input type="text" id="fname" placeholder="First Name" name="fname" autocomplete="OFF" ><br><span class="error"></span><br>
             <input type="text" id="lname" placeholder="Last Name" name="lname" autocomplete="OFF" ><br><span class="error"></span><br>
             <input type="tel" pattern="[0-9]{4}[0-9]{4}" required="wrong" id="idnumber" placeholder="ID Number   (must be in 8 digit)" name="id_num" autocomplete="OFF" ><br><span class="error"></span><br>
             <input type="text" id="father" placeholder="Father's Name" name="father" autocomplete="OFF" ><br><br>
             <input type="tel" pattern="[0-9]{5}[0-9]{5}" id="p_number" placeholder="Mobile Number" name="mobile" autocomplete="OFF" ><br><br>
             <input type="address" id="full_add" placeholder="full Address" name="address" ><br><br>
             <span> Birth Date &nbsp; &nbsp; &nbsp;:</span> <input type="date" id="b_date" name="birthdate"><br><span class="error"></span><br>
             <span> Blood Group &nbsp; :</span>
             <select id="b_group" name="blood" >
                 <option > A+ </option>
                 <option > A- </option>
                 <option > AB+ </option>
                 <option > AB- </option>
                 <option > B+ </option>
                 <option > B- </option>
                 <option > O+ </option>
                 <option > O- </option>
             </select> <br><br>
               <span> Upload Photo : </span><input type="file" id="pic" accept="image/*" onchange="preview_image(event)" name="photo"><br> <span class="error"></span> <br> 
               <span> Upload Sign &nbsp; &nbsp;: </span><input type="file" id="sign_pic" accept="image/*" onchange="preview_image2(event)" name="sign"><br> <span class="error"></span> <br>
 
         </div> <br>
         <input type="submit" value="Generate" id="gen">
     </form>
    </center>

    <div class="footer">
      Copyright &copy 2020 | All rights reserved | SAQIB <br>
      +91 95480 97513 <br>
      mohdsaqibnavodaya@gmail.com
    </div>


    <script>
        var brr = document.getElementById("card");
        brr.style.display="none";
        var pt = document.getElementById("print");
        pt.style.display="none";

   function fun(){  
         var fname = document.getElementById("fname").value;
         var lname = document.getElementById("lname").value;
         var id = document.getElementById("idnumber").value;
         
         var frname = document.getElementById("father").value;
         var phone = document.getElementById("p_number").value;
         var addrs = document.getElementById("full_add").value;
         var bdate = document.getElementById("b_date").value;
         var bgroup = document.getElementById("b_group").value;
            
         var pic = document.getElementById("pic");
         var sign_pic = document.getElementById("sign_pic");
         
         var error = document.getElementsByClassName("error");
         if(fname =="" || lname =="" || id == "" || pic.value == "" || sign_pic.value == "" || bdate == ""){
              for(let i=0;i<6 ;i++)
                  error[i].innerHTML = "Must required";
              return false;
              
         }
      
         return true;
      }
    </script>

</body>
</html>
