<a href="insert.php">Insert</a>
<br>
<?php
include '../classes/Person.php';
$person = new Person();
$result = $person->getRecords();
if ($result->num_rows > 0) {
?>
    <table border="1">
        <tr>
            <th>Person ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Address</th>
            <th>City</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
        ?>
            <tr>
                <td><?php echo $row["person_id"]; ?></td>
                <td><?php echo $row["first_name"]; ?></td>
                <td><?php echo $row["last_name"]; ?></td>
                <td><?php echo $row["address"]; ?></td>
                <td><?php echo $row["city"]; ?></td>
                <td>
                    <a href="show.php?person_id=<?php echo $row['person_id']; ?>">Show</a>
                    <a href="function.php?person_id=<?php echo $row['person_id']; ?>">Delete</a>
                </td>
            </tr>
    <?php
        }
    } else {

        echo " <br>0 results";
    }
