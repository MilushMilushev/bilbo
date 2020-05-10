<?php include "ssi-header.shtml"; ?>

<section class="intro intro-contact">
	<div class="shell">
		<div class="intro-body">
			<div class="intro-content">
				<h1 class="title-primary">We are just few clicks away!</h1>
			</div><!-- /.intro-content -->
		</div><!-- /.intro-body -->
	</div><!-- /.shell -->	
</section><!-- /.intro -->

<section class="section-contact">
	<div class="shell shell-secondary">
		<h2 class="title-secondary">Get in touch</h2><!-- /.title-secondary -->

		<form action="contact-success.php" onsubmit="" method="post" id="contact-form" class="form form-contact">
			<div class="form-group" id="details">
				<div class="form-row">
					<label for="companyName" class="form-label">Company Name <span class="asterisk">*</span></label>
					
					<div class="form-controls">
						<input type="text" class="field" name="companyName" id="companyName" required>
					</div><!-- /.form-controls -->
				</div><!-- /.form-row -->
				
				<div class="form-row">
					<label for="contactPerson" class="form-label">Contact Person <span class="asterisk">*</span></label>
					
					<div class="form-controls">
						<input type="text" class="field" name="contactPerson" id="contactPerson" required>
					</div><!-- /.form-controls -->
				</div><!-- /.form-row -->
				
				<div class="form-row">
					<label for="email" class="form-label">Email <span class="asterisk">*</span></label>
					
					<div class="form-controls">
						<input type="email" class="field" name="email" id="email" required>
					</div><!-- /.form-controls -->
				</div><!-- /.form-row -->
				
				<div class="form-row">
					<label for="phone" class="form-label">Phone</label>
					
					<div class="form-controls">
						<input type="text" class="field" name="phone" id="phone">
					</div><!-- /.form-controls -->
				</div><!-- /.form-row -->

				<div class="form-row">
					<label for="message" class="form-label">Message <span class="asterisk">*</span></label>
					
					<div class="form-controls">
						<textarea class="textarea" name="message" id="message" rows="5" required></textarea>
					</div><!-- /.form-controls -->
				</div><!-- /.form-row -->
			</div>

			<div class="form-group form-check">
				<label class="checkbox">
					<input type="checkbox" id="agree" required> I am informed and I accept the GDPR Terms listed <a href="gdpr.html" target="_blank">here</a> <span class="asterisk">*</span>
				</label>
			</div>

			<div class="form-actions">
				<button type="submit" class="form-btn">SEND</button>
			</div><!-- /.form-actions -->
		</form>

		<h2 class="title-secondary">Or finds us at</h2><!-- /.title-secondary -->

		<div class="section-content">
			<ul class="contacts">
				<li>
					<i class="fa fa-map-marker-alt"></i>

					<p>
						<a href="https://www.google.com/maps/place/ZET+1+Ltd./@43.2278819,27.9243757,15z/data=!4m2!3m1!1s0x0:0x5b54a24a2248b298?sa=X&ved=2ahUKEwiq_93hub3oAhXSWxUIHZOlDuoQ_BIwCnoECBcQCA" target="_blank" rel="noreferrer noopener">
							ZET 1 Ltd. <br />
							zh.k. Izgrev №2964, 9010 Varna, BULGARIA
						</a>
					</p>
				</li>
				
				<li>
					<i class="fa fa-phone-alt"></i>

					<p>
						<a href="tel:00359877877478">00359 877877478</a>
					</p>

					<p>- or -</p>

					<p>
						<a href="tel:00359899968063">00359 899968063</a>
					</p>
				</li>
				
				<li>
					<i class="fa fa-envelope"></i>

					<p>
						<a href="mailto:info@bilbohoney.eu">info@bilbohoney.eu</a>
					</p>
				</li>
				
				<li>
					<i class="fa fa-network-wired"></i>

					<p>
						<a href="www.bilbohoney.eu">www.bilbohoney.eu</a>
					</p>
				</li>
			</ul><!-- /.contacts -->
		</div><!-- /.section-content has-ds -->
	</div><!-- /.shell shell-secondary -->
</section><!-- /.section-contact -->

<?php include "ssi-footer.shtml"; ?>