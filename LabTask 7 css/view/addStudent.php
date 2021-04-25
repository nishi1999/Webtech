<!DOCTYPE HTML>
<html>

<head>



<script type="text/javascript">


function showHint(str) {
if (str.length == 0) {
document.getElementById("txtHint").innerHTML = "";
return;
} else {
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
document.getElementById("txtHint").innerHTML = this.responseText;
}
};
xmlhttp.open("GET", "suggestion.php?q=" + str, true);
xmlhttp.send();
}
}



function showadd(str) {
if (str.length == 0) {
document.getElementById("txtadd").innerHTML = "";
return;
} else {
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
document.getElementById("txtadd").innerHTML = this.responseText;
}
};
xmlhttp.open("GET", "address.php?q=" + str, true);
xmlhttp.send();
}
}


  function validation()
  {  
    var name=document.myform.name.value;
    var address=document.myform.address.value;
	var phonenum=document.myform.phonenum.value;
	var dob=document.myform.dob.value;
	var pass=document.myform.pass.value;
    //alert("hello")
	
	if (username==null || username==""){  
        alert("Name must be Filled-Up");  
        return false;  
      }else if(password.length<5){  
        alert("Password must be at least 5 characters long.");  
        return false;  
      }  
    }
    function checkEmpty() {
        if (document.myform.username.value = "") {
          alert("Name must be Filled-Up");
            return false;  
        }
  }
    
	 function checkName() {
      if (document.getElementById("name").value == "") {
          document.getElementById("nameErr").innerHTML = "Name can't be blank";
          document.getElementById("nameErr").style.color = "red";
          document.getElementById("name").style.borderColor = "red";
      }else if(document.getElementById("name").value.split(" ").length<2){
          document.getElementById("name").style.borderColor = "red";
          document.getElementById("nameErr").style.color = "red";
        document.getElementById("nameErr").innerHTML = "Name must contain at least 2 words.";
      }
      else{
        document.getElementById("nameErr").innerHTML = "";
          document.getElementById("nameErr").style.color = "red";
        document.getElementById("name").style.borderColor = "green";
      }
        }
		
		function checkAddress() {
      if (document.getElementById("address").value == "") {
          document.getElementById("addressErr").innerHTML = "Fill-Up your present address";
          document.getElementById("addressErr").style.color = "red";
          document.getElementById("address").style.borderColor = "red";
      }
      else{
        document.getElementById("addressErr").innerHTML = "";
          document.getElementById("addressErr").style.color = "red";
        document.getElementById("address").style.borderColor = "green";
      }
        }
		
		
		function checkPhone() {
      if (document.getElementById("phonenum").value == "") {
          document.getElementById("phonenumErr").innerHTML = "Phone number must be Numeric value";
          document.getElementById("phonenumErr").style.color = "red";
          document.getElementById("phonenum").style.borderColor = "red";
      }
	  else if(document.getElementById("phonenum").value.length<10){
          document.getElementById("phonenum").style.borderColor = "red";
          document.getElementById("phonenumErr").style.color = "red";
        document.getElementById("phonenumErr").innerHTML = "Phone Number must be at least 11 digit";
      }
      else{
        document.getElementById("phonenumErr").innerHTML = "";
          document.getElementById("phonenumErr").style.color = "red";
        document.getElementById("phonenum").style.borderColor = "green";
      }
        }
   
        function checkDOB() {
      if (document.getElementById("dob").value == "") {
          document.getElementById("dobErr").innerHTML = "Date of Birth can't be blank";
          document.getElementById("dobErr").style.color = "red";
          document.getElementById("dob").style.borderColor = "red";
      }
      else{
        document.getElementById("dobErr").innerHTML = "";
          document.getElementById("dobErr").style.color = "red";
        document.getElementById("dob").style.borderColor = "green";
      }
        }
        
		function checkPass(){
          if (document.getElementById("pass").value == "") {
          document.getElementById("passErr").innerHTML = "Password can't be blank";
          document.getElementById("passErr").style.color = "red";
          document.getElementById("pass").style.borderColor = "red";
      }else if(document.getElementById("pass").value.length<5){
          document.getElementById("pass").style.borderColor = "red";
          document.getElementById("passErr").style.color = "red";
        document.getElementById("passErr").innerHTML = "Password must be at least 6 characters long.";
     }
     else if(document.getElementById("pass").value.search(/[!\@\#\$\%]/)==-1){
          document.getElementById("pass").style.borderColor = "red";
          document.getElementById("passErr").style.color = "red";
        document.getElementById("passErr").innerHTML = "Password must have one special characters (@,#,$,%)!.";
     }
       else{
        document.getElementById("passErr").innerHTML = "";
          document.getElementById("passErr").style.color = "red";
        document.getElementById("pass").style.borderColor = "green";
      }
        }
		
  </script>
  
  
  
    <style>
	
	


body{
	background-image: url("study.png");
	background-repeat: no-repeat;
	background-size: cover;
}

	
	
    .error {
        color: #FF0000;
    }
	h1{
		width: 20%;
	margin:15px auto;
	box-shadow: 0 4px 8px 5px rgba(0, 0, 0, 0.8), 
				0 6px 20px 0 rgba(0, 0, 0, 0.19);
	color: #B9770E ;
	}
    h2{
       text-align: center; }
  form{ padding-top: 20px;
        text-align: center;
        font-size: 20px;}
  input{
       
	background-color: #AED6F1;
  width: 40%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border:none;
  border-radius: 10px;
  box-sizing: border-box;
  text-transform: capitalize;
  text-align: center;
  font-size: 17px;
 box-shadow: inset 0 0 10px black;
  }
  input[type="submit"] {
    padding: 5px 15px;
    background-color: green;
    border: 8px;
    color: #fff;
    border-radius: 8px;
}  
  input[type="reset"] {
    padding: 5px 15px;
    background-color: gray;
    border: 8px;
    color: #fff;
    border-radius: 8px;

}

  span{ font-size: 15px;
        text-align: center;  
      }
    </style>
</head>

<body>
 <div><?php include 'controller/Head.php';?></div>

<?php 


if (empty($_SESSION['username'])) {
    header("location:userlogin.php");
    
}

else{
    echo "<div style='float: right';>"." Logged in as ".$_SESSION['username']." | ";
    echo "<a href='Dashboard.php'>Dashboard</a> | " ;
    echo "<a href='controller/Logout.php'>Logout</a>" ;
    echo "</div><br><br><hr><br>";
   
}

 ?>



    
    <form  method="post" onsubmit="return validation();" action="controller/addUsersController.php" style="border: 5px;margin-top: 0px;margin-bottom: 0px; margin-left: 300px;margin-right: 300px;border-style: solid;border-color: black;padding: 1em;" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      
      <h1><span style="font-weight: bold;font-size: 25px;">STUDENT</span></h1>  <hr>
            
            <label for="name">Name:</label> <input type="text" name="name" id="name" onkeyup="showHint(this.value)" onkeyup="checkName()" onblur="checkName()" placeholder="Enter Your Name">
           </label>
          <span class="error" id="nameErr">* <br><?php if(!empty($_GET['nameErr'])){echo $_GET['nameErr'];} ?></span>
		  <span id="txtHint"></span>
            <br>
            <br>
            <label for="address">Address:</label> <input type="text" name="address" id="address" onkeyup="checkAddress()" onblur="checkAddress()"  placeholder="Enter your Address">
            <span class="error" id="addressErr">* <br><?php if(!empty($_GET['addressErr'])){echo $_GET['addressErr'];} ?></span>
			<span id="txtadd"></span>
            <br>
            <br>
            <label for="phonenum">Phone NO:</label> <input type="number" name="phonenum" id="phonenum" onkeyup="checkPhone()" onblur="checkPhone()" placeholder="Enter Your Phone number">
            <span class="error" id="phonenumErr">* <br><?php if(!empty($_GET['PnumberErr'])){echo $_GET['PnumberErr'];} ?></span>
            <br>
            <br>
                        <fieldset style="border-color: black;">
                <legend><label for="dob">Date Of Birth</label></legend>
				<input type="date" name="dob" id="dob" onkeyup="checkDOB()" onblur="checkDOB()">
				<span i></span>
				<span class="error" id="dobErr">* <br><?php if(!empty($_GET['dobErr'])){echo $_GET['dobErr'];} ?></span>
                
            </fieldset>
            <fieldset style="border-color: black;">
                <legend><label for="gender">Gender</label></legend>
				
                Gender:
                <input type="radio" name="gender" id="gender" value="female">Female
                <input type="radio" name="gender" id="gender" value="male">Male
                <input type="radio" name="gender" id="gender" value="other">Other
                <span class="error" id="genderErr">* <br><?php if(!empty($_GET['genderErr'])){echo $_GET['genderErr'];} ?></span>
                </fieldset>                 <fieldset style="border-color: black;">
                <legend><label for="Designation">Designation</label></legend>
				<span class="error"id="designationErr">* <br><?php if(!empty($_GET['designationErr'])){echo $_GET['designationErr'];} ?></span>

                Designation:
                <input type="radio" name="designation" value="Teacher">Teacher
                <input type="radio" name="designation" value="Student">Student

                </fieldset>
            <br>
            <label for="pass">Password:</label> <input type="Password" name="pass"id="pass" onkeyup="checkPass()" onblur="checkPass()" placeholder="Enter Your Password">
			<span class="error"id="passErr">* <br><?php if(!empty($_GET['passErr'])){echo $_GET['passErr'];} ?></span>
            
            <br>
            <br>
            <hr>
            <br>
            
  <input type="submit" name = "create" value="Save">
  <input type="reset" name="reset" value="Reset">
       
    </form>
    <div><?php include 'controller/footer.php';?></div>
</div>
</body>

</html>