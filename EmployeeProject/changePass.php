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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    table,tr,th,td{
        border: 1px solid #000;
        border-collapse: collapse;
    }
    th,td{
        padding: 10px;
    }
</style>
<body class="h-screen w-screen bg-sky-300">
    <?php require '_header.php'; ?>
<section class="home flex">
    <!-- Menubar -->
    <aside class="w-1/5 h-screen bg-white flex flex-col pt-[5vh]">
    <a href="/EmployeeProject/home.php" class="px-2 py-4 w-full font-semibold "><i class="bi bi-collection me-3"></i>Show Details</a>
    <a href="/EmployeeProject/changePass.php" class="px-2 bg-white text-sky-500 py-4 w-full font-semibold"><i class="fa-solid fa-key me-3"></i>Change Password</a>
</aside>
<main class="w-4/5 h-screen flex flex-col items-center justify-center">
    <?php 
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];

    $sql = "SELECT * FROM registration WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if($result->num_rows == 1){
        $data = mysqli_fetch_assoc($result);
        $name = $data["name"];
        $gender = $data["gender"];
        $mobile = $data["mobile"];
        $e_id = $data["e_id"];
    }
    else{
        echo "Error Fetching Data";
    }
    ?>
    <form action="" method="post" class="w-[30%] bg-white rounded-md p-4">
            <h1 class="text-center font-bold text-2xl font-[Poppins]">Change Password</h1>

            <!-- Current Password -->
            <div class="inputField flex flex-col gap-2 py-2">
                <label for="password">
                    Current Password
                </label>
                <input disabled class="border-[#bbb] rounded-sm valid:border-[dodgerblue] border-[1px] p-2" type="text" placeholder="<?php echo $password; ?>" name="">
            </div>

            <!-- Email -->
            <div class="inputField flex flex-col gap-2 py-2 my-2">
                <label for="email">
                    New Password
                </label>
                <input required class="border-[#bbb] rounded-sm valid:border-[dodgerblue] border-[1px] p-2" type="password" placeholder="New password" name="password">
            </div>

            <!-- Password -->
            <div class="inputField flex flex-col gap-2 py-2">
                <label for="password">
                    Confirm Password
                </label>
                <input required class="border-[#bbb] rounded-sm valid:border-[dodgerblue] border-[1px] p-2" type="password" placeholder="Confirm Password" name="cpassword">
            </div>

            <!-- Login Button -->
            <button type="submit" class="w-full p-2 bg-sky-600 text-white mt-2 rounded-sm hover:bg-sky-700" name="changepass">Change Password</button>
            <?php 
            if(isset($_POST('changepass'))){
                $pass = $_POST('password');
                $cpass = $_POST('cpassword');

                echo "$pass <br> $cpass";
            }
            ?>
        </form>
    <!-- Log out Code -->
    <?php 
    if(isset($_POST['logout'])){
        echo "successfully logout";
        session_destroy();
        header("Location: http://localhost/EmployeeProject/login.php");
    }
    ?>
    </main>
</section>
</body>
</html>