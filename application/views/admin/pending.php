<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="dashboard"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="registration" class=""><i class="lnr lnr-pencil"></i> <span>Registration</span></a></li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed active"><i class="lnr lnr-file-empty"></i> <span>Loans</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="loan_application" class="">Loan Application</a></li>
									<li><a href="#" class="active">Pending Loans</a></li>
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
					<!-- Pending Loans TABLE -->
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title"><strong>PENDING LOANS</strong></h3>
							<p class="panel-subtitle">A summary of loan applications that hasn't been approved yet.</p>
						</div>
						<div class="panel-body no-padding">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Member ID</th>
										<th>Name</th>
										<th>Loan Amount</th>
										<th>Loan Date</th>
										<th>Payment Method</th>
										<th>Purpose</th>
										<th>Voucher No</th>
										<th>Transaction</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($loan as $member): ?>
									<tr>
						                <td><a href="#"><?php echo $member['member_id']; ?></a></td>
						                <td><?php echo $member['member_name']; ?></td>
						                <td><?php echo $member['amount']; ?></td>
						                <td><?php echo $member['date']; ?></td>
						                <td><?php echo $member['method_payment']; ?></td>
						                <td><?php echo $member['purpose']; ?></td>
    									<td>
											<input type="text" class="form-control" placeholder="Voucher No">
										</td>
										<td>
											<button type="button" class="btn btn-primary btn-block">Approve</button>
										</td>
						            <tr>
						        	<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
					<!-- END Pending Loans TABLE -->
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2017 SATSC. Designed by "Theme I Need". Developed by Xenogear. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	
