<?php include "ssi-header.shtml"; ?>

<section class="intro intro-contact">
	<div class="shell">
		<div class="intro-body">
			<div class="intro-content">
				<h1 class="title-primary">Let's work together!</h1>
			</div><!-- /.intro-content -->
		</div><!-- /.intro-body -->
	</div><!-- /.shell -->	
</section><!-- /.intro -->

<section class="section">
	<div class="shell shell-secondary">
		<h2 class="title-secondary">Free Quote</h2><!-- /.title-secondary -->

		<form action="quote-success.php" method="post" class="form form-quote">
			<div class="form-group">
				<fieldset>
					<legend>Products:</legend>

					<div class="form-row form-row-has-cols">
						<div class="form-col form-col-item">
							<label for="item1" class="form-label">Product Name <span class="asterisk">*</span></label>
							
							<div class="form-controls">
								<div class="select">
									<select name="item1" class="product-select" id="item1" required>
										<option selected>White honey 230 g</option>
										<option>White honey 430 g</option>
										<option>Linden honey 250 g</option>
										<option>Linden honey 500 g</option>
										<option>Lavender honey 250 g</option>
										<option>Lavender honey 500 g</option>
										<option>Acacia honey 250 g</option>
										<option>Acacia honey 500 g</option>
										<option>Oak honey 250 g</option>
										<option>Oak honey 500 g</option>
										<option>Rose honey 230 g</option>
										<option>Rose honey 430 g</option>
										<option>Flower honey 250 g</option>
										<option>Flower honey 500 g</option>
									</select>
								</div><!-- /.select -->
							</div><!-- /.form-controls -->
						</div><!-- /.form-col -->
						
						<div class="form-col form-col-qtty">
							<label for="qtty1" class="form-label">Requested quantity(pcs) <span class="asterisk">*</span></label>
							
							<div class="form-controls">
								<input type="number" class="field field-number" name="qtty1" id="qtty1" min="960" required>

								<span class="form-info">Minimum of <em>960</em>(pcs)</span>
							</div><!-- /.form-controls -->
						</div><!-- /.form-col -->
					</div><!-- /.form-row -->

					<div class="form-row form-row-center form-row-add-button">
						<button class="form-btn" id="add-row">Add</button>

						<button class="form-btn" id="remove-row">Remove</button>
					</div><!-- /.form-row -->
				</fieldset>
			</div>

			<div class="form-group" id="deliveryDetails">
				<fieldset>
					<legend>Delivery Details:</legend>

					<div class="form-row">
						<label for="postCode" class="form-label">Post code <span class="asterisk">*</span></label>
						
						<div class="form-controls">
							<input type="text" class="field" name="postCode" id="postCode" required>
						</div><!-- /.form-controls -->
					</div><!-- /.form-row -->
					
					<div class="form-row">
						<label for="country" class="form-label">Country <span class="asterisk">*</span></label>
						
						<div class="form-controls">
							<input type="text" class="field" name="country" id="country" required>
						</div><!-- /.form-controls -->
					</div><!-- /.form-row -->

					<div class="form-row">
						<label for="shippingPreferences" class="form-label">Preferred way of transportation <span class="asterisk">*</span></label>
						
						<div class="form-controls">
							<div class="select">
								<select name="shippingPreferences" id="shippingPreferences" required>
									<option selected>by road</option>
									<option>by air</option>
									<option>by sea</option>
								</select>
							</div><!-- /.select -->
						</div><!-- /.form-controls -->
					</div><!-- /.form-row -->
					
					<div class="form-row">
						<label for="comment" class="form-label">Additional requirements or questions</label>
						
						<div class="form-controls">
							<textarea class="textarea" name="comment" id="comment" rows="4"></textarea>
						</div><!-- /.form-controls -->
					</div><!-- /.form-row -->
				</fieldset>
			</div>

			<div class="form-group">
				<fieldset>
					<legend>Contact Information:</legend>

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
				</fieldset>
			</div>

			<div class="form-group form-check">
				<label class="checkbox">
					<input type="checkbox" id="agree" required> I am informed and I accept the GDPR Terms listed <a href="gdpr.html" target="_blank">here</a> <span class="asterisk">*</span>
				</label>
			</div>

			<div class="form-actions">
				<button type="submit" class="form-btn">GET QUOTE</button>
			</div><!-- /.form-actions -->
		</form>
	</div><!-- /.shell shell-secondary -->
</section><!-- /.section -->


<?php include "ssi-footer.shtml"; ?>