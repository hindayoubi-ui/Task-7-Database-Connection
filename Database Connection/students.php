
<?php

include("conn.php");

$sql = "SELECT * FROM students";

$result = $conn->query($sql);

 //var_dump($result);exit;

if ($conn->error) {
    echo "Error: " . $conn->error;
}
else {
    while ($row = $result->fetch_assoc()) {

        echo "ID: " . $row['id'] ;
        echo "Name: " . $row['name'] ;
        echo "Email: " . $row['email'] ;
        echo "Phone: " . $row['phone'] ;
        echo "Course: " . $row['course'] ;
        echo "Created At: " . $row['created_at'] ;

    }
}

?>
