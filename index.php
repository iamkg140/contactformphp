<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>My Contact Application</title>
</head>
<body>
<header>
    <h1>
        KG Contact App
    </h1>
</header>

<form action="adddata.php" method="post">
    <div class="main">
        <label for="name">Name:</label><br>
        <input type="text" name="name" id ="name" required><br>
        <label for="contact">Number:</label><br>
        <input type="number" name="contact" id ="contact" required><br><br>
        <input type="submit" value="Save">
    </div>

</form>
<hr>
<h2>List of Contact</h2>
<table>
    <tr>
        <th>Name</th>
        <th>Phone No.</th>
        <th>Actions</th>
    </tr>
    <?php
    include 'db.php';
    $sql ="SELECT * FROM names";

    $result = mysqli_query($connection, $sql);

    if($result){
        while($row = mysqli_fetch_assoc($result)){
           $id = $row['id'];
           $name = $row['name']; 
           $phone = $row['phone']; 

         ?>  
    <tr>
    <td><?php echo $name ?></td>
    <td><?php echo $phone ?></td>
    <td>
        <a href="edit.php?id=<?php echo $id ?>">UPDATE</a>
        <a href="delete.php?id=<?php echo $id ?>">DELETE</a>
    </td>
    </tr>

         <?php
        }
    }

    ?>

</table>
    
</body>
</html>