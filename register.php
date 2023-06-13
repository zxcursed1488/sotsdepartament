<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="get">
        <label for="name">Имя:</label><br>
        <input type="text" id="name" name="name"><br>

        <label for="surname">Фамилия:</label><br>
        <input type="text" id="surname" name="surname"><br>

        <label for="phone">Номер телефона:</label><br>
        <input type="tel" id="phone" name="phone"><br>

        <label for="organization">Выберите организацию:</label><br>
        <select id="organization" name="organization">
            <option value="Департамент Праці">Департамент Праці</option>
            <option value="Усвік Центр">Усвік Центр</option>
            <option value="Усвік Завод">Усвік Завод</option>
            <option value="Усвік Інгул">Усвік Інгул</option>
            <option value="Усвік Кораб">Усвік Кораб</option>
            <option value="Терцентр">Терцентр</option>
        </select><br><br>
        <label for="status">Статус:</label><br>
        <input type="text" id="status" name="status"><br><br>

        <input type="submit" name="formSubmit">
    </form>

    <?php
    if (isset($_GET['formSubmit'])){
        $nameform = $_GET['name'];
        $surnameform = $_GET['surname'];
        $phoneform = $_GET['phone'];
        $organizationform = $_GET['organization'];
        $statusform = $_GET['status'];
        $mysqli = new mysqli("localhost", "root", "", "pie-18");
        if ($mysqli->connect_errno) {
            echo "Извините, возникла ошибка на сайте";
            exit;
        }
        $name = $mysqli->real_escape_string($nameform);
        $surname = $mysqli->real_escape_string($surnameform);
        $phone = $mysqli->real_escape_string($phoneform);
        $organization = $mysqli->real_escape_string($organizationform);
        $status = $mysqli->real_escape_string($statusform);
        $query = "INSERT INTO users (name,surname,phone,organization,status) VALUES ('$name','$surname','$phone','$organization','$status')";
        if ($mysqli->query($query) === false) {
            echo "Ошибка: " . $mysqli->error;
            exit;
        } else {
            echo "Успешно" . '<br>';
        }
        $mysqli->close();
    } 
    ?>
</body>
</html>
