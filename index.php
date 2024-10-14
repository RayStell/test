<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>
    <form action="" method="post">
        <label for="name">Имя:</label>
        <input type="text" name="name" id="name"><br><br>
        <label for="password">Пароль:</label>
        <input type="password" name="password" id="password"><br><br>
        <label for="email">Почта:</label>
        <input type="email" name="email" id="email"><br><br>
        <input type="submit" value="Register">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $password = $_POST["password"];
        $email = $_POST["email"];
        print_r(array(
            "Name" => $name,
            "Password" => $password,
            "Email" => $email
        ));
    }
    ?>
</body>
</html>