<?php include 'header.inc'; ?>

<?php
session_start();
if (isset($SESSION['user'])){
    echo "Welcome,".$SESSION['user'];
} else {
    header('Location:login.html');
}
?>

<?php include 'footer.inc'; ?>