<div class="container bg-info mt-5 p-4 col-md-6 mx-md-auto" style="border-radius: 25px;">
<h1 class='text-center m-auto'>Đăng nhập</h1>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" accept-charset="utf-8">
	<div class="mb-3 mt-3">
		<label for="username" class="form-label">Username</label>

		<input class="form-control" type="text" id="username" name="username" value="" placeholder="Enter username">
	</div>
	<div class="mb-3">
		<label for="password" class="form-label">Password</label>

		<input class="form-control" type="password" id="password" name="password" value="" placeholder="Enter password">
	</div>
	<div class="mb-3">
		<button class="btn btn-primary">Submit</button>
	</div>
</form>
</div>