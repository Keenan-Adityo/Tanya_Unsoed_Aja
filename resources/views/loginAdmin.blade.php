<!DOCTYPE html>

<html>
<head>
<script src='https://www.google.com/recaptcha/api.js'></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://cdn.jsdelivr.net/npm/@mdi/font@5.x/css/materialdesignicons.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
<title>Login Admin | Tanya Unsoed Aja!</title>

</head>
<body>

	<div class="container">
		<div class="row justify-content-center align-item-center">
			<div class="col-lg-10 col-md-10 col-sm-12 py-md-5">
				

				<div class="row shadow ">
					<div class="col-lg-6 col-md-6 col-sm-12 card-none-color p-4 p-md-5 order-1 order-md-0">
						<div class="text-center text-md-start">
							<img src="{{ asset('images/logoUnsoed.png') }}" class="img-fluid mb-3 ml-md-4 ml-sm-5" width="60px" alt="Logo">

							<p class="mb-0">Selamat Datang , </p>
							<h4 style="font-weight: bolder;">di Login Page Admin!</h4>
							<p style="font-size: small; color: grey;"></p>
						</div>


						<form id="form1" name="form1" class=" mb-3 mt-md-3" method="post">
							@csrf
							<div class="mb-3">
								<label for="username" class="form-label"
									style="font-size: small"> Username <span
									style="color: red;">*</span>
								</label>
								<input id="username" name="username" class="form-control" tabindex="1" style="font-size: small;" placeholder="Username" type="text" value="" autocomplete="false"/>
							</div>

							<div class="form-group small">
								<label for="password" class="font-weight-bold"
									style="font-size: small">Password <span
									style="color: red;">*</span>
								</label>
								<div class="input-group mb-2 mr-sm-2">
									<input id="password" name="password" class="form-control rounded-end" tabindex="2" style="font-size: small;" placeholder="Password" type="password" value="" autocomplete="off"/>
								</div>
							</div>
							<div class="d-grid gap-2 mt-3">
								<button type="submit" class="btn btn-primary">Masuk Sebagai Admin</button>
							</div>

							<div style="position: relative; font-size: small;" class="mt-1">
								<span class="text-primary mr-auto"> <a
									href="/">Kembali</a>
							</div>
        
						</form>
						<br>
						<br>
						<p style="font-size: x-small; color: grey;" class="mb-0 mt-5">
							©2023 Aplikasi TUA</p>

                        </div>
								<div class="col-lg-6 col-md-6 col-sm-12 card-color p-4 p-md-5 order-0 order-md-1">
                        			<div class="text-center text-md-start telefon-container">
                            		<img src="{{ asset('images/telefon.png') }}" class="img-fluid" alt="Sekolah Image">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>