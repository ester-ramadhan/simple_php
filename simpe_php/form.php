<?php
include 'process.php';

?>
 <!DOCTYPE html>
<html lang="en">


<head>
    <style>
        #view a{
            text-decoration: none;
            width: 20px;
            height: 5px;
            background-color: blue;
            color: white;
            text-align: center;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="process.php" method="POST">
        <input type="text" id="fname" name="fname" placeholder="Enter your name"> <br><br>
        <input type="text" id="sname" name="sname" placeholder="Enter your second name"> <br><br>
        <input type="number" id="age" name="age" placeholder="Enter your age"> <br> <br>
        <input type="submit" name="submit" value="Submit">
    </form>



    <hr>
    <h2>LIST OF REGISTERED STUDENTS</h2>
    <table border="2">
        
            <thead>
                    <th> id </th>
                    <th>First Name</th>
                    <th>Second Name</th>
                    <th>Age</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($data as $row) { ?>
                
        <tr><td><?php echo $row['id']; ?></td>
           <td><?php echo $row['fName']; ?></td>
           <td><?php echo $row['sName']; ?></td>
           <td><?php echo $row['age']; ?></td>
           <td id="view">
            <a  href="view.php?id=<?php echo $row['id']; ?>." ;>view</a>
           </td>
           <td id="edit">
            <a href="edit.php?ed=<?php echo $row['id']; ?>"> <button>edit</button></a>
            <a href="delete.php?del=<?php echo $row['id']; ?>"> <button>delete</button></a>

           </td>
        </tr>
        <?php } ?>
        </tbody>
    </table>
    
</body>
</html>