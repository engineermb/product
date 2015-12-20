<?php
/*
// Имя файла со списком книг
define('BOOKS_FILE', 'books.txt');
// Название параметра GET
define('NUM', 'num');*/

// Передача текса в кодировке UTF-8
header('Content-type: text/plain; charset=utf-8');
// Запрет кеширования
header('Cache-COntrol: no-store, no-cache');
header('Expires: ' . date('r'));
echo "hi";

$msg = $_GET['msg'];
if($msg){
	file_put_contents("table.txt", date("H:i:s").": ".$msg."\n", FILE_APPEND);
	$allmsg = file("table.txt");
	foreach($allmsg as $value){
		echo "<p>".$value."</p>";
	}
	
}
//echo date("H:i:s");

/*
// Чтение файла
$books = file(BOOKS_FILE);

// Проверка параметра num
if (!empty($_GET[NUM])){
	// Парметр указан
	$num = abs((int) $_GET[NUM]);
	if ($num <= count($books) && $num > 0)
		echo $books[$num-1];
	else
		echo 'Книга не найдена';
}else{
	// Парметр не указан, возвращаем число книг
	echo 'Всего книг: ' . count($books);
}*/
?>