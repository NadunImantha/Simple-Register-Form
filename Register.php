<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles.css">
    <title>Register Form</title>
</head>
<body>
    <div id="box">
		<form method="post" action="Welcome.php">
            <div class="container">
              <h1>Register</h1>
              <p>Please fill in this form to create an account.</p>
              <hr>
          
              <label for="name"><b>Your Name</b></label>
              <input type="text" placeholder="Your Name" name="name" id="name" required>

              <label for="email"><b>Email</b></label>
              <input type="text" placeholder="Enter Email" name="email" id="email" required>
          
              <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
          
              <label for="psw-repeat"><b>Confirm Password</b></label>
              <input type="password" placeholder="Confirm Password" name="psw-confirm" id="psw-confirm" required>
          
              <button type="submit" class="registerbtn">Register</button>
            </div>
          </form>
	</div>
</body>
</html>