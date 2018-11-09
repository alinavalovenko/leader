<div class="contact-form">
	<div class="section-heading text-center">
		<h2 class="section-title">Get a Quote</h2>
		<p class="section-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
			Ratione!
		</p>
	</div>
	<form action="php/form.php" method="post" id="validation" class="form-area">
		<div class="row">
			<div class="col-md-12">
				<div class="select-area">
					<select name="project">
						<option value="">What your project need?</option>
						<option value="Custom interface and layout">Custom interface and layout</option>
						<option value="CMS integrations (WordPress)">CMS integrations (WordPress)
						</option>
						<option value="Website design">Website design</option>
						<option value="Seo optimization">SEO optimization</option>
					</select>
				</div>
			</div>
			<div class="col-md-6">
				<div class="input-area">
					<input name="name" type="text" required>
					<label class="floating-label">Name*</label>
				</div>
			</div>
			<div class="col-md-6">
				<div class="input-area">
					<input name="email" type="email" required>
					<label class="floating-label">Email*</label>
				</div>
			</div>
			<div class="col-md-6">
				<div class="input-area">
					<input name="company" type="text" required>
					<label class="floating-label">Company Name*</label>
				</div>
			</div>
			<div class="col-md-6">
				<div class="input-area">
					<input name="phone" type="tel" required>
					<label class="floating-label">Phone*</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="select-area">
					<select name="budget">
						<option value="">What is your budget?</option>
						<option value="under $500">My budget is under $500</option>
						<option value="$500 to $1000">My budget is between $500 to $1000</option>
						<option value="$1000 to $1500">My budget is between $1000 to $1500</option>
						<option value="over $1500">My budget is over $1500</option>
					</select>
				</div>
			</div>
			<div class="col-md-12">
				<div class="text-area">
					<textarea name="message" rows="6" required></textarea>
					<label class="floating-label">Message</label>
				</div>
			</div>
			<div class="col-12 text-center">
				<button name="submit" type="submit" class="btn button-scheme">Send Message</button>
			</div>
		</div>
	</form>
</div>