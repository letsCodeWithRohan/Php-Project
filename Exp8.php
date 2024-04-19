<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Registration Form</title>
    <script src="https://cdn.tailwindcss.com/"></script>
</head>

<body class="h-full w-full overflow-x-hidden">
    <div class="main h-full pb-10 w-screen bg-blue-400 flex flex-col items-center justify-center">
        <h1 class="text-2xl font-bold mb-5">Employee Registration Form</h1>

        <?php
// define variables to empty values
$nameErr = $emailErr = $mobilenoErr = $genderErr = $agreeErr = "";
$name = $email = $mobileno = $gender = $agree = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    if (empty($_POST["name"])) {
        $nameErr = "Name is";
        } else {
        $name = input_data($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
        $nameErr = "Only alphabets and white space are allowed";
        }
        }

        //Email Validation
 if (empty($_POST["email"])) {
    $emailErr = "Email is";
    } else {
    $email = input_data($_POST["email"]);
    // check that the e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format";
    }
    } 
}
?>

        <form action="" method="post" class="bg-white p-10 rounded-sm shadow-md w-[40%] flex flex-col gap-2">
            <!-- Employee Name -->
            <div class="inp-field flex flex-col">
                <label for="name">Employee Name</label>
                <input type="text" name="name" placeholder="Enter Name"
                    class="mt-2 border border-2 border-[#ddd] rounded-sm px-2 py-2 w-full">
                    <span class="error"> <?php echo $nameErr; ?> </span>
            </div>

            <!-- Employee Id -->
            <div class="inp-field flex flex-col">
                <label for="emp_id">Employee Id</label>
                <input type="text" name="emp_id" placeholder="Enter Employee id"
                    class="mt-2 border border-2 border-[#ddd] rounded-sm px-2 py-2 w-full">
                    <span class="error">* <?php echo $emailErr; ?> </span> 
            </div>

            <!-- Password -->
            <div class="inp-field flex flex-col">
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Enter Password"
                    class="mt-2 border border-2 border-[#ddd] rounded-sm px-2 py-2 w-full">
            </div>

            <!-- Email -->
            <div class="inp-field flex flex-col">
                <label for="email">Email</label>
                <input type="text" name="email" placeholder="Enter Email"
                    class="mt-2 border border-2 border-[#ddd] rounded-sm px-2 py-2 w-full">
            </div>

            <!-- Mobile Number -->
            <div class="inp-field flex flex-col">
                <label for="mobile">Mobile Number</label>
                <input type="number" name="mobile" placeholder="Enter Mobile Number"
                    class="mt-2 border border-2 border-[#ddd] rounded-sm px-2 py-2 w-full">
            </div>

            <!-- Salary -->
            <div class="inp-field flex flex-col">
                <label for="salary">Salary</label>
                <input type="number" name="salary" placeholder="Enter Your Salary"
                    class="mt-2 border border-2 border-[#ddd] rounded-sm px-2 py-2 w-full">
            </div>

            <!-- DOB and join date -->
            <div class="main-inp flex w-full gap-2">
                <div class="inp-field flex flex-col w-1/2">
                    <label for="dob">Date of Birth</label>
                    <input type="date" name="dob"
                        class="mt-2 border border-2 border-[#ddd] rounded-sm px-2 py-2 w-full">
                </div>
                <div class="inp-field flex flex-col w-1/2">
                    <label for="join_date">Joining Date</label>
                    <input type="date" name="join_date"
                        class="mt-2 border border-2 border-[#ddd] rounded-sm px-2 py-2 w-full">
                </div>
            </div>

            <!-- Gender -->
            <div class="inp-field flex gap-2">
            <label for="gender">Gender : </label>
            <input type="radio" name="gender" value="male"> Male
            <input type="radio" name="gender" value="female"> Female
            <input type="radio" name="gender" value="other"> Other
            </div>

            <!-- Salary -->
            <div class="inp-field flex gap-2 my-2">
                <label for="terms">Agree to Terms of Sevices</label>
                <input type="checkbox" name="terms">
            </div>

            <!-- Submit Button -->
            <button type="submit" name="sub" class="bg-violet-600 text-white p-3 rounded-md mt-2">Submit</button>

        </form>
    </div>
</body>

</html>