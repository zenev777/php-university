<?php require 'home-header-folder/home-header.php'?>
<head>
	<style>
		.home a{
			color:red;
		}
	</style>
</head>	
<!-- Header End -->
	<h3>Нов запис</h3>
<?php 
	// Инициализиране на променливи използвани във формата
	$fname = $lname = $gender = $fnumber = $address = $fnameErr = $lnameErr = $genderErr = $fnumberErr = "";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
  	  if (empty($_POST["fname"])) {
    	$fnameErr = "Въведете име"; // ако не е зададено име се задава стойност на променливата за грешка 
  	  } else {
    	$fname = $_POST["fname"]; 
      }
  	  if (empty($_POST["lname"])) { // проверка за фамилия
    	$lnameErr = "Въведете фамилия";
  	  } else {
    	$lname = $_POST["lname"];
      }
  	  if (empty($_POST["fnumber"])) { // проверка за факултетен номер
    	$fnumberErr = "Въведете факултетен номер";
  	  } else {
    	$fnumber = $_POST["fnumber"];
      }
  	  if (empty($_POST["address"])) { // проверка за адрес
    	$address = "";
  	  } else {
    	$address = $_POST["address"];
   	  }
  	  if (empty($_POST["gender"])) { // проверка за пол
    	$genderErr = "Въведете пол";
  	  } else {
    	$gender = $_POST["gender"];
  	  }
	}
	// Ако са въведени задължителните полета се извежда записаната информация
	if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($fnameErr) && empty($lnameErr) && empty($fnumberErr) && empty($genderErr)) {
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $fnumber = $_POST["fnumber"];
        $gender = $_POST["gender"];
        $address = $_POST["address"];
        echo "<h2>Записана е следната информация:</h2>";
        echo "Име: ".$fname;
        echo "<br>";
        echo "Фамилия: ".$lname;
        echo "<br>";
        echo "Факултетен номер: ".$fnumber;
        echo "<br>";
        echo "Пол: ".$gender;
        echo "<br>";
        echo "Адрес: ".$address;
		echo "<p><a href=\"".$_SERVER["PHP_SELF"]."\" style='text-decoration:none;'>Към нов запис >></а></p>";
	} else {
	  // Ако има непопълнени задължителни полета или няма предадени данни от форма се извежда формата за попълване
	  ?>
	  <p><span class="error">* задължителни полета</span></p>
	  <form method="post" action="<?php $_SERVER["PHP_SELF"] ?>">  
  	  	Име: <input type="text" name="fname" value="<?php echo $fname;?>">
  	  	<span class="error">* <?php echo $fnameErr;?></span>
  	  	<br><br>
  	  	Фамилия: <input type="text" name="lname" value="<?php echo $lname;?>">
  	  	<span class="error">* <?php echo $lnameErr;?></span>
  	  	<br><br>
  	  	Фак. номер: <input type="text" name="fnumber" value="<?php echo $fnumber;?>">
   	  	<span class="error">* <?php echo $fnumberErr;?></span>
  	  	<br><br>
  	  	Пол:
  	  	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="жена") echo "checked";?> value="жена">жена
  	  	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="мъж") echo "checked";?> value="мъж">мъж
   	  	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="друго") echo "checked";?> value="друго">друго  
  	  	<span class="error">* <?php echo $genderErr;?></span>
  	  	<br><br>
  	  	Адрес: <textarea name="address" rows="5" cols="40"><?php echo $address;?></textarea>
  	  	<br><br>
  	  	<input type="submit" name="submit" value="Запис">  
	  </form>
	  <?php
	}
?>
</body>
</html>