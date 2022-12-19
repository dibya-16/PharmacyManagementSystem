<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    
    <title>Form Registration</title>
    <link rel="stylesheet"type="text/css"href="css/bgform.css">
     <script src="js/formRegistration.js"></script> 

   <style>
    form{
            background-color:skyblue;
            height:1300px;
            width:700px;
            text-align: center;

        }
   </style>

</head>
     <?php
       include "header.php";
       
    ?>
<body>
    
    <center><form action="deliveryRegistrationAction.php" method="POST"name="regform"onsubmit="return isValid()">
     <fieldset>
        <legend><h2>Registration Form</h2></legend>
        <fieldset>
         <center><h2>Basic Information:</h2></center>
         <p><b>First Name:&nbsp &nbsp &nbsp</b><input type="text"name="firstName"placeholder="First Name" ></p><span id="firstNamejs"style="color: red;" ></span>

         <p><b>Last Name: &nbsp &nbsp &nbsp</b><input type="text"name="lastName"placeholder="Last Name"></p><span id="lastNamejs" style="color: red;"></span>

         <b>Gender: &nbsp &nbsp &nbsp</b><input type="radio"name="gender"value="Male">Male
                       <input type="radio"name="gender"value="Female">Female
                       <input type="radio"name="gender"value="Others">Others
                       <span id="genderjs" style="color: red;"></span>
         <p><b>Date of Birth:&nbsp &nbsp &nbsp</b><input type="date"name="dateOfBirth"Placeholder="Date of Birth"></p><span id="datejs" style="color: red;"></span>
         <b>Religion:&nbsp &nbsp &nbsp</b>
         <select name="religion">
             <option>Hindu</option>
             <option>Islam</option>
             <option>Others</option>

         </select><span id="religionjs" style="color: red;"></span>
         
         </fieldset>
         <br>
         <fieldset>
         <center><h2>Contact Information:</h2></center>
         <p><b>Present Address:</b></p>
         <textarea name="presentAddress"></textarea><span id="presentAddressjs" style="color: red;"></span>
         <p><b>Permanent Address:</b></p>
         <textarea name="permanentAddress"></textarea>
         <span id="permanentAddressjs" style="color: red;"></span>
         <p><b>Phone:&nbsp &nbsp &nbsp</b><input type="tel"name="phone"Placeholder="Phone Number"></p><span id="phonejs" style="color: red;"></span>
         <p><b>Email:&nbsp &nbsp &nbsp</b><input type="email"name="email"Placeholder="Email"></p><span id="emailjs" style="color: red;"></span>
         <p><b>Personal website Link:&nbsp &nbsp &nbsp</b><input type="url"name="personalWebsiteLink"Placeholder="Personal Website Link"></p><span id="personalWebsiteLinkjs" style="color: red;"></span>
         


        </fieldset>  
        
         <br>
        <fieldset>
        <center><h2>Account Information:</h2></center>
         
        </textarea>

         <p><b>Username:&nbsp &nbsp &nbsp</b><input type="text"name="username"Placeholder="Username"></p><span id="usernamejs" style="color: red;"></span>
         <p><b>Password:&nbsp &nbsp &nbsp</b><input type="password"name="password"Placeholder="Password"></p><span id="passwordjs" style="color: red;"></span>
         <p><b>Role:&nbsp &nbsp &nbsp</b><input type="text"name="role"Placeholder="Role"></p><span id="rolejs" style="color: red;"></span>
      
         


        </fieldset>  
        <br>
        <button type="submit">Registered</button> 

          </fieldset>
    </form>
    </center>

    <center><p><h3> Already registered? <a href="deliveryLogin.php"> Click here </a> for login.</h3></p></center>
</body>
    <?php
       include "footer.php";
    ?>
</html>