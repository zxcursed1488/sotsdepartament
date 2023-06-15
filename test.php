<!DOCTYPE html>
<html>
<head>
	<title>Анкета щодо якості наданих соціальних послуг</title>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,600;1,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
</head>
<body>
	
	<form>
		<label for="name">Ваше фио:</label>
		<input type="text" id="name" name="name"><br><br>
		<label for="age">Район</label>
		<input type="text" id="neighborhood" name="neighborhood"><br><br>
		</select><br><br>
		<h2>Вопрос 1</h2>
		<p>Найменування отриманої послуги</p>
        <input type="radio" id="question1a" name="question1" value="a">
        <label for="question1a">A) Консультування</label><br>
        <input type="radio" id="question1b" name="question1" value="b">
        <label for="question1b">B) Посередництво</label><br>
        <input type="radio" id="question1c" name="question1" value="c">
        <label for="question1c">C) Представництво інтересів</label><br>
        <input type="radio" id="question1d" name="question1" value="d">
        <label for="question1d">D) Надання притулку</label><br>
        <input type="radio" id="question1e" name="question1" value="e">
        <label for="question1e">E) Соціальна профілактика</label><br>
        <input type="radio" id="question1f" name="question1" value="f">
        <label for="question1f">F) Догляд та виховання дітей в умовах, наближених до сімейних</label><br>
        <input type="radio" id="question1g" name="question1" value="g">
        <label for="question1g">G) Підтримане проживання осіб похилого віку та осіб з інвалідністю</label><br>
        <input type="radio" id="question1h" name="question1" value="h">
        <label for="question1h">H) Підтримане проживання бездомних осіб</label><br>
        <input type="radio" id="question1i" name="question1" value="i">
        <label for="question1i">I) Соціальний супровід сімей/осіб, які перебувають у складних життєвих обставинах</label><br>
        <input type="radio" id="question1h" name="question1" value="h">
        <label for="question1h">J) Фізичний супровід осіб з інвалідністю, які мають порушення опорно-рухового апарату та пересування на кріслах колісних, з інтелектуальними, сченсорними, фізичними, моторними, психічними та поведінковими порушеннями осіб</label><br>
        <label for="question1j">Інше:</label><br>
        <input type="text" id="question1_input" name="question1__input"><br><br>
		<h2>Вопрос 2</h2>
		<p>Надавач соціальних послуг</p>
        <input type="radio" id="question2a" name="question2" value="a">
        <label for="question1a">A)Міський територіальний центр соціального обслуговування (надання соціальних послуг)</label><br>
        <input type="radio" id="question2b" name="question2" value="b">
        <label for="question1b">B)Цент реінтеграції бездомних громадяно</label><br>
        <input type="radio" id="question2c" name="question2" value="c">
        <label for="question1c">C)Міський центр комплексної реабілітації для дітей з інвалідністю</label><br>
        <input type="radio" id="question2d" name="question2" value="d">
        <label for="question1d">D)Міський геріатричий будинок мелосердя імені Святого Миколая</label><br>
        <input type="radio" id="question2e" name="question2" value="e">
        <label for="question1e">E)Благодійна  організація «Миколаївський центр соціальної реабілітації «Відновлення»</label><br>
        <input type="radio" id="question2f" name="question2" value="f">
        <label for="question1f">F) Догляд та виховання дітей в умовах, наближених до сімейних</label><br>
        <input type="radio" id="question2g" name="question2" value="g">
        <label for="question1g">G) Підтримане проживання осіб похилого віку та осіб з інвалідністю</label><br>
        <input type="radio" id="question2h" name="question2" value="h">
        <label for="question1h">H)Громадська організація "Пенітенціарна інціатива"</label><br>
 
        <h2>Вопрос 3</h2>
		<p>Звідки Ви дізналися про соціальну послугу, яку отримали?</p>
        <label for="question3j">Інше:</label><br>
        <input type="text" id="question3_input" name="question3__input"><br><br>

        <h2>Вопрос 4</h2>
		<p>Чи відповідає Вашим потребам послуга, яку Ви отримали (отримуєте)?</p>
        <input type="radio" id="question4a" name="question4" value="a">
        <label for="question4a">A) Так</label><br>
        <input type="radio" id="question4b" name="question4" value="b">
        <label for="question4b">B) Ні</label><br>
        <label for="question4">Інше:</label><br>
        <input type="text" id="question4_input" name="question4__input"><br><br>
        
        <h2>Вопрос 5</h2>
		<p>Чи задоволені Ви ставленням до себе соціального працівника?</p>
		<input type="radio" id="q5a1" name="question5" value="yes">
		<label for="q5a1">Да</label><br>
		<input type="radio" id="q5a2" name="question5" value="no">
		<label for="q5a2">Нет</label><br>
		<input type="radio" id="q5a3" name="question5" value="other">
		<label for="q5a3">Другое</label><br>
        <input type="text" id="question5_input" name="question5__input"><br><br>

		<h2>Вопрос 6</h2>
		<p>Чи влаштовує Вас перелік соціальних послуг, які надає надавач соціальних послуг?</p>
		<input type="radio" id="q6a1" name="question6" value="yes">
		<label for="q6a1">Да</label><br>
		<input type="radio" id="q6a2" name="question6" value="no">
		<label for="q6a2">Нет</label><br>
		<input type="radio" id="q6a3" name="question6" value="other">
		<label for="q6a3">Другое</label><br>
        <input type="text" id="question6_input" name="question6__input"><br><br>

		<h2>Вопрос 7</h2>
		<p>Чи зручно Вам відвідувати надавача соціальних послуг?</p>
		<input type="radio" id="q7a1" name="question7" value="yes">
		<label for="q7a1">Да</label><br>
		<input type="radio" id="q3a2" name="question7" value="no">
		<label for="q7a2">Нет</label><br>
		<input type="radio" id="q3a3" name="question3" value="other">
		<label for="q7a3">Другое</label><br>
        <input type="text" id="question7_input" name="question7__input"><br><br>

		<h2>Вопрос 8</h2>
		<p>Чи відповідає надання соціальної послуги Вашому індивідуальному плану?</p>
		<input type="radio" id="q8a1" name="question8" value="yes">
		<label for="q8a1">Да</label><br>
		<input type="radio" id="q8a2" name="question8" value="no">
		<label for="q8a2">Нет</label><br>
		<input type="radio" id="q8a3" name="question8" value="other">
		<label for="q8a3">Другое</label><br>
        <input type="text" id="question8_input" name="question8__input"><br><br>

		<h2>Вопрос 9</h2>
		<p>Побажання щодо підвищення якості соціальної послуги чи діяльності надавача соціальних послуг</p>
		<input type="text" id="question9_input" name="question9__input"><br><br>
        <input type="submit" value="Отправить">
	</form>
    <?php
    if (isset($_GET['formSubmit'])){
        $nameform = $_GET['name'];
$neighborhoodform = $_GET['neighborhood'];
$question1form = $_GET['question1'];
$question1_inputform = $_GET['question1_input'];
$question2form = $_GET['question2'];
$question3_inputform = $_GET['question3_input'];
$question4form = $_GET['question4'];
$question4_inputform =$_GET['question4_input'];
$question5form = $_GET['question5'];
$question5_inputform = $_GET['question5_input'];
$question6form = $_GET['question6'];
$question6_inputform = $_GET['question6_input'];
$question7form = $_GET['question7'];
$question7_inputform = $_GET['question7_input'];
$question8form = $_GET['question8'];
$question8_inputform = $_GET['question8_input'];
$question9_inputform = $_GET['question9_input'];
$connection = new mysqli("localhost", "root", "", "test1");
if ($connection->connect_errno) {
    echo "Вибачте, сталася помилка на сайті";
    exit;
}
$name  = $connection->real_escape_string($nameform);
$neighborhood = $connection->real_escape_string($neighborhoodform);
$question1 = $connection->real_escape_string($question1form);
$question1_input = $connection->real_escape_string($question1_inputform);
$question2 = $connection->real_escape_string($question2form);
$question3_input = $connection->real_escape_string($question3_inputform);
$question4 = $connection->real_escape_string($question4form);
$question4_input = $connection->real_escape_string($question4_inputform);
$question5 = $connection->real_escape_string($question5form);
$question5_input = $connection->real_escape_string($question5_inputform);
$question6 = $connection->real_escape_string($question6form);
$question6_input = $connection->real_escape_string($question6_inputform);
$question7 = $connection->real_escape_string($question7form);
$question7_input = $connection->real_escape_string($question7_inputform);
$question8 = $connection->real_escape_string($question8form);
$question8_input = $connection->real_escape_string($question8_inputform);
$question9_input = $connection->real_escape_string($question9_inputform);
$connection = new mysqli("localhost", "root", "", "test1");
if ($connection->connect_errno) {
    echo "Вибачте, сталася помилка на сайті";
    exit;
}
$query = "INSERT INTO `test`(name, neighborhood, question1, question1_input, question2, question3_input, question4, question4_input, question5, question5_input, question6, question6_input, question7, question7_input, question8, question8_input, question9_input)
VALUES ('$name', '$neighborhood', '$question1', '$question1_input', '$question2', '$question3_input', '$question4', '$question4_input', '$question5', '$question5_input', '$question6', '$question6_input', '$question7', '$question7_input', '$question8', '$question8_input', '$question9_input')";
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
