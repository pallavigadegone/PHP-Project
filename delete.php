<?php
   
   $id= $_GET['id'];

   $conn=mysqli_connect('localhost','root','','u'); 

   $sql="DELETE FROM `users` WHERE id='$id'";
    echo $sql;
   $result=mysqli_query($conn,$sql);
   if(mysqli_query($conn,$sql)){
       header("Location: checkadmin.php");
   }else{
         echo "Not deleted";
   }
   
?>
