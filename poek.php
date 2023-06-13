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
  <form>
    <h2>Анкета на гуманітарну допомогу</h2>
    
    <label for="district">Район:</label>
    <input type="text" id="district" name="district" required><br><br>
    
    <label for="fullname">ПІБ:</label>
    <input type="text" id="fullname" name="fullname" required><br><br>
    
    <label for="code">Ідентифікаційний код:</label>
    <input type="text" id="code" name="code" required><br><br>
    <label for="phone">Номер телефону:</label>
    <input type="text" id="code" name="phone" required><br><br>
    
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
    
    <input type="submit" value="Надіслати">
  </form>
  <?php
    if (isset($_GET['formSubmit'])){
        $districtform = $_GET['district'];
        $fullnameform = $_GET['fullname'];
        $codeform = $_GET['code'];
        $phoneform = $_GET['phone'];
        $statusform = $_GET['status'];
        $mysqli = new mysqli("localhost", "root", "", "pie-19");
        if ($mysqli->connect_errno) {
            echo "Извините, возникла ошибка на сайте";
            exit;
        }
        $district = $mysqli->real_escape_string($districtform);
        $fullname = $mysqli->real_escape_string($fullnameform);
        $code = $mysqli->real_escape_string($codeform);
        $phone = $mysqli->real_escape_string($phoneform);
        $status = $mysqli->real_escape_string($statusform);
        $query = "INSERT INTO user (district,fullname,code,phone,status) VALUES ('$district','$fullname','$code','$phone','$status')";
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
