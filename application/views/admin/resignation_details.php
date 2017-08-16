<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="dashboard"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="registration"><i class="lnr lnr-pencil"></i> <span>Registration</span></a></li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Loans</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="loan_application">Loan Application</a></li>
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
						<li><a href="#" class="active"><i class="lnr lnr-select"></i> <span>Resignation</span></a></li>
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
					<!-- Resignation Form -->
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title"><strong>RESIGNATION</strong></h3>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-9">
									<!-- Account Details -->
									<h4><strong>Member ID: </strong><?php echo $details['member_id']; ?></h4>
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
								<div class="col-md-3">
									<!-- Account Balances -->
									<div class="metric">
										<p>
											<span class="number">1,252</span>
											<span class="title">Capital Contribution</span>
										</p>
									</div>
									<div class="metric">
										<p>
											<span class="number">203</span>
											<span class="title">Loan Balance</span>
										</p>
									</div>
									<div class="metric">
										<p>
											<span class="number">274,678</span>
											<span class="title">Savings Balance</span>
										</p>
									</div>
									<div class="metric">
										<p>
											<span class="number">35,124</span>
											<span class="title">Insurance Balance</span>
										</p>
									</div>
								<!-- END Account Balances -->
								</div>
							</div>

							<br>
							<p class="panel-subtitle">Are you sure to delete this account?</p>
							<br>
							<div class="row">
								<div class="col-md-6">
									<form method="post">
										<input type="submit" name="Confirm" class="btn btn-primary btn-block" value="Confirm" />
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
					<!-- END Resignation Form -->
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		
