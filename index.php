<!DOCTYPE html>
<?php
include "connect.php";
session_start();
date_default_timezone_set("Asia/Calcutta");
if(isset($_GET['logout'])) {
session_destroy();
header('location:index.php');

}
?>
<html lang="en">
<head>
    <link rel="stylesheet" href="ad.css" type="text/css">
    <title>Document</title>
</head>
<body>
<div class="logout">
  <?php
if(isset($_SESSION['user'])){
    $user=$_SESSION['user'];
    echo ($user);
    ?>
    <br>
    <a href="?logout=1"> Logout</a><br>
    <a href="?cart"> Drive</a>
    <br>
    <a href="changepwd.php/?a=<?php echo ($user) ?>"> change password</a>
    <?php
  }
  else{
    echo "Login First to Use Drive";
  }
  ?>
  </div>
  <div class="cen">
       <div class="header">
          <h1>
         PERSONAL STORAGE SYSTEM
         </h1>
       </div>
       <div class="index">
       <ul>
         <li onclick= window.location.href='index.php';>
           HOME
         </li>
          <li onclick= window.location.href='\?login';>
          LOGIN
        </li>
        <li onclick= window.location.href='\?signup';>
          SIGN UP
        </li>
        <li onclick= window.location.href='\?about';>
          CONTACT US
        </li>
      </ul>
      </div>
      <div  class="cat2" style="width:100%; margin-left:6px;">
      <?php
      if(isset($_REQUEST['signup']))
        {
        ?>
  <h2>User SignUp</h2> <br>
      <form class="formm" action='#' method='post'> User Name* <input type='text'name='usr_name' required><br><br>
      Password*
        <input type='password' name='usr_pswd' required><br><br>
        Gender
        <input type="radio" name="gender" value="Male">Male
        <input type="radio" name="gender" value="female">Female <br> <br>
        Mobile* &nbsp&nbsp&nbsp <input type="tel" name="ph" required> <br> <br>
        Email*&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="email" name="email" required> <br><br>
        Address <textarea name="pta"  cols="30" rows="5"></textarea><br><br>
        <input type='submit'value='Add' name='add_usr'><br><br>
      </form>
  <?php
}

if(isset($_REQUEST['login'])){
    ?>
    <h2>User Login</h2> <br>
    <form class="formm" action="#" method="post">
           Username <br> <input autocomplete="off" type="email" name="uemail" id="email"> <br><br>
           Password  <br> <input type="password" name="password"> <br><br>
           <input type="submit" name="l0gin" value="Login">
            <br>
            <div class="logout" onclick= window.location.href='\?signup';> SignUp</div>
            <br>
           </form>
    <?php

    }
       if(isset($_REQUEST['cart'])){
        ?>

        <h2>User Cart  </h2>
        <form action="#" method="post" enctype="multipart/form-data" >
      <input type="file" name="itm"  required>
       <input type="submit" name="upload"  value="Upload Item">
        </form>

        <table cellspacing="0">
       <tr>
         <th>Item list</th>
         <th>Date</th>
         <th>Time</th>
         <th>Size</th>

       </tr>
          <?php
          $f=mysqli_query($con,"select * from drive where user='$user'");
          while( $ff= mysqli_fetch_array($f))
        {
         ?>
         <tr>
           <td>
             <?php echo $ff['2'];?>
           </td>
           <td>
             <?php echo $ff['3'];?>
           </td>
           <td>
             <?php echo $ff['4'];?>
           </td>
           <td>
             <?php echo $ff['5'];  echo "-Kb"?>
           </td>
               <td class="dlt_btn">
               <a href="delete.php/?del_id=<?php echo$ff['0'];?>&ittem=<?php echo$ff['2'];?>&location=<?php echo"storage/".$user."/".$ff['2']?>">  Remove </a>
               </td>
               <td class="dlt_btn">
               <a href="storage/<?php echo$user."/".$ff['2'];?>"> Download</a>
               </td>
                        </tr>
             <?php
                 }

           ?>

           </table>
         <?php
              }

 if(isset($_REQUEST['upload'])){
                $usr=$_SESSION['user'];
                $date= date("y/m/d");
                $time= date("H:i:s");
                $size= $_FILES['itm']['size']/1024;
                $t_name=$_FILES['itm']['tmp_name'];
                $item=$_FILES['itm']['name'];
                $folder="storage/".$usr;
                //this will check if the folder  exists. can be used to check the file also
                if(file_exists($folder)){
                }
                else{
                    //making a directory named according to the user and 0755 gives read and write permission.
                    mkdir ($folder, 0755);
                }

                if($size < 10240){
                  $path=$folder.'/'.$item;
                  $z=move_uploaded_file($t_name, $path );
                  $d=mysqli_query($con,"insert into drive (user,items,date,time,size)  values('$usr','$item','$date','$time','$size') ") or die(mysqli_error($con));
                  if($d){
                      ?>
                      <script>
                      alert("Uploaded");
                      </script>
                      <?php
                      }
                    }
                    else{
                      ?>
                      <script>
                      alert("Size exceeds 10 MB, choose file less than 10MB");
                      </script>

                      <?php
                    }
                    ?>
                    <script>
                    window.location.href="\?cart";
                    </script>
                    <?php
            }
if (isset($_REQUEST["add_usr"])){
    $usr_name=$_POST['usr_name'];
    $usr_pwd=$_POST['usr_pswd'];
    $gndr=$_POST['gender'];
    $ph=$_POST['ph'];
    $email=$_POST['email'];
    $addr=$_POST['pta'];
    $d=mysqli_query($con,"insert into user(user_name,password,gender,mobile,email,address)  values('$usr_name','$usr_pwd','$gndr','$ph','$email','$addr') ") or die(mysqli_error($con));
    if($d){

      header('Location:?login');

        }
   }

   if(isset($_REQUEST['l0gin'])){

    $email=$_POST['uemail'];
    $password=$_POST['password'];
    $z=mysqli_query($con,"select * from user where email='$email' && password='$password'");
    $x=mysqli_num_rows($z);
    $ff= mysqli_fetch_array($z);
    if($x)
    {
    $usr=$ff['1'];
    $_SESSION['user']=$usr;
     header('location:index.php');
  }
    else{
        ?>
        <script>
        alert("wrong user name and password");
        window.location="\?login";
        </script>
        <?php

     }
  }
  if(isset($_REQUEST['about'])){
    ?>
    <h1>Credits</h1>
    <hr>
    <h2>Razat Aggarwal: <h3>raggarwal_be15@thapar.edu</h3> </h2>
    <h2>Arshiya Chander: <h3>arshiyachander08@gmail.com</h3></h2>
    <h2>Harnoor Kaler: <h3>hskaler98@gmail.com</h3> </h2>
    <h2>Ketan Goel: <h3>goel97ketan@gmail.com</h3></h2>
    <?php


  }



?>
      </div>

  </div>


</body>
</html>
