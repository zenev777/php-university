<?php require 'home-header-folder/home-header.php'?>
<head>
	<style>
		.home a{
			color:red;
		}
	</style>
	
</head>	
<!-- Header End -->
	<h3>Това е учебен сайт за студенти от Тракийски университет</h3>
	<table><tr>
	        <td><i>Име</i></td>
			<td><i>Фамилия</i></td>
			<td><i>Фак. номер</i></td>
			<td><i>Град</i></td>
		   </tr>
		   <?php
				$arr=array(
					["fname" => "Иван","lname"=> "Руменов","fnumber"=>"54","city" => "Пазарджик"], 
					["fname" => "Гонзо","lname"=> "Иванов","fnumber"=>"Шеф на БФС","city" => "Пловдив"], 
					["fname" => "Валери","lname"=> "Божинов","fnumber"=>"Божигол","city" => "Горна Оряховица"], 
					["fname" => "Ивка","lname"=> "Бейбе","fnumber"=>"Плаза","city" => "Опан"], 
					["fname" => "Благо","lname"=> "Георгиев","fnumber"=>"Джийзъса","city" => "София"]
					);


for ($i=0; $i < count($arr); $i++) { 
	echo "<tr><th>". $arr[$i]["fname"]. "</th><th>" .$arr[$i]["lname"]."</th><th>". $arr[$i]["fnumber"]. "</th><th>". $arr[$i]["city"]. "</th></tr>";
}
?>

</table>
</body>
</html>