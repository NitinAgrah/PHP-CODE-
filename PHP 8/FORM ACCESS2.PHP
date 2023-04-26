<?php
if (empty($_POST['name']) && empty($_POST['email'])) {
    echo " <br/> Please fill the form";
} else {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    echo ('Your Name is:    ' . $name . '<br/>');
    echo ('Your Email is:    ' . $email . '<br/>');
    echo ('Your Password is:    ' . $password . '<br/>');
}
