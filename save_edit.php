<?php 
session_start();
include_once("db.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Изменение данных <?php echo $login; ?></title>
</head>
<body>
<?php
 

////////Изменение имени
 
 if (isset($_POST['name'])){//Если существует имя
    $name = $_POST['name'];
    $name = stripslashes($name);
    $name = htmlspecialchars($name);
    $name = trim($name);//удаляем все лишнее
    
    if ($name == '') {
        exit("Вы не ввели имя<br><a href='edit.php'>Вернуться назад</a>");
    }
 
    $up = mysql_query("UPDATE users SET name_user='$name' WHERE id='$id_user'");//обновляем имя
    if ($up == true) {
        echo "<meta http-equiv='Refresh' content='0; URL=profile.php?id=".$id_user."'>";
    }
}
 
 
////////Изменение фамилии
 
else if (isset($_POST['lastname'])){//Если существует фамилия
    $lastname = $_POST['lastname'];
    $lastname = stripslashes($lastname);
    $lastname = htmlspecialchars($lastname);
    $lastname = trim($lastname);//удаляем все лишнее
    
    if ($lastname == '') {
        exit("Вы не ввели фамилию<br><a href='edit.php'>Вернуться назад</a>");
    }
 
    $up = mysql_query("UPDATE users SET lastname='$lastname' WHERE id='$id_user'");//обновляем фамилию
    if ($up=='TRUE') {//если верно, то обновляем его в сессии
        $_SESSION['lastname'] = $lastname;
        echo "<meta http-equiv='Refresh' content='0; URL=profile.php?id=".$id_user."'>";
    }
}
 
////////Изменение города
 
else if (isset($_POST['phone'])){//Если существует фамилия
    $phone = $_POST['phone'];
    $phone = stripslashes($phone);
    $phone = htmlspecialchars($phone);
    $phone = trim($phone);//удаляем все лишнее
    
    if ($phone == '') {
        exit("Вы не ввели город<br><a href='edit.php'>Вернуться назад</a>");
    }
 
    $up = mysql_query("UPDATE users SET phone='$phone' WHERE id='$id_user'");//обновляем город
    if ($up == true) {//если верно, то обновляем его в сессии
        $_SESSION['phone'] = $phone;
        echo "<meta http-equiv='Refresh' content='0; URL=profile.php?id=".$id_user."'>";
    }
}
 
////////Изменение города
 
else if (isset($_POST['address'])){//Если существует фамилия
    $address = $_POST['address'];
    $address = stripslashes($address);
    $address = htmlspecialchars($address);
    $address = trim($address);//удаляем все лишнее
    
    if ($address == '') {
        exit("Вы не ввели город<br><a href='edit.php'>Вернуться назад</a>");
    }
 
    $up = mysql_query("UPDATE users SET address='$address' WHERE id='$id_user'");//обновляем город
    if ($up == true) {//если верно, то обновляем его в сессии
        $_SESSION['address'] = $address;
        echo "<meta http-equiv='Refresh' content='0; URL=profile.php?id=".$id_user."'>";
    }
}
 
////////Изменение числа, месяца и года
 
else if (isset($_POST['birthdate_day']) AND isset($_POST['birthdate_month']) AND isset($_POST['birthdate_year'])){//Если существует день рождения
    $birthdate_day = $_POST['birthdate_day'];
    $birthdate_day = stripslashes($birthdate_day);
    $birthdate_day = htmlspecialchars($birthdate_day);
    $birthdate_day = trim($birthdate_day);//удаляем все лишнее
    
    if ($birthdate_day == '' OR $birthdate_day > 31) {
        exit("Вы не ввели день рождения<br><a href='edit.php'>Вернуться назад</a>");
    }
    
    $birthdate_month = $_POST['birthdate_month'];
    $birthdate_month = stripslashes($birthdate_month);
    $birthdate_month = htmlspecialchars($birthdate_month);
    $birthdate_month = trim($birthdate_month);//удаляем все лишнее
    
    if ($birthdate_month == '' OR $birthdate_month > 12) {
        exit("Вы не ввели месяц рождения<br><a href='edit.php'>Вернуться назад</a>");
    }
    
    $birthdate_year = $_POST['birthdate_year'];
    $birthdate_year = stripslashes($birthdate_year);
    $birthdate_year = htmlspecialchars($birthdate_year);
    $birthdate_year = trim($birthdate_year);//удаляем все лишнее
    
    if ($birthdate_year == '' OR $birthdate_year < 1940 OR $birthdate_year > 2005) {
        exit("Вы не ввели год рождения<br><a href='edit.php'>Вернуться назад</a>");
    }
 
    $up = mysql_query("UPDATE users SET birthdate_day='$birthdate_day',birthdate_month='$birthdate_month',birthdate_year='$birthdate_year' WHERE id='$id_user'");//обновляем день
    if ($up == true) {
        echo "<meta http-equiv='Refresh' content='0; URL=profile.php?id=".$id_user."'>";
    }
}
 
 
 
////////Изменение пола
 
else if (isset($_POST['sex'])){//Если существует фамилия
    $sex = $_POST['sex'];
    $sex = stripslashes($sex);
    $sex = htmlspecialchars($sex);
    $sex = trim($sex);//удаляем все лишнее
    
    if ($sex == '') {
        exit("Вы не ввели пол<br><a href='edit.php'>Вернуться назад</a>");
    }
 
    $up = mysql_query("UPDATE users SET sex='$sex' WHERE id='$id_user'");//обновляем пол
    if ($up == true) {
        echo "<meta http-equiv='Refresh' content='0; URL=profile.php?id=".$id_user."'>";
    }
}
	$up = mysql_query("SELECT * users  WHERE id='$id_user'");//обновляем имя
    if ($up == true) {
        echo "<meta http-equiv='Refresh' content='0; URL=indexx.php?id=".$id_user."'>";
    }
?>
</body>
</html>
