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
									<li><a href="loan_application" class="">Loan Application</a></li>
									<li><a href="pending" class="">Pending Loans</a></li>
									<li><a href="approved_loans" class="">Approved Loans</a></li>
									<li><a href="paid_loans" class="">Paid Loans</a></li>
								</ul>
							</div>
						</li>
						<li><a href="#" class="active"><i class="lnr lnr-file-empty"></i> <span>Savings</span></a></li>
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
					<!-- Savings Withdrawal Form -->
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title"><strong>SAVINGS WITHDRAWAL</strong></h3>
							<p class="panel-subtitle">Please fill all the required details</p>
						</div>
						<div class="panel-body">
							<h4><strong>Date: </strong><?php echo date('Y-m-d');?></h4>
							<h4><strong>Member ID: </strong><?php echo $savings['member_id']; ?></h4>
							<label for="voucher-no">Voucher No:</label>
							<input type="text" class="form-control" id="voucher-no" placeholder="Voucher No">
							<br>
							<h4><strong>Member Name: </strong><?php echo $savings['first_name'].' '.$savings['middle_name'].' '.$savings['last_name']; ?></h4>
							<h4><strong>Savings Balance: </strong><?php echo $savings['savings_bal']?></h4>
							<br>
							<label for="withdrawal-amount">Withdrawal Amount:</label>
							<input type="text" class="form-control" id="withdrawal-amount" placeholder="Withdrawal Amount">
							<br>
							<?php echo form_open('admin/savings'); ?>
							<div class="row">
								<div class="col-md-6">
										<input type="submit" class="btn btn-primary btn-block" value="Apply" />
								</div>
								<?php echo form_close() ?>
								<div class="col-md-6">
									<?php echo form_open('admin/dashboard'); ?>
										<input type="submit" class="btn btn-danger btn-block" value="Cancel" />
									<?php echo form_close(); ?>
								</div>
							</div>
						</div>
					</div>
					<!-- END Savings Withdrawal Form -->
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		
