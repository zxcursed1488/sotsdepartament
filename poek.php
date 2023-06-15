<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <form method="get">
    <h2>Анкета на гуманітарну допомогу</h2>
    
    <label for="district">Район:</label>
    <input type="text" id="district" name="district" required><br><br>
    
    <label for="fullname">ПІБ:</label>
    <input type="text" id="fullname" name="fullname" required><br><br>
    
    <label for="code">Ідентифікаційний код:</label>
    <input type="text" id="code" name="code" required><br><br>
    <label for="phone">Номер телефону:</label>
    <input type="text" id="phone" name="phone" required><br><br>
    
    <label for="status">Статус:</label>
    <select id="status" name="status">
      <option value="elderly">Особа похилого віку (старше 65)</option>
      <option value="disability_1">Особа з інвалідністю 1 групи</option>
      <option value="disability_2">Особа з інвалідністю 2 групи</option>
      <option value="disability_3">Особа з інвалідністю 3 групи</option>
      <option value="social_assistance">Отримувач державної соціальної допомоги малозабезпеченим сім'ям</option>
      <option value="single_mother">Одинока мати</option>
      <option value="parents_disability_child">Батьки, які виховують дитину з інвалідністю</option>
      <option value="guardians">Опікуни</option>
    </select><br><br>
    
    <input type="submit" name="formSubmit" value="Надіслати">
  </form>
  <?php
    if (isset($_GET['formSubmit'])){
        $districtform = $_GET['district'];
        $fullnameform = $_GET['fullname'];
        $codeform = $_GET['code'];
        $phoneform = $_GET['phone'];
        $statusform = $_GET['status'];
        $connection = new mysqli("localhost", "root", "", "bazadanix");
        if ($connection->connect_errno) {
            echo "Вибачте, сталася помилка на сайті";
            exit;
        }
        $district = $connection->real_escape_string($districtform);
        $fullname = $connection->real_escape_string($fullnameform);
        $code = $connection->real_escape_string($codeform);
        $phone = $connection->real_escape_string($phoneform);
        $status = $connection->real_escape_string($statusform);
        $query = "INSERT INTO `poek` (`district`, `fullname`, `code`, `phone`, `status`) VALUES ('$district', '$fullname', '$code', '$phone', '$status')";
        if ($connection->query($query) === false) {
            echo "Помилка: " . $connection->error;
            exit;
        } else {
            echo "Успішно" . '<br>';
        }
        $connection->close();
    } 
    ?>
</body>
</html>

