<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in To Continue</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

.container {
    width: 100%;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(45deg, #EEE7E5, #E2E7EE, #EDEDED);

    form {
        width: 30%;
        background: #fff;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.15);
        border-radius: 15px;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 3vh;
        color: gray;
        justify-content: center;

        h1 {
            color: #000;
            font-weight: 500;
            letter-spacing: 0.9;
            line-height: 1;
            text-align: center;
            margin: 2vh 0;
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
        p{
            margin-bottom: 2vh;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        img{
            width: 50px;
        }
        .msg{
            width: 100%;
            padding: 4px;    
            display: grid;
            place-items: center;
            border: 1px solid #bbb;
            border-radius: 10px;
        }
        .col{
            width: 100%;
            display: flex;
        gap: 2vh;
        flex-direction: column;
            align-items: center;
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
            }
        }
        button{
            border-radius: 10px;
            margin-top: 2vh;
            width: 100%;
            border: 0;
            outline: 0;
            padding: 10px;
            background: #800080;
            font-weight: 500;
            font-size: 1em;
            color: #fff;
        }
    }
}
</style>
<body>
    <div class="container">
        <form action="" method="post">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTyiyP7SMTzcZDciULdbj4xtvfHLjn7CN3DIW_nNHaNur220461n-5rdP-HWG9Rceq8NgY&usqp=CAU" alt="">
            <h1>Welcome back</h1>
            <p><span>Glad to see you again 👋</span><span>Login to your account below</span></p>
            <?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["submit"])){
    $pass = $_POST["password"];
    $email = $_POST["email"];
    if($pass == $pass){
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
            <div class="col">
                <div class="row">
                <label for="email">Email</label>
                <input type="email" required name="email" placeholder="example@email.com">
                </div>
                <div class="row">
                <label for="password">Password</label>
                <input type="password" required name="password" placeholder="enter...">
                </div>
            </div>
            <button type="submit" name="submit" value="submit">Login</button>
            <p class="loginLink">Don't have an account? <a href="/DemoProjectYT/index.php">Sign up for Free</a></p>
        </form>
    </div>
</body>
</html>