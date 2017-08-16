<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="dashboard"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="registration"><i class="lnr lnr-pencil"></i> <span>Registration</span></a></li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed active"><i class="lnr lnr-file-empty"></i> <span>Loans</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="#" class="active">Loan Application</a></li>
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
					<!-- Loan Application Form -->
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title"><strong>LOAN APPLICATION</strong></h3>
							<p class="panel-subtitle">* means required. Please fill all the required details</p>
						</div>
						<div class="panel-body">
						<?php echo form_open('admin/loan_process'); ?>
							<h4><strong>Date: </strong>2017-06-12</h4>
							<label for="mem-id">Member ID:</label>
							<input type="text" class="form-control" name="mem_id" id="mem-id" placeholder="Member ID">
							<br>
							<label for="bor-amount">Amount being borrowed:</label>
							<input type="text" class="form-control" name="bor_amount" id="bor-amount" placeholder="Amount being borrowed">
							<br>
							<label for="purpose">Purpose of Loan:</label>
							<textarea class="form-control" name="purpose" id="purpose" placeholder="Purpose of Loan" rows="4"></textarea>
							<br>
							<label for="payment-method">Payment Method:</label>
							<select class="form-control" name="payment_method" id="payment-method">
								<option value="">Daily</option>
								<option value="">Weekly</option>
								<option value="">Monthly</option>
							</select>
							<br>

							<div class="row">
								<div class="col-md-6">
										<input type="submit" class="btn btn-primary btn-block" value="Apply"/>
									<?php echo form_close(); ?>
								</div>
								<div class="col-md-6">
									<?php echo form_open('admin/dashboard'); ?>
										<input type="submit" class="btn btn-danger btn-block" value="Cancel"/>
									<?php echo form_close(); ?>
								</div>
							</div>
						</div>
					</div>
					<!-- END Loan Application Form -->
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
