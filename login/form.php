</div>
	</header>
	<div class="container">
		<div class="row">
			<div class="col">
				<form action="login/login.php" method="POST">

					<div class="mb-3 form_item">
						<label for="exampleInputEmail1" class="form-label">E-mail: </label>
						<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
						
					</div>
					<div class="mb-3 form_item">
						<label for="exampleInputPassword1" class="form-label">Password: </label>
						<input type="password" class="form-control" id="exampleInputPassword1" name="password">
					</div>
					<?php
					if(isset($_GET['status'])){

						$status = jsonConvertArray($_GET['status']);
						$class = status_request($status['code']);
						echo    '<div class="alert '.$class.' alert-dismissible fade show" role="alert">
								  '.$status['msg'].'
								  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>';
					}
					?>
					<button type="submit" class="btn btn-primary">Войти</button>
				</form>
			</div>