<?php 

session_start(); // must go right at the top of the page - to track login

$logins = array('myUsername' => 'myPassword'); // your username and password

if($_POST['Submit'] == 'Submit') { // check for form submit
    $user = $_POST['user']; 
    $pass = $_POST['pass']; 
    if (isset($logins[$user]) && ($logins[$user] == $pass)) { // check login and compare credentials
        $_SESSION['username'] = $user; // set the session
        header('Location: another-page.php'); // redirect to protected page
        } 
    }
?>
