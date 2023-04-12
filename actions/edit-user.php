<?php

include "../classes/User.php";


//create object
$user = new User;

//call the method
$user->update($_POST, $_FILES);
// $_POST holds all data from the form
// $_FILES holds the actual image and the details such as name

?>