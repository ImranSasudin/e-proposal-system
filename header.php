
        <nav id="sidebar">
            <div id="dismiss">
                <i class="fas fa-arrow-left"></i>
            </div>

            <div class="sidebar-header text-center">
                <br/><h3>UiTM Proposal System</h3>
            </div>

            <ul class="list-unstyled components">
                <li>
					<?php if(isset($_SESSION['admin_id'])) { ?>
                	<a href="index.php">Home</a>
                	<?php } elseif(isset($_SESSION['user_id'])) { ?>
                	<a href="index.php">Home</a>
                	<?php } ?>
					
					<?php if(isset($_SESSION['admin_id'])) { ?>
                	 <a href="#proposalMenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Proposal</a>
                    <ul class="collapse list-unstyled" id="proposalMenu">
                        <li>
                            <a href="viewProposalList.php">View All Proposal</a>
                        </li>
                        <li>
                            <a href="viewMonthlyProposal.php">View Monthly Proposal</a>
                        </li>
						 <li>
                            <a href="viewSemesterProposal.php">View Proposal By Semester</a>
                        </li>
          
                    </ul>
                	<?php } ?>
					
					<?php if(isset($_SESSION['user_id'])) { ?>
                	 <a href="#proposalMenuStudent" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Proposal</a>
                    <ul class="collapse list-unstyled" id="proposalMenuStudent">
                        <li>
                            <a href="insertProposal.php">Insert Proposal</a>
                        </li>
                        <li>
                            <a href="viewUserProposal.php?id=<?php echo $_SESSION['user_id']?>">View Proposal</a>
                        </li>          
                    </ul>
                	<?php } ?>
					
                    
                </li>  
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="logout.php" class="download" onclick="return confirm('Are you sure you want to logout?');">Logout</a>
                </li>
               <!--  <li>
                    <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a>
                </li> -->
            </ul>
        </nav>