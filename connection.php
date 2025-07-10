<?php
$username="if0_36119082";
$password="aj70ArVEVB1";
$server="sql206.infinityfree.com";
$db="if0_36119082_database123";

$con=mysqli_connect($server,$username,$password,$db);
if($con){
    //echo "CONNECTION SUCCESS";
    ?>
    <script>
        alert('connction success');
    </script>
    <?php
}else{
    //echo "NO SUCCESS";
    die("NO SUCCESS" . mysqli_connect_error());
}

?>