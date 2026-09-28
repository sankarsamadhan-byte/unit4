<?php
if (isset($_POST['submit'])) {
    $email = $_POST['emai'];

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<p style='color:green;'>Valid Email (Verified by PHP)</p>";
    } else {
        echo "<p style='color:red;'>Invalid Email (Verified by PHP)</p>";
    }
}
?>