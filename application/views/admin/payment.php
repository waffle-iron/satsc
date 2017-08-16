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
						<li><a href="savings" class=""><i class="lnr lnr-file-empty"></i> <span>Savings</span></a></li>
						<li><a href="insurance" class=""><i class="lnr lnr-file-empty"></i> <span>Insurance</span></a></li>
						<li><a href="account_inquiry" class=""><i class="lnr lnr-user"></i> <span>Account Inquiry</span></a></li>
						<li><a href="#" class="active"><i class="lnr lnr-diamond"></i> <span>Payment</span></a></li>
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
					<!-- Payment Form -->
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title"><strong>PAYMENT</strong></h3>
							<p class="panel-subtitle">Please fill all the required details</p>
						</div>
						<div class="panel-body">
							<h4><strong>Date: </strong>2017-06-12</h4>
							<label for="or-no">OR No:</label>
							<input type="text" class="form-control" id="or-no" placeholder="OR No.">
							<br>
							<label for="mem-id">Member ID:</label>
							<input type="text" class="form-control" id="mem-id" placeholder="Member ID">
							<br>

							<table class="table">
								<thead>
									<tr>
										<td>Article</td>
										<td>Amount</td>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Loans</td>
										<td>
											<input type="text" class="form-control" placeholder="Loans">
										</td>
									</tr>
									<tr>
										<td>Savings</td>
										<td>
											<input type="text" class="form-control" placeholder="Savings">
										</td>
									</tr>
									<tr>
										<td>Insurance</td>
										<td>
											<input type="text" class="form-control" placeholder="Insurance">
										</td>
									</tr>
									<tr>
										<td>Capital Contribution</td>
										<td>
											<input type="text" class="form-control" placeholder="Capital Contribution">
										</td>
									</tr>
									<tr>
										<td>Management Fee</td>
										<td>
											<input type="text" class="form-control" placeholder="Management Fee">
										</td>
									</tr>
									<tr>
										<td>Supervision Fee</td>
										<td>
											<input type="text" class="form-control" placeholder="Supervision Fee">
										</td>
									</tr>
									<tr>
										<td>Others</td>
										<td>
											<input type="text" class="form-control" placeholder="Others">
										</td>
									</tr>	
								</tbody>
							</table>

							<div class="row">
								<div class="col-md-6">
									<button type="button" class="btn btn-primary btn-block">Confirm</button>
								</div>
								<div class="col-md-6">
									<button type="button" class="btn btn-danger btn-block">Cancel</button>
								</div>
							</div>
						</div>
					</div>
					<!-- END Payment Form -->
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		
