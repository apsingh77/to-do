<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Login</title>
</head>
<body>
        
        <div class="container" >
             
            <div class="col-sm-6" style="margin-left:25%">
            <h3>Sign Up</h3> 
        <form action ="save_signup.php" method="post">      
            <div class="form-group" >
                <label for="fname">First name:</label>
                <input type="text" id="fname" name="fname" class="form-control"  placeholder="Enter first name" >
            </div>


            <div class="form-group" >
                <label for="lname">Last name:</label>
                <input type="text" id="lname" name="lname" class="form-control"  placeholder="Enter last name" >
            </div>

            <div class="form-group" >
                <label for="dob">Date of birth:</label>
                <input type="date" id="dob" name="dob" class="form-control"  placeholder="date of birth" >
            </div>
            <div class="form-group" >
                <label for="gender">Gender:</label>
                <select class="form-control" name="gender">
                    <option value="">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Others</option>
                </select>
            </div>
            <div class="form-group" >
                <label for="email">Email:</label>
                <input type="text" id="e_mail" name="email" class="form-control"  placeholder="Enter email" >
            </div>
            
            <div class="form-group" >
                <label for="password">Password:</label>
                <input type="password" id="pass" name="password" class="form-control"  placeholder="Enter password" >
            </div>    

            <button type="submit" class="btn btn-default">Submit</button>
            </form>    
        </div>
</body>
</html>