<html>
  <head>
    <title>change password</title>
    <link rel="stylesheet" href="ad.css" type="text/css">
  </head>
  <body>
    <div class='cen'>
          <?php
          include "connect.php";
         if (isset($_REQUEST["a"])) {
          $usr=$_REQUEST['a'];
         }
          ?>

          <div class="index">
            <h2> &nbsp CHANGE PASSWORD&nbsp </h2> <br>
            <form action='#' method='post'>
              <input type="text" name="usrname" id="" value="<?php echo ($usr) ?>" hidden >
              Old Password <br> <br><input type='password'name='opwd'><br><br>
              New Password  <br> <br><input type='password' name='npwd' required><br><br>
              ReEnter Password <br> <br><input type='password'  name='rnpwd'><br><br>
              <input type='submit'value='Change' name='changepwd' > <br><br>
            </form>
          </div>


    <?php
            if (isset($_REQUEST["changepwd"])) {
        $mail = $_POST['usrname'];
        $opwd = $_POST['opwd'];
        $npwd = $_POST['npwd'];
        $rnpwd = $_POST['rnpwd'];
        if ($npwd == $rnpwd) {
        $z=mysqli_query($con,"select * from user where user_name='$mail' and password='$opwd'");
        $x=mysqli_num_rows($z);
            if($x){
            $d=mysqli_query($con,"update user set password='$npwd' where user_name='$mail'");
              if($d){
             ?>
              <script>
              alert("password changed ");
              window.location='../index.php';
              </script>
              <?php                }}
        else{
          ?>
          <script>
          alert("old password not match");
          load();
          </script>
          <?php
        }
                } else {
             ?>
         <script>
         alert("new password not match");
         load();
         </script>
         <?php          }
    }
    ?>
  </div>
</body>
</html>
