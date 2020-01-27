<?php

<<<<<<< HEAD

=======
>>>>>>> 7df9bb5cff295b0a4913a15ec9014062519d61d4
define('DSN', 'mysql:host=mysql;dbname=pet_shop;charset=utf8;');
define('USER', 'staff');
define('PASSWORD', '9999');

try {
  $dbh = new PDO(DSN, USER, PASSWORD);
} catch (PDOException $e) {
  echo $e->getMessage();
  exit;
}

<<<<<<< HEAD

=======
>>>>>>> 7df9bb5cff295b0a4913a15ec9014062519d61d4
$sql = "select * from animals";

$stmt = $dbh->prepare($sql);

$stmt->execute();

$animals = $stmt->fetchAll(PDO::FETCH_ASSOC);

<<<<<<< HEAD
foreach ($animals as $animal)
{
  echo $animal['type'] . 'の' . $animal['classifcation'] . 'ちゃん' . '<br>' .  $animal['description'] . '<br>' . $animal['birthday'] . '生まれ' . '<br>' . '出身地' .  ['birthday'] . '<hr>';
=======
foreach ($animals as $animal) {
  echo $animal['type'] .  'の' . $animal['classifcation'] . 'ちゃん' .'<br>' . $animal['description'] . '<br>' . $animal['birthday'] . ' 生まれ' . '<br>' . '出身地 ' . $animal['birthplace'] . '<hr>';
>>>>>>> 7df9bb5cff295b0a4913a15ec9014062519d61d4
}