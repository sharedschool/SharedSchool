<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="signupModalLabel">Sign up for SharedSchool now!</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" style="text-align:center">
				<div class="signup-1">
					<p>Sign up as:</p>
					<div>
						<button type="button" class="btn signup-btn signup-teacher">Teacher</button>
						<button type="button" class="btn signup-btn signup-administrator">Administrator</button>
						<button type="button" class="btn signup-btn signup-institution">Institution</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="signupModal-teacher" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel-teacher" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="signupModalLabel-teacher">Sign up for SharedSchool &gt; Teacher</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" style="text-align:center">
				<div class="signup-form signup-teacher">
					<form>
						<div class="form-group">
							<label for="name">Full name</label>
							<input type="text" class="form-control" name="fullname" placeholder="e.g. John Doe">
						</div>
						<div class="form-group">
							<label for="email">Email address (preferably institution)</label>
							<input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="e.g. jdoe@school.org">
						</div>
						<div class="form-group">
							<label for="password1">Password</label>
							<input type="password" class="form-control" name="password1" placeholder="Password">
						</div>
						<div class="form-group">
							<label for="password2">Confirm password</label>
							<input type="password" class="form-control" name="password2" placeholder="Password">
						</div>
						<div class="form-group">
							<label for="subject">Subject taught</label>
							<select class="form-control" name="subject">
								<option selected disabled>Select a subject</option>
								<option>Math</option>
								<option>Physics</option>
								<option>Chemistry</option>
								<option>Biology</option>
								<option>English</option>
								<option>History</option>
								<option>Spanish</option>
							</select>
						</div>
						<div class="form-group">
							<label for="institution">Institution</label>
							<input type="text" class="form-control" name="institution" placeholder="e.g. Metropolis High School">
						</div>
						<input type="hidden" name="acnt_type" value="teacher" />
						<button type="submit" class="btn btn-primary">Sign up</button>
					</form>
				</div>
		</div>
	</div>
</div>
</div>
<div class="modal fade" id="signupModal-administrator" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel-administrator" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="signupModalLabel-administrator">Sign up for SharedSchool &gt; Administrator</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" style="text-align:center">
				<div class="signup-form signup-administrator">
					<form>
						<div class="form-group">
							<label for="name">Full name</label>
							<input type="text" class="form-control" name="fullname" placeholder="e.g. John Doe">
						</div>
						<div class="form-group">
							<label for="email">Email address (preferably institution)</label>
							<input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="e.g. jdoe@school.org">
						</div>
						<div class="form-group">
							<label for="password1">Password</label>
							<input type="password" class="form-control" name="password1" placeholder="Password">
						</div>
						<div class="form-group">
							<label for="password2">Confirm password</label>
							<input type="password" class="form-control" name="password2" placeholder="Password">
						</div>
						<div class="form-group">
							<label for="dept">Department</label>
							<select class="form-control" name="dept">
								<option selected disabled>Select a department</option>
								<option>Math</option>
								<option>Science</option>
								<option>Foreign Language</option>
								<option>English</option>
								<option>History</option>
							</select>
						</div>
						<div class="form-group">
							<label for="subject">Subject taught</label>
							<select class="form-control" name="subject">
								<option selected disabled>Select a subject</option>
								<option>Math</option>
								<option>Physics</option>
								<option>Chemistry</option>
								<option>Biology</option>
								<option>English</option>
								<option>History</option>
								<option>Spanish</option>
							</select>
						</div>
						<div class="form-group">
							<label for="institution">Institution</label>
							<input type="text" class="form-control" name="institution" placeholder="e.g. Metropolis High School">
						</div>
						<input type="hidden" name="acnt_type" value="administrator" />
						<button type="submit" class="btn btn-primary">Sign up</button>
					</form>
				</div>
		</div>
	</div>
</div>
</div>
<div class="modal fade" id="signupModal-institution" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel-institution" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="signupModalLabel-institution">Sign up for SharedSchool &gt; Institution</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" style="text-align:center">
				<div class="signup-form signup-institution">
					<form>
						<div class="form-group">
							<label for="name">Institution name</label>
							<input type="text" class="form-control" name="institution" placeholder="e.g. Metropolis High School">
						</div>
						<div class="form-group">
							<label for="email">Institution email address</label>
							<input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="e.g. board@school.org">
						</div>
						<div class="form-group">
							<label for="password1">Password</label>
							<input type="password" class="form-control" name="password1" placeholder="Password">
						</div>
						<div class="form-group">
							<label for="password2">Confirm password</label>
							<input type="password" class="form-control" name="password2" placeholder="Password">
						</div>
						<div class="form-group">
							<label for="students">Approximate student enrollment</label>
							<input type="number" class="form-control" name="students" placeholder="e.g. 1500">
						</div>
						<div class="form-group">
							<label for="level">School level</label>
							<select class="form-control" name="level">
								<option selected disabled>Select a level</option>
								<option>Elementary</option>
								<option>Middle / Junior High</option>
								<option>High School (9-12)</option>
								<option>Other</option>
							</select>
						</div>
						<div class="form-group">
							<label for="type">School type</label>
							<select class="form-control" name="type">
								<option selected disabled>Select a type</option>
								<option>Public</option>
								<option>Private</option>
								<option>Other</option>
							</select>
						</div>
						<input type="hidden" name="acnt_type" value="institution" />
						<button type="submit" class="btn btn-primary">Sign up</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
