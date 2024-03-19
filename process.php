<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Личные данные
  if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone'])) {
    $is_valide = true;

    // ФИО
    $name = $_POST['name'];
    if (!preg_match("/^[А-Я][а-я]+\s[А-Я][а-я]+\s[А-Я][а-я]+$/u", $name)) {
      $is_valide = false;
      echo "Неверный формат ФИО. Пожалуйста, введите ФИО в формате 'Фамилия Имя Отчество'.<br>";
    } else {
      echo "ФИО: " . $name . "<br>";
    }

    // E-mail
    $email = $_POST['email'];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $is_valide = false;
      echo "Неверный формат e-mail.<br>";
    } else {
      echo "E-mail: " . $email . "<br>";
    }

    // Телефон
    $phone = $_POST['phone'];
    if (!preg_match("/^\+7\d{10}$|^8\d{10}$/", $phone)) {
      $is_valide = false;
      echo "Неверный формат телефона. Пожалуйста, введите телефон в формате '+71234567890' или '81234567890'.<br>";
    } else {
      echo "Телефон: " . $phone . "<br>";
    }

    if($is_valide){
      echo "<br>Все данные верны!";
    } else {
      echo '<br>Повторите попытку - <a href="index.php"><button>Вернуться назад</button></a>';
    }
  }

  // Таблица
  if (isset($_POST['rows']) && isset($_POST['cols'])) {
    $rows = $_POST['rows'];
    $cols = $_POST['cols'];

    if (!is_numeric($rows) || !is_numeric($cols) || $rows <= 0 || $cols <= 0) {
      echo 'Неверный входные данные для таблицы - <a href="index.php"><button>Вернуться назад</button></a>';
    } else {
      echo "<table border='1'>";
      for ($i = 0; $i < $rows; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $cols; $j++) {
          echo "<td>&nbsp&nbsp&nbsp&nbsp&nbsp</td>";
        }
        echo "</tr>";
      }
      echo "</table>";
  }
 }
}
?>
