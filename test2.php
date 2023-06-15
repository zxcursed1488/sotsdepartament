<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Опитувальник потреб внутрішньо переміщених осіб</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,600;1,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
</head>
  </head>
  <body>
    <h1>Опитувальник потреб внутрішньо переміщених осіб</h1>
    <form>
      <label for="pib">ПІБ(повністю):</label>
      <input type="text" id="pib" name="pib"><br><br>
      <label for="phone">Телефон:</label>
      <input type="tel" id="phone" name="phone"><br><br>
      <table>
        <thead>
          <tr>
            <th>Потреби внутрішньо переміщених осіб</th>
            <th>Важливо</th>
            <th>Не важливо</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Індивідуальне тимчасове житло</td>
            <td><input type="radio" name="housing" value="important"></td>
            <td><input type="radio" name="housing" value="not_important"></td>
          </tr>
          <tr>
            <td>Індивідуальне постійне житло</td>
            <td><input type="radio" name="permanent_housing" value="important"></td>
            <td><input type="radio" name="permanent_housing" value="not_important"></td>
          </tr>
          <tr>
            <td>Медичні послуги</td>
            <td><input type="radio" name="medical_services" value="important"></td>
            <td><input type="radio" name="medical_services" value="not_important"></td>
          </tr>
          <tr>
            <td>Фінансова підтримка</td>
            <td><input type="radio" name="financial_support" value="important"></td>
            <td><input type="radio" name="financial_support" value="not_important"></td>
          </tr>
          <tr>
            <td>Продукти харчування</td>
            <td><input type="radio" name="food" value="important"></td>
            <td><input type="radio" name="food" value="not_important"></td>
          </tr>
          <tr>
            <td>Робота за фахом</td>
            <td><input type="radio" name="job" value="important"></td>
            <td><input type="radio" name="job" value="not_important"></td>
          </tr>
          <tr>
            <td>Перекваліфікація(отримання іншої спеціальності)</td>
            <td><input type="radio" name="retraining" value="important"></td>
            <td><input type="radio" name="retraining" value="not_important"></td>
          </tr>
          <tr>
            <td>Навчання дітей</td>
            <td><input type="radio" name="education" value="important"></td>
            <td><input type="radio" name="education" value="not_important"></td>
          </tr>
          <tr>
            <td>Соціальна підтримка</td>
            <td><input type="radio" name="social_support" value="important"></td>
            <td><input type="radio" name="social_support" value="not_important"></td>
          </tr>
          <tr>
            <td>Інформаційна підтримка</td>
            <td><input type="radio" name="information_support" value="important"></td>
            <td><input type="radio" name="information_support" value="not_important"></td>
          </tr>
          <tr>
            <td>Пошук роботи</td>
            <td><input type="radio" name="job_search" value="important"></td>
            <td><input type="radio" name="job_search" value="not_important"></td>
          </tr>
          <tr>
            <td>Доступ до інтернету</td>
            <td><input type="radio" name="internet_access" value="important"></td>
            <td><input type="radio" name="internet_access" value="not_important"></td>
          </tr>
        </tbody>
      </table>
      <br>
      <input type="submit" value="Відправити">
    </form>
    <?php
    if (isset($_GET['formSubmit'])){
  $pib = $_GET["pib"];
  $phone = $_GET["phone"];
  $housing = $_GET["housing"];
  $permanent_housing = $_GET["permanent_housing"];
  $medical_services = $_GET["medical_services"];
  $financial_support = $_GET["financial_support"];
  $food = $_GET["food"];
  $job = $_GET["job"];
  $retraining = $_GET["retraining"];
  $education = $_GET["education"];
  $social_support = $_GET["social_support"];
  $information_support = $_GET["information_support"];
  $job_search = $_GET["job_search"];
  $internet_access = $_GET["internet_access"];
$mysqli = new mysqli("localhost", "root", "", "zxc");
if ($mysqli->connect_errno) {
            echo "Извините, возникла ошибка на сайте";
            exit;
        }
  $pib = $mysqli->real_escape_string($pib);
  $phone = $mysqli->real_escape_string($phone);
  $housing = $mysqli->real_escape_string($housing);
  $permanent_housing = $mysqli->real_escape_string($permanent_housing);
  $medical_services = $mysqli->real_escape_string($medical_services);
  $financial_support = $mysqli->real_escape_string($financial_support);
  $food = $mysqli->real_escape_string($food);
  $job = $mysqli->real_escape_string($job);
  $retraining = $mysqli->real_escape_string($retraining);
  $education = $mysqli->real_escape_string($education);
  $social_support = $mysqli->real_escape_string($social_support);
  $information_support = $mysqli->real_escape_string($information_support);
  $job_search = $mysqli->real_escape_string($job_search);
  $internet_access = $mysqli->real_escape_string($internet_access);
  $important_question = $mysqli->real_escape_string($_POST["important_question"]);
  $important_answer = $mysqli->real_escape_string($_POST["important_answer"]);

  $query = "INSERT INTO qwe (pib, phone, housing, permanent_housing, medical_services, financial_support, food, job, retraining, education, social_support, information_support, job_search, internet_access, important, not_important) 
VALUES ('$pib', '$phone', '$housing', '$permanent_housing', '$medical_services', '$financial_support', '$food', '$job', '$retraining', '$education', '$social_support', '$information_support', '$job_search', '$internet_access', '$important', '$not_important')"; 


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

