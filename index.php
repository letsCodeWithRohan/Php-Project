<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Yourself</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

* {
margin: 0;
padding: 0;
box-sizing: border-box;
font-family: 'Poppins',sans-serif;
}

.container{
    width: 100%;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(45deg,#EEE7E5,#E2E7EE,#EDEDED);
}
form{
    width: 50%;
    background: #fff;
    box-shadow: 0 0 15px rgba(0,0,0,0.15);
    border-radius: 15px;
    display: flex;
    flex-direction: column;
    padding: 3vh;
    color: gray;
    justify-content: center;
    h1{
        color: #000;
        font-weight: 500;
        letter-spacing: 0.9;
        line-height: 1;
        margin: 2vh 0;
    }
    p{
        margin-bottom: 2vh;
    }
    .msg{
        width: 100%;
        padding: 4px;    
        display: grid;
        place-items: center;
        border: 1px solid #bbb;
        border-radius: 10px;
    }
    .loginLink{
        color: #222;
        text-align: center;
        margin-top: 2vh;
        a{
            text-decoration: none;
            color: #800080;
        }
    }
    img{
        width: 50px;
    }
    .box{
        /* flex: 1; */
        display: flex;
        gap: 2vw;
        .col{
            width: 50%;
            .row{
                width: 100%;
                display: flex;
                flex-direction: column;
                gap: 1vh;
                margin-bottom: 1vh;
                label{
                    color: #000;
                }
                input{
                    width: 100%;
                    border-radius: 10px;
                    border: 1px solid #bbb;
                    outline: 0;
                    padding: 10px;
                    &::placeholder{
                        color: gray;
                    }
                }
                select{
                    width: 100%;
                    border-radius: 10px;
                    border: 1px solid #bbb;
                    outline: 0;
                    padding: 10px;
                    color: gray;
                }
            }
        }
    }
    .btns{
        display: flex;
        width: 100%;
        gap: 2vw;
        margin-top: 2vh;
        button{
            border-radius: 10px;
            width: 50%;
            border: 0;
            outline: 0;
            padding: 10px;
            background: #800080;
            font-weight: 500;
            font-size: 1em;
            color: #fff;
            &:first-child{
                background: #fff;
                border: 1px solid #bbb;
                color: #000;
            }
        }
    }
}
</style>
<body>
    <div class="container">
        <form action="/DemoProjectYT/index.php" method="post">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTyiyP7SMTzcZDciULdbj4xtvfHLjn7CN3DIW_nNHaNur220461n-5rdP-HWG9Rceq8NgY&usqp=CAU" alt="">
            <h1>Sign Up</h1>
            <p>Enter your details below to create your account and get started.</p>
            <?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["submit"])){
        $name = $_POST["name"];
    $dob = $_POST["DOB"];
    $nation = $_POST["nation"];
    $pass = $_POST["password"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $type = $_POST["type"];
    $cpass = $_POST["cpassword"];
    if($pass == $cpass){
        echo '<div class="msg">
        <p style="color: green;">Successfully Registered</p>
    </div>';
    }
    else{
        echo '<div class="msg">
        <p style="color: red;">Password Do not Matched !</p>
    </div>';
    }
    }
}

?>
            <div class="box">
                <div class="col">
                    <div class="row">
                        <label for="name">
                            Full Name
                        </label>
                        <input type="text" required name="name" placeholder="enter...">
                    </div>
                    <div class="row">
                        <label for="DOB">
                            Date of Birth
                        </label>
                        <input type="Date" required name="DOB">
                    </div>
                    <div class="row">
                        <label for="nation">
                            Nationality
                        </label>
                        <select name="nation" required id="">
                            <option value="in">India</option>
                            <option value="np">Nepal</option>
                            <option value="au">Australia</option>
                            <option value="us">USA</option>
                            <option value="rs">Russia</option>
                        </select>
                    </div>
                    <div class="row">
                        <label for="password">
                            Password
                        </label>
                        <input type="password" required name="password" placeholder="enter...">
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <label for="email">
                            Email
                        </label>
                        <input type="email" required name="email" placeholder="example@email.com">
                    </div>
                    <div class="row">
                        <label for="phone">
                            Phone Number
                        </label>
                        <input type="text" required name="phone" placeholder="+91 71650 01770">
                    </div>
                    <div class="row">
                        <label for="type">
                            Register Type
                        </label>
                        <select name="type" required id="">
                            <option value="user">User</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>
                    <div class="row">
                        <label for="cpassword">
                            Confirm Password
                        </label>
                        <input type="password" required name="cpassword" placeholder="enter...">
                    </div>
                </div>
            </div>
            <div class="btns">
                <button type="reset">Reset</button>
                <button type="submit" name="submit" value="submit">Submit</button>
            </div>
            <p class="loginLink">Already have an account? <a href="/DemoProjectYT/login.php">Login</a></p>
        </form>
    </div>
</body>
</html>