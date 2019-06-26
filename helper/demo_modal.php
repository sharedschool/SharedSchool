<div class="modal fade" id="demoModal" tabindex="-1" role="dialog" aria-labelledby="demoModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="demoModalLabel">Request a Demo</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" style="text-align:center">
				<div class="demo-form">
					<form id="demo-form" method="post" action="/handlers/demo.php">
						<div class="form-group">
							<label for="name">Full Name</label>
							<input type="text" class="form-control" id="demo-name" name="name" aria-describedby="nameHelp" placeholder="Full name">
						</div>
						<div class="form-group">
							<label for="institution">Institution</label>
							<input type="text" class="form-control" id="demo-inst" name="institution" aria-describedby="instHelp" placeholder="Institution">
						</div>
						<div class="form-group">
							<label for="email">Email address</label>
							<input type="email" class="form-control" id="demo-email" name="email" aria-describedby="emailHelp" placeholder="Email address">
						</div>
						<div class="form-group">
							<label for="demo-message">Message (optional)</label>
							<textarea class="form-control" name="message" id="demo-message" rows="3"></textarea>
						</div>
						<button type="submit" class="btn btn-primary">Request Demo Now</button>
					</form>
				</div>
		</div>
	</div>
</div>
</div>