<?php 
include('dbcon.php');

if(isset($_POST['login']))
{
    $username= $_POST['userid'];
    $password= $_POST['pass'];
    $qry="SELECT * FROM `admin` WHERE `username` = '$username' AND `password` = '$password';" ;
    $run=mysqli_query($conn,$qry);
    $row=mysqli_num_rows($run);
    if($row<1)
    {
        ?>
        <script>
            alert("user name or password not matched try again");
            window.open('login.php','_self');
        </script>
        <?php
    }
    else{
        $data=mysqli_fetch_assoc($run);
        $id=$data['id'];
        // echo "id=".$id;
        session_start();
        $_SESSION['uid']=$id;
        header('location:admin/admindashboard.php');
    }
}




?>

<?php include('./includes/header.php'); ?>

<!--  your contents here -->
<div class="container">
<h1 class="form-heading">login Form</h1>
<div class="login-form">
<div class="main-div">
    <div class="panel">
   <h2>Admin Login</h2>
   <p>Please enter your username and password</p>
   </div>
    <form id="Login" action="login.php" method="POST">

        <div class="form-group">


            <input type="text" class="form-control" id="userid" name="userid" placeholder="Userid">

        </div>

        <div class="form-group">

            <input type="password" class="form-control" id="inputPassword" name="pass" placeholder="Password">

        </div>
        <div class="forgot">
        <a href="#">Forgot password?</a>
</div>
        <button type="submit" name="login" class="btn btn-primary">Login</button>

    </form>
    </div>

</div>
</div>
</div>



<?php include('./includes/footer.php'); ?>