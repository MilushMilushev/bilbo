<?php
error_reporting(E_ALL ^ E_WARNING); 
if(isset($_POST))
{
	$text="";
	$index=1;
	while(true)
	{
		if(empty($_POST['item'.$index]))
		{
			break;
		}
		$itemName = $_POST['item'.$index];
		$itemQtty=$_POST['qtty'.$index];
		$index++;
		$text=$text."Product: ".$itemName."\r\nRequested quantity: ".$itemQtty. "\r\n\r\n";
	}

	if(!empty($_POST['postCode'])) {
		$text=$text."Post code: ".$_POST['postCode']."\r\n";
	}

	if(!empty($_POST['country'])) {
		$text=$text."Country: ".$_POST['country']."\r\n";
	}

	if(!empty($_POST['shippingPreferences'])) {
		$text=$text."Preferred way of transportation: ".$_POST['shippingPreferences']."\r\n";
	}
	if (!empty($_POST['comment'])) {
		$text=$text."Additional requirements or questions: ".$_POST['comment']."\r\n";
	}
	
	if (!empty($_POST['companyName'])) {
		$text=$text."Company Name: ".$_POST['companyName']."\r\n";
	}
	if (!empty($_POST['contactPerson'])) {
		$text=$text."Contact Person: ".$_POST['contactPerson']."\r\n";
	}
	if (!empty($_POST['email'])) {
		$text=$text."Email: ".$_POST['email']."\r\n";
	}
	if (!empty($_POST['phone'])) {
		$text=$text."Phone: ".$_POST['phone']."\r\n";
	}
	
	mail('info@bilbohoney.eu,emil@bilbohoney.eu', 'Quote request bilbohoney.eu', $text);
}
?>

<?php include "ssi-header.shtml"; ?>

<section class="intro intro-contact">
	<div class="shell">
		<div class="intro-body">
			<div class="intro-content">
				<h1 class="title-primary">Success!</h1>
			</div><!-- /.intro-content -->
		</div><!-- /.intro-body -->
	</div><!-- /.shell -->	
</section><!-- /.intro -->

<section class="section section-secondary">
	<div class="shell shell-secondary">
		<h2 class="title-secondary">Thank you for your request!</h2>

		<h4>We will respond to you shortly!</h4>
	</div><!-- /.shell -->
</section><!-- /.section -->

<?php include "ssi-footer.shtml"; ?>
