<?php
$contact_form_title = get_sub_field('contact_form_title');
$address_title = get_sub_field('address_title');
$address = get_sub_field('address');
?>


<section class="standard">
				<div class="container">
					<div class="row">
						<div class="col-xs-6">
							<h2><?php echo $contact_form_title; ?></h2>
							<form>
								<div class="form-group">
									<label for="name">Namn</label>
									<input type="text" id="name" class="form-control" />
								</div>
								<div class="form-group">
									<label for="email">E-post</label>
									<input type="email" id="email" class="form-control" />
								</div>
								<div class="form-group">
									<label for="message">Meddelande</label>
									<textarea id="message" class="form-control"></textarea>
								</div>
								<div class="form-group">
									<input type="submit" value="Skicka" class="btn btn-default" />
								</div>
							</form>
						</div>
						<div class="col-xs-6">
							<h2><?php echo $contact_form_title; ?></h2>
							
                            <p><?php echo $address; ?></p>
						</div>
					</div>
				</div>
			</section>