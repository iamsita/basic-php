<?php
// Start the session
session_start();

// Check if the user is already logged in
if(isset($_SESSION['username'])){
    echo 'Welcome back, ' . $_SESSION['username'] . '!<br>';
    echo '<a href="logout.php">Logout</a>';
} else {
    // If not logged in, show login form
    if(isset($_POST['login'])){
        // Simulating login, you can replace this with your authentication logic
        $username = $_POST['username'];
        // Set session variable
        $_SESSION['username'] = $username;
        echo 'Welcome, ' . $username . '!<br>';
        echo '<a href="logout.php">Logout</a>';
    } else {
        // Show login form
?>
        <form method="post" action="">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username">
            <button type="submit" name="login">Login</button>
        </form>
<?php
    }
}
?>