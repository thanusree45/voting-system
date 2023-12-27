<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>CSI VOTING SYSTEM</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" 
    integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" 
    crossorigin="anonymous">
  </head>
  <body class="bg-dark">
  <div style="display: flex; justify-content: space-between; align-items: center; padding: 5px;">

    <img src="https://upload.wikimedia.org/wikipedia/commons/4/47/Anits_logo.jpg"
         alt="Image 1" style="max-width: 40%; max-height: 80px; margin-right:15px;">

    <h1 class="text-center text-info p-1" style="font-size: 24px; flex: 1; text-align: center; margin: 0;">
      COMPUTER SOCIETY OF INDIA <br> STUDENT BRANCH IN ANITS
    </h1>

    <img src="https://icannwiki.org/images/thumb/e/ef/ComputerSocietyOfIndia-Logo.jpg/1200px-ComputerSocietyOfIndia-Logo.jpg"
         alt="Image 2" style="max-width: 40%; max-height: 80px; margin-left: 15px;">

  </div>

  <h2 class="text-center text-light" style="font-size: 18px;">CSI STUDENT BRANCH COORDINATORS ELECTIONS</h2>



    <div class="text-center">
    <a class="text-light" href="./partials/executive.php">Executive body of CSI</a>
</div>

    <div class="bg-light py-4">
    <h2 class="text-center">Login</h2>
    <div class="container text-center">
        <form action ="./actions/login.php" method="POST">
            <div class="mb-3">
                <input type="text" class="form-control w-50 m-auto"
                name="username" placeholder="Enter your username"
                required="required">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control w-50 m-auto"
                name="mobile" placeholder="Enter your mobile number"
                required="required">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control w-50 m-auto"
                name="password" placeholder="Enter your password"
                required="required">
            </div>
            <div class="mb-3">
                <select name="standard" class="form-select w-50 m-auto">
                    <option value="group">Group</option>
                    <option value="voter">Voter</option>
                </select>
            </div>
                <button type="submit" class="btn btn-dark my-4">Login </button>
                <p>Don't have an account?</p>  <a href="./partials/registration.php" >  Register here</a>
                   
            </form>
    </div>
</div>
  </body>
</html>