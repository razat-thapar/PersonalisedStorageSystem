

    <?php
    include "connect.php";

    if(isset($_REQUEST['del_id'])){

        $idd= $_REQUEST['del_id'];
        $loc= $_REQUEST['location'];
        mysqli_query($con,"delete from drive where id='$idd'") or die(mysqli_error($con));
      //  header("location:/personalstoragesystem/index.php");

        if(unlink($loc))
        {
          ?>
          <script>
          alert("Sucessfully deleted the file from the drive! ");
          </script>
          <?php
        }
        else{
          ?>
          <script>
          alert("File Doesn't exits !");
          </script>
          <?php
        }
        //header("location:/personalstoragesystem/index.php?cart");
          ?>
        <script>
        window.location.href="/personalstoragesystem/index.php?cart";

        </script>
        <?php
      }


          ?>
