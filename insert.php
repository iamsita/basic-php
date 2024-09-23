<?php
include 'connection.php';
$sql = "INSERT INTO persons (person_id,first_name, last_name, address,city) VALUES (4,'sita', 'kumari', 'kathmandu','jadibuti')";
$result = $conn->query($sql);
if ($result === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
$sql="person id,firstname,lastname,address,city";
$result = $conn->query($sql);
if ($result->num_rows>0){
  while ($row = $result->fetch_assoc()) {
    echo
}
}
