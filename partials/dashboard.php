<?php
session_start();
if(!isset($_SESSION['id'])){
  header('location:../');
}
$data=$_SESSION['data'];
if($_SESSION['status']==1){
  $status='<b class="text-success">Voted</b>';

}
else{
  $status='<b class="text-danger">Not Voted</b>';
}
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>VOTING SYSTEM -Dashboard</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css" 
    integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" 
    crossorigin="anonymous">
    <style>
        /* Set black background for the body */
        body {
            background-color: black !important;   
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            /* This ensures the container takes the full height of the viewport */
            margin: 0; /* Remove default margin */
        }

        /* Set blue color for Back and Log out buttons */
        .btn-primary {
            background-color: blue !important;
            border-color: blue !important;
        }

        /* Set red color for the Vote button */
        .btn-danger,
        .btn-danger:hover,
        .btn-danger:active,
        .btn-danger:focus {
            background-color: red !important;
            border-color: red !important;
        }

        /* Set green color for the Voted button */
        .bg-success {
            background-color: green !important;
        }

        /* Adjust text color */
        .text-light {
            color: white !important;
        }

        /* Set black background for the container */
        .container {
            background-color: black !important;
        }
    </style>
  </head>
  <body class="bg-secondary text-light" text-align="center">
    <div class="container  my-5">
      <a href="../"><button class="btn btn-primary text-light px-3">Back</button></a>
      <a href="logout.php"><button class="btn btn-primary text-light px-3">Log out</button></a>
      <h1 class="my-3">VOTE HERE...</h1>
        <div class="row my-5">
          <div class="col-md-7">
            <?php 
            if (isset($_SESSION['groups'])){
              $groups=$_SESSION['groups'];
              for ($i=0;$i<count($groups);$i++){
                ?>
                <div class="row">
                <div class="col-md-4">
                <img src="../uploads/<?php echo $groups[$i]['photo'] ?>" 
                alt="Group image">
                </div>
              <div class="col-md-8">
                <strong class="text-dark h5">Group name:</strong>
                <?php echo $groups[$i]['username'] ?>
                <br>
                <strong class="text-dark h5">Votes:</strong>
                <?php echo $groups[$i]['votes'] ?><br>
              </div>
            </div>
            
              <form action="../actions/voting.php" method="post">
                <input type="hidden" name="groupvotes" value="<?php echo $groups[$i]['votes']
                 ?>">
                <input type="hidden" name="groupid" value="<?php echo $groups[$i]['id']?>">
              <?php
              if($_SESSION['status']==1) {
                ?>
                <button class="bg-success my-3 text-white px-3">voted</button>
                <?php } else{
                  ?>
                   <button  class="bg-danger my-3 text-white px-3" type="submit">vote</button>
                   <?php
                }
              ?>
              </form>
              <hr>
            <?php
              }   
          } else{
                ?> 
                <div class="Container">
                  <p>No groups to display</p>
              </div>
      <?php
              } 
              ?>    
    </div>
    <div class="col-md-5" >
      <img src="../uploads/<?php echo
       $data['photo']?>" alt="User image">
      <br>
      <br>
      <strong class="text-dark h5">Name:</strong>
      <?php echo $data['username']; ?><br><br>
      <strong class="text-dark h5">Mobile:</strong>
      <?php echo $data['mobile']; ?><br><br>
      <strong class="text-dark h5">Status:</strong>
      <?php echo $status; ?><br><br>
    </div>
</div>
</div>
</body>
</html>
