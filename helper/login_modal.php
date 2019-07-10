<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="loginModalLabel">Log in to your SharedSchool account</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body text-center">
				<div class="login-form">
					<form>
						<div class="form-group">
							<label for="email">Email address</label>
							<input type="email" class="form-control login-form-input" name="email" aria-describedby="emailHelp" placeholder="Email address" required>
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control login-form-input" name="password" placeholder="Password" required>
						</div>
						<button id="login-button" type="submit" class="btn btn-primary" disabled>Log in</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	let inputs = document.getElementsByClassName("login-form-input");
	
	function checkInputs() {
		let button = document.getElementById("login-button");
		let filled = true;
		
		Array.from(inputs).forEach(input => {
			if(input.value == "") { // If either of the inputs are empty
				button.disabled = true;
				filled = false;
			}
		});
		if(filled)
			document.getElementById("login-button").disabled = false;
	}

	Array.from(inputs).forEach(input => {
		input.addEventListener('propertychange', checkInputs);
		input.addEventListener('change', checkInputs);
		input.addEventListener('click', checkInputs);
		input.addEventListener('keyup', checkInputs);
		input.addEventListener('input', checkInputs);
		input.addEventListener('paste', checkInputs);
	});
</script>