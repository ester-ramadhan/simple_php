<?php
include 'connection.php';
if (isset($_POST['submit'])) {
    $name = $_POST['fname'];
    $email = $_POST['sname'];
    $password = $_POST['age'];

    $sql = "INSERT INTO  into_tabl(id, fName, sName, age) VALUES ('PRIMARY KEY', '$name', '$email', '$password')";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
header("Location: form.php");
 

}
$data = array();
$sql = "SELECT * FROM into_tabl";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
}


//view.php
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM into_tabl WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    }
}


if(isset($_GET['up'])) {
    $id = (int)$_GET['up'];
    $sql = "SELECT * FROM into_tabl WHERE id = $id";
    $result = mysqli_query($conn, $sql);
if($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);}
}
    if(isset($_GET['del'])) {
    $id = $_GET['del'];
    $dele = "delete * FROM into_tabl WHERE id = $id";
    $result = mysqli_query($conn, $sql);}
?>