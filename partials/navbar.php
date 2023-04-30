<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
	<div class="container">
		<a class="navbar-brand h1 my-auto">11A1</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar"><span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-between" id='collapsibleNavbar'>
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="#">Lỗi vi phạm</a>
				</li>
			</ul>
			<?php if (isset($_SESSION['user'])) { $user = $_SESSION['user']; ?>
			<ul class="navbar-nav">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" role='button' data-bs-toggle='dropdown'><?php echo $user['firstname'].' '.$user['lastname']?></a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="/classweb/userprofile">Cá nhân</a></li>
   						<li><a class="dropdown-item" href="/classweb/userprofile/changepassword.php">Đổi mật khẩu</a></li>
    					<li><a class="dropdown-item" href="/classweb/logout.php">Đăng xuất</a></li>
					</ul>
				</li> 
			</ul>
			<?php } else { ?>
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="/classweb/login">Đăng nhập</a>
				</li>

				<li class="nav-item">

					<a class="nav-link" href="#">Đăng ký</a>
				</li>
			</ul>
			<?php } ?>

	</div>
</div>
</nav>