<!DOCTYPE html>
<html>
<head>
    <style>
        .error {
            color: #FF0001;
        }
    </style>
    <script src="https://cdn.tailwindcss.com/"></script>
</head>

<body class="h-full w-full bg-pink-300 flex items-center justify-center flex-col">
<?php
// define variables to empty values
$nameErr = $emailErr = $mobilenoErr = $genderErr = $websiteErr = $agreeErr = "";
$name = $email = $mobileno = $gender = $website = $agree = "";
//Input fields validation
if ($_SERVER["REQUEST_METHOD"] == "POST") {

//String Validation
 if (empty($_POST["name"])) {
 $nameErr = "Name is required";
 } else {
 $name = input_data($_POST["name"]);
 // check if name only contains letters and whitespace
 if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
 $nameErr = "Only alphabets and white space are allowed";
 }
 }

 //Email Validation
 if (empty($_POST["email"])) {
 $emailErr = "Email is required";
 } else {
 $email = input_data($_POST["email"]);
 // check that the e-mail address is well-formed
 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
 $emailErr = "Invalid email format";
 }
 }

 //Number Validation
 if (empty($_POST["mobileno"])) {
 $mobilenoErr = "Mobile no is required";
 } else {
 $mobileno = input_data($_POST["mobileno"]);
 // check if mobile no is well-formed
 if (!preg_match ("/^[0-9]*$/", $mobileno) ) {
 $mobilenoErr = "Only numeric value is allowed.";
 }
 //check mobile no length should not be less and greator than 10
 if (strlen ($mobileno) != 10) {
 $mobilenoErr = "Mobile no must contain 10 digits.";
 }
 }

 //URL Validation
 if (empty($_POST["website"])) {
 $website = "";
 } else {
 $website = input_data($_POST["website"]);
 // check if URL address syntax is valid
 if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
 $websiteErr = "Invalid URL";
 }
 }

 //Empty Field Validation
 if (empty ($_POST["gender"])) {
 $genderErr = "Gender is required";
 } else {
 $gender = input_data($_POST["gender"]);
 }

 //Checkbox Validation
 if (!isset($_POST['agree'])){
 $agreeErr = "Accept terms of services before submit.";
 } else {
 $agree = input_data($_POST["agree"]);
 }
}
function input_data($data) {
 $data = trim($data);
 $data = stripslashes($data);
 $data = htmlspecialchars($data);
 return $data;
}
?>

    <h2 class="font-semibold text-white text-3xl">Registration Form</h2>
    <span class="error">* required field </span>
    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="p-4 bg-white flex flex-col w-[40%] rounded-md shadow-md">
        <div class="inp flex flex-col">
        <label for="name">Name</label>
        <input type="text" name="name" class="mt-2 border border-2 border-[#ddd] rounded-sm px-2 py-2 w-full">
        <span class="error">*
            <?php echo $nameErr; ?>
        </span>
        </div>
        
        <div class="inp flex flex-col">
        <label for="email">Email</label>
        <input type="text" name="email" class="mt-2 border border-2 border-[#ddd] rounded-sm px-2 py-2 w-full">
        <span class="error">*
            <?php echo $emailErr; ?>
        </span>
</div>
        
<div class="inp-field flex flex-col">
                <label for="mobileno">Mobile Number</label>
        <input type="text" name="mobileno" class="mt-2 border border-2 border-[#ddd] rounded-sm px-2 py-2 w-full">
        <span class="error">*
            <?php echo $mobilenoErr; ?>
        </span>
</div>
        
<div class="inp-field flex flex-col">
                <label for="website">Website</label>
        <input type="text" name="website" class="mt-2 border border-2 border-[#ddd] rounded-sm px-2 py-2 w-full">
        <span class="error">
            <?php echo $websiteErr; ?>
        </span>
        
        <div class="inp flex gap-4 my-4">
        Gender:
        <input type="radio" name="gender" value="male"> Male
        <input type="radio" name="gender" value="female"> Female
        <input type="radio" name="gender" value="other"> Other
        </div>
        <span class="error">*
            <?php echo $genderErr; ?>
        </span>
        
        <div class="inp flex gap-4">
        Agree to Terms of Service:
        <input type="checkbox" name="agree">
    </div>
    <span class="error">*
        <?php echo $agreeErr; ?>
    </span>
        
        <!-- Submit Button -->
        <button type="submit" name="submit" class="bg-violet-600 text-white p-3 rounded-md mt-2">Submit</button>
        
        <div class="info bg-slate-200 p-3 mt-4">

            <?php
 if(isset($_POST['submit'])) {
     if($nameErr == "" && $emailErr == "" && $mobilenoErr == "" && $genderErr == "" && $websiteErr == "" && $agreeErr == "") {
         echo '<h3 class="text-[green]"> <b>You have sucessfully registered.</b></h3><br>';
         echo '<h2 class="font-bold text-xl">Your Input:</h2><br>';
         echo "<b>Name: </b>" .$name;
         echo "<br>";
         echo "<b>Email: </b>" .$email;
         echo "<br>";
         echo "<b>Mobile No: </b>" .$mobileno;
         echo "<br>";
         echo "<b>Website: </b>" .$website;
         echo "<br>";
         echo "<b>Gender: </b>" .$gender;
        } else {
            echo '<h3 class="text-[red]"> <b>You didn\'t filled up the form correctly.</b> </h3>';
        }
    }
    ?>
    </div>
    </form>

</body>

</html>