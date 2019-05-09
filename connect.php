<?php
$con=mysqli_connect("localhost:3308","root","root","storagesystem");

if(!$con){
    ?>
    <script>

        alert(" Database not Connected");
        </script>

    <?php
}


?>
