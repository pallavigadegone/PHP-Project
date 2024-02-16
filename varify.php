
<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" href="varify.css">
	<title>verify</title>
	<link rel="preconnect"
		href="https://fonts.gstatic.com">
</head>

<body>
	<div class="container">
		<div class="user-image">
			<img src="images\user.png">
		</div>

		<div class="content">
		<?php
    include("connection.php");
    $sql="select * from users where id=7";
    $result=mysqli_query($connect,$sql)or die ("query failed");
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            ?>
            <tr>
			<h4 class="name">Name: <td><?php echo$row['firstname'];?></td></h4><br>
			<h4 class="name">Username: <td><?php echo$row['username'];?></td></h4><br>
			<h4 class="name">Role: <td><?php echo$row['role']; ?></td></h4><br>
			<h4 class="name">Email id: <td><?php echo$row['email']; ?></td></h4><br>
			<h4 class="name">Mobile no: <td><?php echo$row['mnumber']; ?></td></h4><br>
			<h4 class="name">Registration done: yes</h4>
			
        </tr>
        <?php
        }
    }
    ?>
    <td>


			<div class="links">
				<a class="facebook"
					target="_blank" title="facebook">
					<i class="fab fa-facebook"></i>
				</a>

				<a class="git"
					title="github" target="_blank">
					<i class="fab fa-github-square"></i>
				</a>

				<a class="linkedin" 
					title="linkedin" target="_blank">
					<i class="fab fa-linkedin"></i>
				</a>
				
				<a class="insta"
					target="_blank" title="instagram">
					<i class="fab fa-instagram-square"></i>
				</a>
			</div>


			<a class="effect effect-4" href="checkadmin.php">
				Back
			</a>
		</div>
	</div>
	
	<!-- This is link of adding small images
		which are used in the link section -->
	<script src="https://kit.fontawesome.com/704ff50790.js"
		crossorigin="anonymous">
	</script>
</body>

</html>
