<html>

<?php
session_start();

// if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
//     header('Location: dashboard.php'); 
//   }
if ($_SESSION['loggedin'] ?? false) {
  header('Location: dashboard.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
</head>

<body>
  <h2>Login Form</h2>
  <form action="sessionset1.php" method="post">
    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username"><br>
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password"><br><br>
    <button type="submit"> login</button>
  </form>
</body>

</html>