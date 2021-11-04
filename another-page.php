<?php 

session_start(); // must go right at the top of the page - to track login
 
if($_SESSION['username']) { // check that session 
    if($_POST['Logout'] == 'Logout') { // check for form submit
        session_destroy(); // destroy the session to logout
        header('Location: admin-login.php'); // redirect back to login page
    }
?>

<!-- START - put all your content to be protected here -->
<h1>This is the beginning.</h1>
<br></br>
<form name="logout" method="post" action="another-page.php">
<input type="submit" name="Logout" value="Logout" />
</form>
<!-- END - put all your content to be protected here -->

<?php } else {
echo "Access Denied";
header('Location: admin-login.php'); // redirect back to login page
}
