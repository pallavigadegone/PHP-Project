<!DOCTYPE html>
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
                    <a href="#">
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
                        <h1>Registered Taxies</h1>
                        
                    </div>
			<script src="assets/js/main.js"></script>
            <!DOCTYPE html>
<html>
<head>
<style>
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
  <tr>
    <th>Username</th>
    <th>Email</th>
    <th>Gender</th>
    <th>Number</th>
    <th>Password</th>
  </tr>
  <tr>
  <?php
    include("connection.php");
   
    $sql="SELECT `username`, `gender`, `email`, `mnumber`, `password` FROM `users` WHERE role='taxi'";
    $result=mysqli_query($connect,$sql)or die ("query failed");
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><?php echo$row['username'];?></td>
                <td><?php echo$row['email']; ?></td>
                <td><?php echo$row['gender']; ?></td>
                <td><?php echo$row['mnumber']; ?></td>
                <td><?php echo$row['password']; ?></td>
        
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