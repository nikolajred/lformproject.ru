<?php
// echo $_POST['username'];
// echo $_POST['password'];
// echo $_POST['telephon'];

$result = mail("test@test.ru","Опросник","С сайта был получен опросник с такими данными: \nИмя: $_POST[username] \nПароль: $_POST[password] \nТелефон $_POST[telephon] \nВы работаете?: $_POST[job] \nКакое у вас образование?: $_POST[education] \nВаш возраст?: $_POST[age] \nОставте отзыв о нашем проекте: $_POST[feedback]");
if ($result) {
	echo"<p>Сообщение отправлено успешно!</p>";
}else{
	echo "<p>Сообщение не отправлено!</p>";
}
?>