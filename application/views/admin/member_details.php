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
						<li><a href="#" class="active"><i class="lnr lnr-user"></i> <span>Account Inquiry</span></a></li>
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
					<!-- Member Details Form -->
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title"><strong>ACCOUNT INQUIRY</strong></h3>
						</div>
						<div class="panel-body">
							<h4><strong>Member ID: </strong><?php echo $details['member_id']; ?></h4>
							<h4><strong>Name: </strong><?php echo $details['first_name'].' '.$details['middle_name'].' '.$details['last_name']; ?></h4>
							<h4><strong>Member Type: 
								</strong>
								<?php if($details['member_type'] == 'D')
										echo 'Jeepney Driver';
									else 
										echo 'Jeepney Operator';?>
							</h4>
						</div>
					</div>
					<!-- END Member Details Form -->

					<div class="row">
						<div class="col-md-6">
						<!-- Loan History -->
						<div class="panel">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Date</th>
										<th>Transaction</th>
										<th>Amount</th>
									</tr>
								</thead>
								<tbody>
								<?php foreach ($loanHistory as $loan): ?>
									<tr>
						                <td><?php echo $loan['get_date']; ?></td>
						                <td>Loan - Apply</td>
						                <td><?php echo $loan['voucher_amount']; ?></td>
						            <tr>
						            <tr>
						                <td><?php echo $loan['pay_date']; ?></td>
						                <td>Loan - Pay</td>
						                <td><?php echo $loan['or_amount']; ?></td>
						            <tr>
						        <?php endforeach; ?>
								</tbody>
							</table>
						</div>
						<!-- END Loan History -->
						</div>
						<div class="col-md-6">
						<!-- Insurance History -->
						<div class="panel">
							<table class="table table-striped">
								
								<thead>
									<tr>
										<th>Date</th>
										<th>Transaction</th>
										<th>Amount</th>
									</tr>
								</thead>
								<tbody>
								<?php foreach ($insuranceHistory as $insurance): ?>
									<tr>
						                <td><?php echo $insurance['get_date']; ?></td>
						                <td>Insurance - Apply</td>
						                <td><?php echo $insurance['voucher_amount']; ?></td>
						            <tr>
						            <tr>
						                <td><?php echo $insurance['pay_date']; ?></td>
						                <td>Insurance - Pay</td>
						                <td><?php echo $insurance['or_amount']; ?></td>
						            <tr>
						        <?php endforeach; ?>
								</tbody>
							</table>
						</div>
						<!-- END Insurance History -->
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		
