		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="#" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="registration" class=""><i class="lnr lnr-pencil"></i> <span>Registration</span></a></li>
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
					<!-- MEMBERS TABLE -->
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Welcome, <strong><?php echo $_SESSION['firstname'].' '.$_SESSION['midname'].' '.$_SESSION['lastname']; ?></strong></h3>
							<br>
							<p class="panel-subtitle"><strong>SATSC MEMBERS</strong><br>Jeepney Operators and Jeepney Drivers</p>
						</div>
						<div class="panel-body no-padding">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Member ID</th>
										<th>Last Name</th>
										<th>First Name</th>
										<th>Member Type</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($members as $member): ?>
									<tr>
						                <td><a href="#"><?php echo $member['account_id']; ?></a></td>
						                <td><?php echo $member['last_name']; ?></td>
						                <td><?php echo $member['first_name']; ?></td>
						                <td><?php echo $member['member_type']; ?></td>
						                <td><?php
						                	if($member['active'] == 1)
							                {
							                    echo '<span class="label label-success">Active</span>';
							                }
							                else
							                {
							                    echo '<span class="label label-danger">Inactive</span>';
							                } ?>
							            </td>
						            <tr>
						        	<?php endforeach; ?>
								</tbody>
							</table>
						</div>
						<div class="panel-footer">
							<div class="row">
								<div class="col-md-6"><span class="panel-note"><i class="fa fa-clock-o"></i> Last Updated 24 hours</span></div>
								<div class="col-md-6 text-right"><a href="#" class="btn btn-primary">View All Members</a></div>
							</div>
						</div>
					</div>
					<!-- END MEMBERS TABLE -->
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		
