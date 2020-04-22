<?php
if(isset($_POST)) {
	$text="";
	if (!empty($_POST['companyName'])) {
		$text=$text."Фирма: ".$_POST['companyName']."\r\n";
	}

	if (!empty($_POST['contactPerson'])) {
		$text=$text."Човек за връзка: ".$_POST['contactPerson']."\r\n";
	}

	if (!empty($_POST['email'])) {
		$text=$text."Email: ".$_POST['email']."\r\n";	
	}

	if (!empty($_POST['phone'])) {
		$text=$text."Телефон: ".$_POST['phone']."\r\n";
	}

	if (!empty($_POST['message'])) {
		$text=$text."Съобщение: ".$_POST['message'];
	}

	if(!empty($text)){
		// mail('i0nfo@bilbohoney.eu,emil@bilbohoney.eu', 'Request bilbohoney.eu', $text);
		mail('lort@abv.bg', 'Request bilbohoney.eu', $text);
	}
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
