<style type="text/css">
	body{
		margin-left: 20px;
	}

</style>
<?php 

define("COUNT_PLAYERS", 30);
define("COUNT_DAYS", 30);

$name = [
	'Nikita',
	'Dima',
	'Alex',
	'Sergey',
	'Vlad',
	'Andrey',
	'Artem',
	'Ivan',
	'Anton',
	'Maxim',
	'Oleg',
	'Roman'
];

$surname = [
	'Melnyk',
	'Shevchenko',
	'Boyko',
	'Kovalenko',
	'Bondarenko',
	'Tkachenko',
	'Kovalchuk',
	'Kravchenko',
	'Oliynyk',
	'Shevchuk',
	'Polishchuk',
	'Lysenko'
];

$player_list = array(); // переменная для листа играков


for($i = 0; $i <= COUNT_PLAYERS; $i++){
	$player_name = array_rand($name, 1); // беру рандомное имя
	$player_surname = array_rand($surname, 1); // беру рандомную фамилию
	$player_age = rand(18, 60); // генерирую рандомный возраст

	$one_player =  array($name[$player_name], $surname[$player_surname], $player_age);  //создаю 1 играка

	
	//echo '<pre>';
		//print_r($one_player);
	//echo '</pre><br>';

	array_push($player_list, $one_player); // в лист хочу записать/дозаписать 1 играка


	print_r(  "['name'] => $name[$player_name]" . "<br>"."['surname'] => $surname[$player_surname]"."<br>". "['age'] => $player_age" . "<br><br>");

}

shuffle($player_list); // перемешиваю играков

for($i = 0; $i < COUNT_DAYS; $i++){
	$p = $player_list[$i];
	$day = $i + 1;
	echo "day $day -- remove player name: $p[0], surname: $p[1], age: $p[2]<br>";
	unset($player_list[$i]); // удалить играка	
}

// echo "<br><br>After remove<br>";
// foreach($player_list as $key=>$value){
// 	echo "$key $value[0] $value[1] $value[2]<br>";
// }
echo "<br><br>";
$winner = $player_list[0];
echo "<h1>Winner -- $p[0] $p[1] $p[2]<br></h1>";