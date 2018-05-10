<?php
        $email = $_POST['email'];
        $number = $_POST['phoneNumber'];
        $comment = $_POST['comments'];
        $sql = "INSERT INTO form (email,number,comment) VALUES ('$email','$number','$comment')";

        function addContact($email, $number, $comment) {
            global $conn;
            $sql = "INSERT INTO content (email, number, comment) VALUES ('$email', '$number', '$comment')";
        }
?>