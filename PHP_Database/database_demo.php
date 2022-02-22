<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="DB_Demo";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";

$sql= "Insert into Test_Demo(Fname,Lname,Dept) Values ('Alexa','Johnson','Testing')";
// $sql = "INSERT INTO Test_Demo (Fname,Lname,Dept)
// VALUES ('John', 'Doe', 'UIUX');";
// $sql .= "INSERT INTO MyGuests (Fname,Lname,Dept)
// VALUES ('Mary', 'Moe', 'Testing');";
// $sql .= "INSERT INTO MyGuests (Fname,Lname,Dept)
// VALUES ('Julie', 'Dooley', 'Robotics')";


if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// if($conn->query($sql)=== TRUE){
//     // $last_id=$conn->insert_id;
//     echo "New Record Inserted Successfully<br>";
//     // echo "Last Inserted ID is".$last_id;
// }
// else{
//     echo "data not inserted".$sql."<br>".$conn->error;
// }
$conn->close();
?>