<!DOCTYPE html>
<html lang="en">
    <?php 
    require '_db.php';
    session_start();
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <script src="https://cdn.tailwindcss.com/"></script>
</head>
<body>
    <h1>Welcome to home</h1>
    <?php 
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];

    $sql = "SELECT * FROM registration WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if($result->num_rows == 1){
        $data = mysqli_fetch_assoc($result);
        echo "Data Fetched success.";
        $name = $data["name"];
        $gender = $data["gender"];
        $mobile = $data["mobile"];
        $e_id = $data["e_id"];
    }
    else{
        echo "Error Fetching Data";
    }
    ?>
    <p>E_ID : <?php echo $e_id; ?></p>
    <p>Name : <?php echo $name; ?></p>
    <p>Email : <?php echo $email; ?></p>
    <p>Password : <?php echo $password; ?></p>
    <p>Mobile : <?php echo $mobile; ?></p>
    <p>Gender : <?php echo $gender; ?></p>
    <form action="" method="post">
        <label for="logout">Do you want to Logout ?</label>
        <br>
        <button class="bg-red-500 text-white p-2 rounded-md mt-3" name="logout">Log out</button>
    </form>
    <?php 
    if(isset($_POST['logout'])){
        echo "successfully logout";
        session_destroy();
        header("Location: http://localhost/EmployeeProject/login.php");
    }
    ?>
</body>
</html>