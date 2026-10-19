<?php

$row = [];
if (isset($_GET['up'])) {
    $id = (int)$_GET['up'];
    $name = $_POST['fname'];
    $email = $_POST['sname'];
    $password = $_POST['age'];

    $sql = "UPDATE into_tabl SET fName='$name', sName='$email', age='$password' WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
    header("Location: form.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <form action="process.php?up=<?php echo htmlspecialchars($row['id'])??''; ?>" method="POST">
        <label for="firstnames">names</label>
        
        <input type="text" id="fname" name="fname" value="<?php echo $row['fName']??''; ?>" placeholder="Enter your name"  <br><br>
        <input type="text" id="sname" name="sname" placeholder="Enter your second name"> <br><br>
        <input type="number" id="age" name="age" placeholder="Enter your age"> <br> <br>
        <input type="submit" name="submit" value="update">





    </form>

</body>
</html>