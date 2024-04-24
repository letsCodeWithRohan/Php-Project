<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - EmpPlaza</title>
    <script src="https://cdn.tailwindcss.com/"></script>
</head>
<body class="font-[Poppins] overflow-x-hidden">
    <main class="h-[100vh] w-screen bg-sky-600 flex items-center justify-center">
        <form action="" method="post" class="w-[30%] bg-white rounded-md p-4">
            <h1 class="text-center font-bold text-2xl font-[Poppins]">Login</h1>

            <!-- Email -->
            <div class="inputField flex flex-col gap-2 py-2">
                <label for="email">
                    Email
                </label>
                <input required class="border-[#bbb] rounded-sm valid:border-[dodgerblue] border-[1px] p-2" type="email" placeholder="Enter Your Email" name="email">
            </div>

            <!-- Password -->
            <div class="inputField flex flex-col gap-2 py-2">
                <label for="password">
                    Password
                </label>
                <input required class="border-[#bbb] rounded-sm valid:border-[dodgerblue] border-[1px] p-2" type="password" placeholder="Create Password" name="password">
            </div>

            <!-- Login Button -->
            <button type="submit" class="w-full p-2 bg-sky-600 text-white mt-2 rounded-sm hover:bg-sky-700" name="login">Login</button>

            <div class="pt-4 flex items-center gap-2 text-center justify-center">
                <p>Don't have an account ?</p>
                <a href="/EmployeeProject/register.php" class="text-sky-900 underline">Register Now</a>
            </div>
            <?php
                require '_db.php';

                if(isset($_POST['login'])){
                    $email = $_POST['email'];
                    $password = $_POST['password'];

                    $sql = "SELECT * FROM registration WHERE email='$email' AND password='$password'";

                    if($conn->query($sql) === TRUE){
                        echo "User found";
                    }
                    else{
                        echo "No user found";
                    }
                }
            ?>
        </form>
    </main>
</body>
</html>