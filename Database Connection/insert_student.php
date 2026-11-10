
<?php

include("conn.php");

$sql = "INSERT INTO students (name, email, phone, course)
VALUES ('Hind ayoubi',
        'hind.trainig@gmail.com',
        '78789654',
        'Web Development')";

$result = $conn->query($sql);

if ($result) {
    echo "Student added successfully";
}
else {
    echo "Error: " . $conn->error;
}

?>
