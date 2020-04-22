<?php
if(isset($_POST))
{
	$text="";
	$index=1;
	while(true)
	{
		$itemName = $_POST['item'.$index];
		if(empty($itemName))
		{
			break;
		}
		$itemQtty=$_POST['qtty'.$index];
		$index++;
		$text=$text."Продукт: ".$itemName."\r\nКоличество: ".$itemQtty. "\r\n\r\n";
	}

	$text=$text."Пощенски код: ".$_POST['postCode']."\r\n";
	$text=$text."Държава: ".$_POST['country']."\r\n";
	$text=$text."Предпочитан транспорт: ".$_POST['shippingPreferences']."\r\n";
	$text=$text."Коментар: ".$_POST['comment']."\r\n";
	$text=$text."Фирма: ".$_POST['companyName']."\r\n";
	$text=$text."Човек за връзка: ".$_POST['contactPerson']."\r\n";
	$text=$text."Email: ".$_POST['email']."\r\n";
	$text=$text."Телефон: ".$_POST['phone']."\r\n";
	
	mail('info@bilbohoney.eu,emil@bilbohoney.eu', 'Quote request bilbohoney.eu', $text);
}
?>

<!DOCTYPE html>
<html style="height: 100%;">
	<head>
		<title>Quote generator</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		</head>
	<body onload="init()" style="position: relative; min-height: 100%; top: 0px;margin: 5px; padding: 5px">
		<h1>Thank you for your request!<br/>
We will respond to you shortly!</h1>
	</body>
</html>