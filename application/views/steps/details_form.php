<!-- Two -->
<section id="two" class="wrapper style1 fullscreen fade-up">
	<div class="inner">
		<h2>Enter your details</h2>
		<p>We need your details so that we can verify and contact you if you win. Your details will be kept private.</p>
		<div class="style1">
			<section>
				<form method="post" action="<?php echo base_url();?>index.php/insertctrl">	
					<div class="fields">
						<div class="field half">
							<label for="name">Full Name</label>
							<input type="text" name="fname" id="fname">
							<input type="hidden" name="lnum" value="0123">
						</div>
						<div class="field half">
							<label for="phone">Mobile Number</label>
							<input type="text" name="uphone" id="uphone">
						</div>
						<div class="field half">
							<label for="email">Email</label>
							<input type="text" name="uemail" id="uemail">
						</div>
					</div>
					<ul class="actions">
						<li><button type="submit" name="save" class="button scrolly">Next Step</button></li>
					</ul>
				</form>
			</section>
		</div>
	</div>
</section>