<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="dashboard"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="#" class="active"><i class="lnr lnr-pencil"></i> <span>Registration</span></a></li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Loans</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="loan_application" class="">Loan Application</a></li>
									<li><a href="pending" class="">Pending Loans</a></li>
									<li><a href="approved_loans" class="">Approved Loans</a></li>
									<li><a href="paid_loans" class="">Paid Loans</a></li>
								</ul>
							</div>
						</li>
						<li><a href="savings" class=""><i class="lnr lnr-file-empty"></i> <span>Savings</span></a></li>
						<li><a href="insurance" class=""><i class="lnr lnr-file-empty"></i> <span>Insurance</span></a></li>
						<li><a href="account_inquiry" class=""><i class="lnr lnr-user"></i> <span>Account Inquiry</span></a></li>
						<li><a href="payment" class=""><i class="lnr lnr-diamond"></i> <span>Payment</span></a></li>
						<li><a href="resignation" class=""><i class="lnr lnr-select"></i> <span>Resignation</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- Registration Form -->
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title"><strong>REGISTRATION</strong></h3>
							<p class="panel-subtitle">* means required. Please fill all the required details</p>
						</div>
						<div class="panel-body">
						<?php echo form_open('admin/resignation'); ?>
							<h4><strong>Member ID: </strong><?php echo $currAccId ?></h4>
							<label for="mem-fname">First Name:</label>
							<input type="text" class="form-control" name="mem_fname" id="mem-fname" placeholder="First Name">
							<br>
							<label for="mem-mname">Middle Name:</label>
							<input type="text" class="form-control" name="mem_mname" id="mem-mname" placeholder="Middle Name">
							<br>
							<label for="mem-lname">Last Name:</label>
							<input type="text" class="form-control" name="mem_lname" id="mem-lname" placeholder="Last Name">
							<br>
							<label for="mem-username">Username:</label>
							<input type="text" class="form-control" name="mem_username" id="mem-username" placeholder="Username">
							<br>
							<label for="mem-password">Password:</label>
							<input type="password" class="form-control" id="mem-password" placeholder="Password">
							<br>
							<label for="mem-type">Member Type:</label>
							<select class="form-control" id="mem-type">
								<option value="O">Jeepney Operator</option>
								<option value="D">Jeepney Driver</option>
							</select>
							<br>
							<label for="mem-gender">Gender</label>
							<select class="form-control" id="mem-gender">
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							</select>
							<br>
							<label for="mem-birthday">Birthday:</label>
							<input type="text" class="form-control" id="mem-birthday" placeholder="Birthday">
							<br>
							<label for="mem-drivers-license">Driver's License:</label>
							<input type="text" class="form-control" id="mem-drivers-license" placeholder="Driver's License">
							<br>
							<label for="mem-address">Address:</label>
							<input type="text" class="form-control" id="mem-address" placeholder="Address">
							<br>
							<label for="mem-civil-status">Civil Status:</label>
							<select class="form-control" id="mem-civil-status">
								<option value="">Single</option>
								<option value="">Married</option>
								<option value="">Divorced</option>
							</select>
							<br>
							<label for="mem-educ">Educational Attainment:</label>
							<select class="form-control" id="mem-educ">
								<option value="">College</option>
								<option value="">High School</option>
								<option value="">Elementary</option>
								<option value="">None</option>
							</select>
							<br>
							<label for="mem-height">Height:</label>
							<input type="text" class="form-control" id="mem-height" placeholder="Height">
							<br>
							<label for="mem-weight">Weight:</label>
							<input type="text" class="form-control" id="mem-weight" placeholder="Weight">
							<br>
							<label for="mem-sss">SSS No:</label>
							<input type="text" class="form-control" id="mem-sss" placeholder="SSS No.">
							<br>
							<label for="mem-gsis">GSIS No:</label>
							<input type="text" class="form-control" id="mem-gsis" placeholder="GSIS No.">
							<br>
							<label for="mem-pagibig">Pagibig No:</label>
							<input type="text" class="form-control" id="mem-pagibig" placeholder="Pagibig">
							<br>
							<label for="mem-tel">Telephone No:</label>
							<input type="text" class="form-control" id="mem-tel" placeholder="Telephone No">
							<br>

							<h4><strong>Dependents</strong></h4>
							<table class="table">
								<thead>
									<tr>
										<th>Name of Dependents</th>
										<th>Date of Birth</th>
										<th>Relation</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<input type="text" class="form-control" id="rel-name" placeholder="Name">
										</td>
										<td>
											<input type="text" class="form-control" id="rel-birthdate" placeholder="Birthdate">
										</td>
										<td>
											<input type="text" class="form-control" id="rel-relation" placeholder="Relation">
										</td>
									</tr>
									<tr>
										<td>
											<input type="text" class="form-control" id="rel-name" placeholder="Name">
										</td>
										<td>
											<input type="text" class="form-control" id="rel-birthdate" placeholder="Birthdate">
										</td>
										<td>
											<input type="text" class="form-control" id="rel-relation" placeholder="Relation">
										</td>
									</tr>
									<tr>
										<td>
											<input type="text" class="form-control" id="rel-name" placeholder="Name">
										</td>
										<td>
											<input type="text" class="form-control" id="rel-birthdate" placeholder="Birthdate">
										</td>
										<td>
											<input type="text" class="form-control" id="rel-relation" placeholder="Relation">
										</td>
									</tr>
								</tbody>
							</table>

							<div class="row">
								<div class="col-md-6">
										<input type="submit" class="btn btn-primary btn-block" value="Register" />
									<?php echo form_close(); ?>
								</div>
								<div class="col-md-6">
									<?php echo form_open('admin/dashboard'); ?>
										<input type="submit" class="btn btn-danger btn-block" value="Cancel" />
									<?php echo form_close(); ?>
								</div>
							</div>
						</div>
					</div>
					<!-- END Registration Form -->
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		
