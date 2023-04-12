<?php
include "../classes/User.php";

// Create on object of the class User;
$user = new User;

// Call the method using the object $user
$user->store($_POST);
// $_POST holds all the data from the views folder>register.php