<?php 
   $Hno=$_POST['Hno'];
   $Hname=$_POST['Hname'];
   $city=$_POST['city'];
   $phone=$_POST['phone'];
   $Room_type=$_POST['Room_type'];
   $Price=$_POST['Price'];
   $con=new mysqli('localhost','root','','Hotel_Management');
   if ($con->connect_error){
      echo "con->connect_error";
      die('Connection Failed :' $con->connect_error);
   }
   else{
      $stmt=$con->prepare("Insert into Hotel(Hno,Hname,city,phone,Room_type,Price)values(?,?,?,?,
      ?,?)");
      $stmt->bind_param("issisi",$Hno,$Hname,$city,$phone,$Room_type,$Price);
      $stmt->execute();
      echo "Hotel Record Added";
      $stmt->close();
      $con->close();
   }