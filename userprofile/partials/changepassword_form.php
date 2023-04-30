<div class="container bg-info mt-5 p-4 col-md-6 mx-md-auto" style="border-radius: 25px;">
<h1 class='text-center m-auto'>Đặt lại mật khẩu</h1>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" accept-charset="utf-8">
	<div class="mb-3 mt-3">
		<label for="old_password" class="form-label">Xác minh</label>

		<input class="form-control" type="password" id="old_password" name="old_password" value="" placeholder="Nhập mật khẩu cũ">
	</div>
	<div class="mb-3">
		<label for="password" class="form-label">Mật khẩu mới</label>

		<input class="form-control" type="password" id="password" name="password" value="" placeholder="Enter password">
	</div>

	<div class="mb-3">
		<label for="password_retype" class="form-label">Nhập lại mật khẩu mới</label>

		<input class="form-control" type="password" id="password_retype" name="password_retype" value="" placeholder="Enter password">
	</div>

	<div class="mb-3">
		<button class="btn btn-primary">Submit</button>
	</div>
</form>
</div>