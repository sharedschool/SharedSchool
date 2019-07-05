<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="signupModalLabel">Sign Up for SharedSchool</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" style="text-align:center">
				<div class="signup-1">
					<p>Sign up as:</p>
					<div class="row justify-content-center">
						<div class="col-md-4">
							<button type="button" class="btn signup-btn signup-admin"
								data-container="body"
								data-toggle="popover"
								data-placement="bottom"
								data-content="Detailed description of admin accounts coming soon."
								data-trigger="hover">
								Admin
							</button>
						</div>
						<div class="col-md-4">
							<button type="button" class="btn signup-btn signup-user"
								data-container="body"
								data-toggle="popover"
								data-placement="bottom"
								data-content="Detailed description of user accounts coming soon."
								data-trigger="hover">
								User
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="signupModal-admin" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel-admin" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="signupModalLabel-admin">Sign Up for SharedSchool &gt; Admin</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" style="text-align:center">
				<div class="signup-form signup-admin">
					<form>
						<div class="form-group">
							<label for="name">Full Name</label>
							<input type="text" class="form-control" name="fullname" placeholder="e.g. John Doe">
						</div>
						<div class="form-group">
							<label for="email">Email Address (preferably institution)</label>
							<input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="e.g. jdoe@school.org">
						</div>
						<div class="form-group">
							<label for="institution">Position</label>
							<input type="text" class="form-control" name="position" placeholder="e.g. Business Administrator">
						</div>
						<div class="form-group">
							<label for="institution">Institution Name</label>
							<input type="text" class="form-control" name="institution" placeholder="e.g. Metropolis High School">
						</div>
						<div class="form-group">
							<label for="level">School Level</label>
							<select class="form-control" name="level">
								<option selected disabled>Select a level</option>
								<option>Elementary</option>
								<option>Middle / Junior High</option>
								<option>High School (9-12)</option>
								<option>Other</option>
							</select>
						</div>
						<div class="form-group">
							<label for="type">School Type</label>
							<select class="form-control" name="type">
								<option selected disabled>Select a type</option>
								<option>Public</option>
								<option>Private</option>
								<option>Charter</option>
								<option>Boarding</option>
								<option>Other</option>
							</select>
						</div>
						<div class="form-group">
							<label for="password1">Password</label>
							<input type="password" class="form-control" name="password1" placeholder="Password">
						</div>
						<div class="form-group">
							<label for="password2">Confirm password</label>
							<input type="password" class="form-control" name="password2" placeholder="Password">
						</div>
						<input type="hidden" name="acnt_type" value="admin" />
						<button type="submit" class="btn btn-primary">Sign up</button>
					</form>
				</div>
		</div>
	</div>
</div>
</div>
<div class="modal fade" id="signupModal-user" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel-user" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="signupModalLabel-user">Sign Up for SharedSchool &gt; User</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" style="text-align:center">
				<div class="signup-form signup-user">
					<form>
						<div class="form-group">
							<label for="name">Full Name</label>
							<input type="text" class="form-control" name="fullname" placeholder="e.g. John Doe">
						</div>
						<div class="form-group">
							<label for="email">Email Address (preferably institution)</label>
							<input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="e.g. jdoe@school.org">
						</div>
						<div class="form-group">
							<label for="institution">
								School Code
								<button type="button" class="btn btn-link" style="padding: initial"
									data-container="body"
									data-toggle="popover"
									data-placement="bottom"
									data-content="This is the code ID for your school. Contact your administrator if you do not know what your code is."
									data-trigger="hover">
									?
								</button>
							</label>
							<input type="text" class="form-control" name="institution" placeholder="e.g. FJ6KX1">
						</div>
						<div class="form-group">
							<label for="institution">Position</label>
							<input type="text" class="form-control" name="position" placeholder="e.g. Chemistry Teacher">
						</div>
						<div class="form-group">
							<label for="password1">Password</label>
							<input type="password" class="form-control" name="password1" placeholder="Password">
						</div>
						<div class="form-group">
							<label for="password2">Confirm password</label>
							<input type="password" class="form-control" name="password2" placeholder="Password">
						</div>
						<input type="hidden" name="acnt_type" value="user" />
						<button type="submit" class="btn btn-primary">Sign up</button>
					</form>
				</div>
		</div>
	</div>
</div>
</div>