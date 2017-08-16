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
						<li><a href="insurance" class=""><i class="lnr lnr-file-empty"></i> <span>insurance</span></a></li>
						<li><a href="#" class="active"><i class="lnr lnr-file-empty"></i> <span>Insurance</span></a></li>
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
					<!-- Insurance Claim Application Form -->
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title"><strong>INSURANCE CLAIM APPLICATION</strong></h3>
							<p class="panel-subtitle">* means required. Please fill all the required details</p>
						</div>
						<div class="panel-body">
							<h4><strong>Date: </strong><?php echo date('Y-m-d');?></h4>
							<h4><strong>Member Name: </strong><?php echo $insurance['first_name'].' '.$insurance['middle_name'].' '.$insurance['last_name']; ?></h4>
							<br>
							<h4><strong>Victim</strong></h4>
							<label for="vic-fname">First Name:</label>
							<input type="text" class="form-control" id="vic-fname" placeholder="First Name">
							<br>
							<label for="vic-mname">Middle Name:</label>
							<input type="text" class="form-control" id="vic-mname" placeholder="Middle Name">
							<br>
							<label for="vic-lname">Last Name:</label>
							<input type="text" class="form-control" id="vic-lname" placeholder="Last Name">
							<br>
							<label for="vic-contact">Victim's Contact No:</label>
							<input type="text" class="form-control" id="vic-contact" placeholder="Contact No">
							<br>
							<label for="amount">Amount of Damage:</label>
							<input type="text" class="form-control" id="amount" placeholder="Amount of Damage">
							<br>

							<div class="row">
								<div class="col-md-6">
									<button type="button" class="btn btn-primary btn-block">Apply</button>
								</div>
								<div class="col-md-6">
									<button type="button" class="btn btn-danger btn-block">Cancel</button>
								</div>
							</div>
						</div>
					</div>
					<!-- END Insurance Claim Application Form -->
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
	<!-- Javascript -->
	<script src="../assets/admin/vendor/jquery/jquery.min.js"></script>
	<script src="../assets/admin/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="../assets/admin/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="../assets/admin/scripts/klorofil-common.js"></script>
</body>

</html>
