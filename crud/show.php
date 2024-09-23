<?php
include '../classes/Person.php';
$class = new Person();
$result = $class->getRecord($_GET['person_id']);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    ?>


    <form method="post" action="function.php">
        <input type="hidden" name="_method" value="PUT">

        <div>
            <label for="person_id">Person ID</label>
            <input type="number" name="person_id" id="person_id" required value="<?php echo $row['person_id']; ?>">
        </div>
        <div class="">
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" id="first_name" required value="<?php echo $row['first_name']; ?>">
        </div>
        <div class="">
            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" id="last_name" required value="<?php echo $row['last_name']; ?>">
        </div>
        <div class="">
            <label for="address">Address</label>
            <input type="text" name="address" id="address" required value="<?php echo $row['address']; ?>">
        </div>
        <div class="">
            <label for="city">City</label>
            <input type="text" name="city" id="city" required value="<?php echo $row['city']; ?>">
        </div>
        <div class="">
            <button type="submit">Submit</button>
            <button type="reset">Reset</button>
        </div>
    </form>
    <?php
} else {
    echo "0 results";
}
