<?php
include 'db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id = $id";
$result = $conn->query($sql);
$user = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $age = $_POST['age'];
    $profession = $_POST['profession'];
    $address = $_POST['address'];

    $sql = "UPDATE users SET name='$name', email='$email', phone_number='$phone_number', age='$age', profession='$profession', address='$address' WHERE id=$id";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update User</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Update User</h2>
        <form method="POST" action="">
            <div class="form-group">
                <label>Name:</label>
                <input type="text" name="name" class="form-control" value="<?php echo $user['name']; ?>" required>
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email" class="form-control" value="<?php echo $user['email']; ?>" required>
            </div>
            <div class="form-group">
                <label>Phone Number:</label>
                <input type="text" name="phone_number" class="form-control" value="<?php echo $user['phone_number']; ?>" required>
            </div>
            <div class="form-group">
                <label>Age:</label>
                <input type="number" name="age" class="form-control" value="<?php echo $user['age']; ?>" required>
            </div>
            <div class="form-group">
                <label>Profession:</label>
                <input type="text" name="profession" class="form-control" value="<?php echo $user['profession']; ?>" required>
            </div>
            <div class="form-group">
                <label>Address:</label>
                <textarea name="address" class="form-control" rows="3" required><?php echo $user['address']; ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>
