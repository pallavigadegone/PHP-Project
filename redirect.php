<?php
   $conn=mysqli_connect('localhost','root','','u'); 
   $name="";
    if(isset($_GET['name'])){
    $mess=$_GET['name'];
    }

   $sql="select * FROM `users` WHERE fname='$name'";
   $result=mysqli_query($conn,$sql);
   while($row=mysqli_fetch_array($result))
   {
?>

    <div class="content">
     <?php echo $row['fname'];?>
     <?php echo $row['uname'];?>
     <?php echo $row['role'];?>
     <?php echo $row['email'];?>
     <?php echo $row['mnumber'];?>
</div>

<?php
}
?>

