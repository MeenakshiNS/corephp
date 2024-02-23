
<?php include 'conn.php';
$email=$_GET['email'];
$sql="SELECT * FROM user_details WHERE  email='$email'";
$res=mysqli_query($connection,$sql);
// echo $email;
$row=mysqli_fetch_array($res);
// print_r($row);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main page</title>
</head>
<body>
    <h1>first name:<?php echo $row['firstname'] ?></h1>
    <h2>last name:<?php echo $row['lastname'] ?></h2>
    <h3>email :<?php echo $row['email'] ?></h3>
    <h3>phone:<?php echo $row['phone_no'] ?></h3>
    <h4>addres:<?php echo $row['address'] ?></h4>
    <h5>password:<?php echo $row['password'] ?></h5>
</body>
</html>