<?php 

include("connection.php");
//error_reporting(0);
$output = "";
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- =============== Navigation ================ -->

    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">

                        <span class="title">ADMIN'S DASHBOARD</span>
                    </a>
                </li>

                <li> 
				
                    </b>
                    <a href="admin.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    
                    <a href="checkadmin.php">
                        <span class="icon">
                            <ion-icon name="checkmark-done-outline"></ion-icon>
                        </span>
                        <span class="title">Confirmation</span>
                    </a>
                </li>

                <li>
                    <a href="admin1.php">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Tourist</span>
                        
                    </a>
                </li>
                

                <li>
                    <a href="admin2.php">
                        <span class="icon">
                            <ion-icon name="restaurant-outline"></ion-icon>
                        </span>
                        <span class="title">Hotel</span>
                    </a>
                </li>

                <li>
				
                    <a href="admin3.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Home Stay</span>
                    </a>
                </li>
                <li>
                    <a href="admin5.php">
                        <span class="icon">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                        </span>
                        <span class="title">Taxi</span>
                    </a>
                </li>

                <li>
                    <a href="login.php">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
			
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                
            </div>
			 <div class="details">
                        <h2>Confirmation Of vender's</h2>
                        
                    </div>
			<script src="assets/js/main.js"></script>

            <!DOCTYPE html>
<html>
<head>
<style>
.button {
  background-color: #4CAF50;/* Green */
  border: none;
  color: white;
  padding: 10px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  margin: 1px 1px;
  cursor: pointer;
}
.button3 {
  background-color: #f44336;border: none;
  color: white;
  padding: 10px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  margin: 1px 1px;
  cursor: pointer;} 
.button4 {
  background-color: #e7e7e7; 
  color: black;
  padding: 10px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  margin: 1px 1px;
  cursor: pointer;}

#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #80d0f5;
  color: white;
}
</style>
</head>
<body>



<table id="customers">
<thead>
  <tr>
    <th>User id</th>
    <th>Name of User</th>
    <th>Type of User</th>
    <th>Verify User</th>
    <th>Confirm User</th>
    <th>Delete User</th>
  </tr>
</thead>
  <tr>
  <?php
    include("connection.php");
   
    $sql="SELECT * FROM `users` WHERE role!='admin' and role!='tourist'";
 $result=mysqli_query($connect,$sql)or die ("query failed");
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><?php echo$row['id'];?></td>
                <td><?php echo$row['username'];?></td>
                <td><?php echo$row['role'];?></td>
                <td><button><a class="button4" href="varify.php"> Verify</a></button></td>
                <td><button class="button">Confirm</button></td>
                <td><a class="button3" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
            </tr>
        <?php
        }
    }
    ?>
  </tr>
</table>
</body>
</html>
    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>