 <html>
    <?php
session_start(); 

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $username = $_SESSION['username']; 

    echo "welcome user $username. Login successful!";
} else {
    echo "You are not logged in!";
}
?>
<form action="logout.php" method="post">
    <input type="submit"value="logout">

</form>
</html>