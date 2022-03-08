<?php
if(isset($_POST['submit'])) {
    $msg = 'Name: ' .$_POST['FirstName'] .$_POST['LastName'] ."\n" 
    .'Email: ' .$_POST['Email'] ."\n" 
    .'Message: ' .$_POST['Message'];
$email = $_GET['Email'];
    mail('me@example.com', 'Message from website', $msg );
    header('location: contact-thanks.php');

    } else {
header('location: contact.php');
exit(0);
}
?>
