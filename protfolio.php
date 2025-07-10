<?php
include 'connection.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $insertquery = "INSERT INTO entry_details(name, email, message) 
                    VALUES('$name', '$email', '$message')";

    $res = mysqli_query($con, $insertquery);

    if($res){
        // I-send ang email gamit ang mail() function
        $to = "kenjievillamar456@gmail.com"; // I-update ito sa iyong email address
        $subject = "New Message from Website";
        $body = "Name: $name\nEmail: $email\nMessage: $message";
        $headers = "From: $email";

        // I-send ang email
        $mail_sent = mail($to, $subject, $body, $headers);

        if($mail_sent) {
            ?>
            <script>
                alert('MESSAGE SENT. THANK YOU!');
            </script>
            <?php
        } else {
            ?>
            <script>
                alert('MESSAGE SENT BUT EMAIL DELIVERY FAILED.');
            </script>
            <?php
        }
    } else {
        ?>
        <script>
            alert('MESSAGE IS NOT SENT');
        </script>
        <?php
    }
}

?>
