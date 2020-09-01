<?php
    @$email = $_POST['email'];
    @$pass = $_POST['pass'];
    if(isset($_POST['login'])){
        if($email == "abc@gmail.com" && $pass == 123){
            if($_POST['ch']==true){
                setcookie("cemail", $email, time()+60*60);
                setcookie("cpass", $pass, time()+60*60);
            }
            header('location:home.php');
        }
        else{
            echo "Invalid Email or Password";
        }
    }
?>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <form action="#" method="post">
        <table align="center">
            <tr>
                <td colspan="2" align="center"><h2>Login Page</h2></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><input type="email" name="email" value="<?php echo @$_COOKIE['cemail'];?>"  required></td>
            </tr>
            <tr>
                <th>Password</th>
                <td><input type="password" name="pass" value="<?php echo @$_COOKIE['cpass'];?>"  required></td>
            </tr>
            <tr>
                <th>Remember Me</th>
                <td><input type="checkbox" name="ch"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                <button type="submit" name="login">Login</td>
            </tr>
        </table>
    </form>
</body>
</html>