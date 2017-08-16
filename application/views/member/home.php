		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="#" class="active"><i class="lnr lnr-home"></i> <span>Home</span></a></li>
						<li><a href="loans" class=""><i class="lnr lnr-file-empty"></i> <span>Loans</span></a></li>
						<li><a href="savings" class=""><i class="lnr lnr-file-empty"></i> <span>Savings</span></a></li>
						<li><a href="insurance" class=""><i class="lnr lnr-file-empty"></i> <span>Insurance</span></a></li>
						<li><a href="capital" class=""><i class="lnr lnr-file-empty"></i> <span>Capital Contribution</span></a></li>
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
					<!-- ACCOUNT DETAILS TABLE -->
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Welcome, <strong><?php echo $_SESSION['firstname'].' '.$_SESSION['midname'].' '.$_SESSION['lastname']; ?></strong></h3>
							<br>
							<p class="panel-subtitle"><strong>Account Details</strong><br>Jeepney Operator</p>
						</div>
						<div class="panel-body">
							<div class="row">
								<!-- Account Balances -->
									<div class="metric col-md-3">
										<p>
											<span class="number"><?php echo $capital_bal; ?></span>
											<span class="title">Capital Contribution</span>
										</p>
									</div>
									<div class="metric col-md-3">
										<p>
											<span class="number"><?php echo $loan_paid-$loan_debt; ?></span>
											<span class="title">Loan Balance</span>
										</p>
									</div>
									<div class="metric col-md-3">
										<p>
											<span class="number"><?php echo $sav_bal; ?></span>
											<span class="title">Savings Balance</span>
										</p>
									</div>
									<div class="metric col-md-3">
										<p>
											<span class="number"><?php echo $insurance_bal; ?></span>
											<span class="title">Insurance Balance</span>
										</p>
									</div>
								<!-- END Account Balances -->
							</div>
							<div class="row">
								<h4><strong>Member ID: </strong><?php echo $details['account_id']; ?></h4>
									<h4><strong>Name: </strong><?php echo $details['first_name'].' '.$details['middle_name'].' '.$details['last_name']; ?></h4>
									<h4><strong>Member Type: 
										</strong>
										<?php if($details['member_type'] == 'D')
											echo 'Jeepney Driver';
										else 
											echo 'Jeepney Operator';?>
									</h4>
									<h4><strong>Gender: </strong><?php echo $details['gender']; ?></h4>
									<h4><strong>Birthdate: </strong><?php echo $details['date_of_birth']; ?></h4>
									<h4><strong>Driver's License: </strong><?php echo $details['license_no']; ?></h4>
									<h4><strong>Address: </strong><?php echo $details['present_address']; ?></h4>
									<h4><strong>Civil Status: </strong><?php echo $details['civil_status']; ?></h4>
									<h4><strong>Tel No: </strong>09084113373</h4>
									<h4><strong>Height: </strong><?php echo $details['height']; ?> cm</h4>
									<h4><strong>Weight: </strong><?php echo $details['weight']; ?> kg</h4>
									<!-- END Account Details -->
							</div>
						</div>
					</div>
					<!-- END ACCOUNT DETAILS TABLE -->
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
