<?php
require 'connect.php';
if(isset($_POST["submit"])){
    $fname = $_POST['fname'];
    $pwd= $_POST['pwd'];
    $confirmpwd = $_POST['confirmpwd'];
    $Email = $_POST['Email'];
    $phone = $_POST['phone'];
    $depart = $_POST['depart'];
    $gender= $_POST['gender'];

    $query ="INSERT INTO form VALUES('','$fname', '$pwd','$confirmpwd','$Email','$phone','$depart','$gender')";
    mysqli_query($conn,$query);
    echo
    "
    <script> alert('Data Inserted');</script>
    ";
}
?>
<html>
    <head>

    </head>
    <body>

        <script>
            function myFun(){
                var correct_way = /^[A-Za-z]+$/;

                var a=document.getElementById("User_Name").value;
                if(a==""){
                    document.getElementById("Message").innerHTML="**Please fill username";
                    return false;
                }
                else{
                    document.getElementById("Message").innerHTML="";
                }
                if(a.length<3){

                document.getElementById("Message").innerHTML="**username must be 3 character";
                return false;
                }
                else{
                    document.getElementById("Message").innerHTML="";
                }
                if(a.length>20){
                    document.getElementById("Message").innerHTML="** username must be less than 20 character"
                    return false;
                }
                else{
                    document.getElementById("Message").innerHTML="";
                }
                if(a.match(correct_way))
                true;
                else{
                    document.getElementById("Message").innerHTML="** only alphabet are allowed";
                    return false;
                }
               

                
                var b= document.getElementById("passwords").value;
                var c=document.getElementById("passwordss").value;

                if(b==""){
                    document.getElementById("messages").innerHTML="**Please fill passwords";
                    return false;
                }
                else{
                    document.getElementById("messages").innerHTML="";
                }
                if(b.length<5){
                    document.getElementById("messages").innerHTML="**Password length must be greater then 8 characters";
                    return false;
                }
                else{
                    document.getElementById("messages").innerHTML="";
                }
                if(b.length>25){
                    document.getElementById("messages").innerHTML="**Password length must be smaller then 15 characters";
                    return false;
                }
                else{
                    document.getElementById("messages").innerHTML="";
                }
                if(b!=c){
                    document.getElementById("messages").innerHTML="**Password are not same";
                    return false;
                }
                else{
                    document.getElementById("messages").innerHTML="";
                }

                var d = document.myForm.Email.value;
                if(d.indexOf('@')<=0){
                    document.getElementById("Messages").innerHTML="**Invalid @ position";
                    return false;
                }
                
                else{
                    document.getElementById("Messages").innerHTML="";
                }
                if((d.charAt(d.length-4)!='.') && (d.charAt(d.length-3)!='.')) {
                    document.getElementById("Messages").innerHTML="**Invalid. position at 4";
                    return false;

                }
                else{
                    document.getElementById("Messages").innerHTML="";
                }


                var e=document.getElementById("mobilenumber").value;
                if(e==""){
                    document.getElementById("mobile").innerHTML="** Please fill Mobile Number";
                    return false;
                }
                else{
                    document.getElementById("mobile").innerHTML="";
                }
                if(isNaN(e)){
                    document.getElementById("mobile").innerHTML="** Enter only Numeric value";
                    return false;
                }
                else{
                    document.getElementById("mobile").innerHTML="";
                }
                if(e.length<10){
                    document.getElementById("mobile").innerHTML="**Mobile Number must be 10 digits";
                    return false;

                }
                else{
                    document.getElementById("mobile").innerHTML="";
                }
                if(e.length>10){
                    document.getElementById("mobile").innerHTML="**Mobile Number must be  10 digits";
                    return false;

                }
                else{
                    document.getElementById("mobile").innerHTML="";
                }
                if((e.charAt(0)!=9)&& (e.charAt(0)!=8)&&(e.charAt(0)!=7) &&(e.charAt(0)!=6)){
                    document.getElementById("mobile").innerHTML="**Mobile Number must start with registered value ";
                    return false;
                }
                else{
                    document.getElementById("mobile").innerHTML="";
                }


               var g= document.getElementById('Department').value;
               if(g=="Department"){
                document.getElementById("dept").innerHTML="Please select your department";
                return false;
               }
               else{
                document.getElementById("dept").innerHTML="";
               }

             


            

                var f= document.myForm.gender;
                for(i=0; i<f.length; i++){
                    if(f[i].checked==true)
                      return true;
                }
                {
                document.getElementById("gender").innerHTML="** Please Select your gender";
                return false;
            
            }
           
             }
                
              

               
                   
        </script>
       <form name="myForm" onsubmit="return myFun()" action="" method="post" autocomplete="off">
            UserName:<input type="text" name= "fname" id="User_Name"value="">
            <span id="Message" style="color:red;"></span>
            <br></br>
            
            Password:<input type="password" name="pwd" id="passwords" value="">
            <span id="messages" style="color:red;"></span>
            <br></br>
            Confirm Password:<input type="password" name="confirmpwd" id="passwordss" value="">
            <span id="messages"></span>
            <br></br>
           
        
            Email:<input type="text" name="Email" value="">
            <span id="Messages" style="color:red;"></span>
           <br></br>

            
           Mobile Number:<input type="text" name="phone" id="mobilenumber" value="">
            <span id="mobile" style="color:red;"></span>
            <br></br>


            DEPARTMENT:<select id="Department" name="depart">
                <option value="Department"></option>
                <option value="CSE">CSE</option>
                <option value="EEE">EEE</option>
                <option value="ECE">ECE</option>
                <option value="MECH">MECH</option>

            </select>
             <span id="dept" style="color:red;"></span>
           <br></br>


           

           Gender:<input type="radio" name ="gender" value="Male">Male</input>
            <input type="radio" name ="gender" value="Female">Female</input>
            <input type="radio" name ="gender" value="Others">Others</input>
            <span id="gender" style="color:red;"></span>
            <br></br>

           
     
            <input type="submit" name="submit" value="submit"></input>
  
        </form>
       
    </body>
</html>

