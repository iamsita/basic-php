<?php
function validateInput($field, &$error, $errorMessage)
{
    $error = empty($_POST[$field]) ? $errorMessage : '';
    return empty($error);
}

$emailErr = $passwordErr = $phoneErr = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $isValid = validateInput('email', $emailErr, 'Email is required') &
        validateInput('password', $passwordErr, 'Password is required') &
        validateInput('phone', $phoneErr, 'Phone is required');

    if ($isValid) echo "Form submitted successfully";
}
?>

<form method="post">
    <label>Email:</label>
    <input type="text" name="email">
    <?php echo $emailErr; ?><br>

    <label>Password:</label>
    <input type="password" name="password"><?php echo $passwordErr; ?>
    <br>

    <label>Phone:</label>
    <input type="text" name="phone"><?php echo $phoneErr; ?>
    <br>
    
    <button type="submit">Submit</button>
</form>