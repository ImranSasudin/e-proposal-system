<nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Menu</span>
                    </button>
					<?php if(isset($_SESSION['admin_id'])){ ?>
                    <a class="text-uppercase">Welcome Admin</a>
					<?php } else{ ?>
					<a class="text-uppercase">Welcome Student</a>
					<?php } ?>
                </div>
</nav>
