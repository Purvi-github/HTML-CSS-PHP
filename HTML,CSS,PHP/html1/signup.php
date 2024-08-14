<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Bookshelf.com</title>
        <link rel="stylesheet" href="style.css">
        <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <header>
         <div class="main">
                <ul> 
                    <br>
                    <li><a href="index.php">Login</a></li>
                   
                </ul>
         </div>
         <div class="title">
            <h1>Welcome to BookShelf</h1>
         </div>
         <div class="button">
            <a href="#" class="btn">HAPPY EXPLORING....</a> 
         </div>
         <div class="registration-form">
            <form method="post">
            <h1>Registration Form</h1>
            <div class="textbox">
                <input type="text" placeholder="First Name" name="fname" required>
            </div>
            <div class="textbox">
                <input type="text" placeholder="Last Name"  name="lname" required>
            </div><br>
            <div class="Gender" >
                <input type="radio" name="Gender" value="Male"  required/>Male
                <input type="radio" name="Gender" value="Female"  required/>Female
            </div>
            <div class="textbox" >
                <input type="email" placeholder="Email" name="email" required>
            </div>
            <div class="textbox">
            <input type="password" id="pass" placeholder="Password" name="pass" required>
            </div>
                                        <button type="submit" class="btn1" name="submit" >Submit</button>
            </form>
         </div>
        </header>
        
    </body>
</html>

							<?php	
							include ('connect.php');
                if (isset($_POST['submit'])){
							 
   $FirstName=$_POST['fname'];
   $LastName=$_POST['lname'];
   $gender=$_POST['Gender'];
   $email=$_POST['email'];
   $password=$_POST['pass'];

									
									
						mysqli_query($db,"insert into `details` (`Firstname`, `LastName`, `gender`, `email`, `password`)
						values ('$FirstName','$LastName', '$gender', '$email', '$password')")or die(mysqli_error());
						echo "<script>alert('Registration Successfully Completed!'); window.location='index.php'</script>";
					
									}
							
								?>