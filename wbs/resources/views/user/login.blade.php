<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<title>Document</title>
		<link href="assets/css/app.css" rel="stylesheet" />
		<!-- Fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
			rel="stylesheet"
		/>
		<!-- jQuery-MultiSelect -->
		<link
			rel="stylesheet"
			href="assets/vendor/jQuery-MultiSelect/jquery.multiselect.css"
		/>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg py-4">
			<div class="container">
				<a class="navbar-brand" href="#!">
					<img
						class="mw-100"
						src="/assets/img/logo-svg.svg"
						alt=""
						title=""
						width="300"
					/>
				</a>
				<button
					class="navbar-toggler ms-auto"
					type="button"
					data-bs-toggle="collapse"
					data-bs-target="#navbarNavAltMarkup"
					aria-controls="navbarNavAltMarkup"
					aria-expanded="false"
					aria-label="Toggle navigation"
				>
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
					<div class="navbar-nav ms-auto">
						<a
							class="nav-link me-3 active"
							aria-current="page"
							href="index.html"
							>Beranda</a
						>
						<a class="nav-link me-3" href="#!">Informasi</a>
						<a class="nav-link" href="#!">Pantau Pengaduan</a>
					</div>
				</div>
			</div>
		</nav>
		<main class="py-4">
			<div class="container">
				<h1>
					<span class="fs-3 fw-semibold">Pantau</span
					><span class="text-danger fw-bold"> PENGADUAN</span>
				</h1>
				<p class="mb-4">
					Kami sangat menghargai informasi yang Anda laporkan. Fokus
					kami kepada materi informasi yang Anda Laporkan. Untuk
					memantau progress tindak lanjut atas pengaduan Anda,
					silahkan memasukkan username dan kata sandi Anda pada form
					login dibawah ini. Jika Anda belum memiliki Akun, silahkan
					<span
						><a href="#!" class="text-black fw-semibold"
							>Buat Akun dan Tulis Pengaduan.</a
						></span
					>
				</p>
			</div>
			<div class="mx-4 mx-lg-auto">
				<div
					class="container rounded-4 p-4 bg-blue-light mb-4"
					style="max-width: 800px"
				>
					<h3 class="card-title mb-4">
						LO<span class="text-danger">GIN</span>
					</h3>
					<div class="mb-3">
						<label
							for="username"
							class="form-label fs-sm fw-semibold"
							>Username</label
						>
						<input
							type="text"
							class="form-control bg-white py-3"
							id="username"
							placeholder="Username"
						/>
					</div>
					<div class="mb-3">
						<label
							for="password"
							class="form-label fs-sm fw-semibold"
							>Password</label
						>
						<input
							type="password"
							class="form-control bg-white py-3"
							id="password"
							placeholder="Password"
						/>
					</div>
					<div class="mb-3 row">
						<label
							for="kode_keamanan"
							class="col-sm-3 col-form-label fs-sm fw-semibold"
							>Kode Keamanan</label
						>
						<div class="col-sm-9">
							<div class="captcha mb-3">
								<img
									src="assets/img/captcha.png"
									alt=""
									class="mw-100 d-block"
									width="240"
								/>
							</div>
							<label for="kode_kemamanan" class="form-label"
								>Masukkan kode keamanan diatas:</label
							>
							<input
								type="text"
								class="form-control bg-white py-3"
								id="kode_kemamanan"
								placeholder="Masukkan kode keamanan (6 Karakter)"
							/>
						</div>
					</div>
				</div>
			</div>
			<div class="mx-w-fit-content mx-auto">
				<div class="d-flex justify-content-center gap-3 flex-column">
					<a
						class="btn btn-light bg-orange rounded-4 text-white border-0 py-3 px-5 fw-semibold"
						href="pantau-pengaduan.html"
						role="button"
						>LOGIN
						<img
							src="assets/img/icons/login.svg"
							alt="Send"
							class="icon d-inline-block"
					/></a>
					<a
						class="btn btn-light bg-orange rounded-4 text-white border-0 py-3 px-5 fw-semibold"
						href="lupa-password.html"
						role="button"
						>LUPA PASSWORD
						<img
							src="assets/img/icons/forgot-password.svg"
							alt="Send"
							class="icon d-inline-block"
					/></a>
				</div>
			</div>
		</main>
		<footer id="footer">
			<div class="bg-blue-light py-3">
				<div class="container">
					<p class="text-md-right m-0">
						© 2022 Pemerintah Kota Malang - All Rights Reserved
					</p>
				</div>
			</div>
		</footer>
		<script src="assets/js/app.js" type="text/javascript"></script>
		<!-- jQuery-MultiSelect -->
		<script src="assets/vendor/jQuery-MultiSelect/jquery.multiselect.js"></script>
	</body>
</html>
