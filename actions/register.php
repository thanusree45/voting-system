<?php
include('connect.php');

$username = $_POST['username'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$image=$_FILES['photo']['name'];
$tmp_name=$_FILES['photo']['tmp_name'];
$standard = $_POST['standard'];

if ($password!=$cpassword) {
    echo '<script>
    alert("Passwords did not match");
    window.location="../partials/registration.php";
    </script>';
} else {
    
    move_uploaded_file($tmp_name,"../uploads/$image");
    $sql ="INSERT INTO `votesdata` (username, mobile,password,photo,standard,status,votes) 
    VALUES ('$username', '$mobile', '$password','$image', '$standard',0,0)";

    // Execute the query (you should use prepared statements to prevent SQL injection)
    if (mysqli_query($con, $sql)) {
        echo '<script>
        alert("Registration successful");
        window.location="../index.php"
        </script>';
        }
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }
}
?>
