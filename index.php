<?php
include('connect.php');
$sql="SELECT * FROM member";
$res=$db->query($sql);
$alldata=$res->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>   
    <h1>Member data</h1>
<a href="create.php">add</a>
    <table border="2">
        <thead>
            <tr>
                <th>#</th>
                <th>Username</th>
                <th>Name</th>
                <th>Created At</th>
                <th></th>

            </tr>
           
        </thead>
        <tbody>
            <?php foreach($alldata as $key=>$row){ ?>
    <tr>
    <td><?php echo $key+1; ?></td>
    <td><?php echo $row['username']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['created_at']; ?></td>
    <td>

    <button type="button">edit</button>
    <button type="button">delete</button>
    </td>
    </tr>

<?php }  ?>
   
   
        </tbody>
    </table>

</body>
</html>