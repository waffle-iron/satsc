<?php
        function connectDB($servername,$username,$password,$dbname)
        {
            $conn = mysqli_connect($servername,$username,$password,$dbname);
            if(!$conn)
            {
                die("Connection failed: " . mysqli_connect_error());
            }
            return $conn;
        }
        function test_input($data) 
        {
			  $data = trim($data);
			  $data = stripslashes($data);
			  $data = htmlspecialchars($data);
			  return $data;
		}
        function isAlphabet($data)
        {
            if(!preg_match("/^[a-zA-Z]*$/", $data))
                return false;
            else
                return true;
        }
        function isAplhaNumeric($data)
        {
            if(!preg_match("/^[a-zA-Z0-9]*$/", $data))
                return false;
            else
                return true;
        }
        function isNumeric($data)
        {
            if(!preg_match("/^[0-9]*$/", $data))
                return false;
            else
                return true;
        }
        function memberList()
        {
            $conn = connectDB('localhost','root','mackie15','satsc');
            $sql = "select
                        member_id,
                        last_name,
                        first_name,
                        active,
                        case
                            when member_type = 'O' then 'Jeepney Operator'
                            when member_type = 'D' then 'Jeepney Driver'
                        end as 'member_type'
                    from satsc.member;";
            $result = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_assoc($result))
            {
                echo '<tr>
                        <td><a href="#">'.$row['member_id'].'</a></td>
                        <td>'.$row['last_name'].'</td>
                        <td>'.$row['first_name'].'</td>
                        <td>'.$row['member_type'].'</td>';
                if($row['active'] == 1)
                {
                    echo '<td><span class="label label-success">Active</span></td>';
                }
                else
                {
                    echo '<td><span class="label label-danger">Inactive</span></td>';
                }
                echo '</tr>';
            }
        }
        function pendingLoan()
        {
            $conn = connectDB('localhost','root','mackie15','satsc');
            echo "<table><tr><th>Member ID</th><th>Name</th><th>Loan Amount</th><th>Loan Date</th><th>Payment Method</th><th>Purpose</th><th></th></tr>";
            $sql = "select cm.member_id as 'Member ID'
                            , concat(cm.last_name, concat(', ',concat(cm.first_name,concat(' ',cm.middle_name)))) as 'Member Name'
                            , lh.amount as 'Loan Amount'
                            , lh.year ||'-'|| lh.month ||'-'|| lh.day as 'Loan Date' 
                            , lh.payment_method as 'Payment Method' 
                            , lh.purpose as 'Purpose'
                     from satsc.request_loan_header lh
                     inner join satsc.member cm
                     on cm.member_id = lh.member_id
                     where lh.status like 'O';";
            $result = mysqli_query($conn,$sql);
            $no = 1;
            echo "<form method='POST'>";
            $mem_array = Array();
            while($row = mysqli_fetch_assoc($result))
            {
                $mem_array[] = $row['Member ID'];
                echo "<tr><td name='mem_id".$no."'>".$row['Member ID']."</td><td>".$row['Member Name']."</td><td>".$row['Loan Amount']."</td><td>".$row['Loan Date']."</td>
                    <td>".$row['Payment Method']."</td><td>".$row['Purpose']."</td>
                    <td><input type='submit' name='btnApprove".$no."' id='btnApprove".$no."' value='APPROVE'><input type='submit' name='btnApprove".$no."' id='btnDecline".$no."' value='DECLINE'></tr>";
                $no = $no + 1;
            }
            echo "</form>";
            $no = 1;
            if(isset($_POST['btnApprove'.$no.'']))
            {
                $sql = "update satsc.request_loan_header set status = 'C' where member_id = '".$mem_array[0]."';";
                mysqli_query($conn,$sql);
                echo '<script lang="text/javascript">window.location.href = "Pending-Loan.php";</script>';
            }
        }

