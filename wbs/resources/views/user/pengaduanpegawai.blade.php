@extends('user.layouts.app')
 
@section('title', 'Page Title')

@section('content')
	<body>
		<div class="bg-blue-light">
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
					<div
						class="collapse navbar-collapse"
						id="navbarNavAltMarkup"
					>
						<div class="navbar-nav ms-auto">
							<a
								class="nav-link me-3 active"
								aria-current="page"
								href="home"
								>Beranda</a
							>
							<a class="nav-link me-3" href="#!">Informasi</a>
							<a class="nav-link" href="login">Pantau Pengaduan</a>
						</div>
					</div>
				</div>
			</nav>
			<main class="py-4">
				<div class="container">
					<h1>
						<span class="fs-3 fw-semibold">Tulis</span
						><span class="text-danger fw-bold"> PENGADUAN</span>
					</h1>
					<p class="mb-4">
						Apabila Anda mendapati adanya pelanggaran di lingkungan
						Pemerintah Kota Malang, laporkan pada Inspektorat Kota
						Malang. Laporan Anda akan ditindaklanjuti apabila sesuai
						dengan syarat/kriteria Laporan. Anda tidak perlu
						khawatir terungkapnya identitas diri anda karena
						Inspektorat Kota Malang akan
						<span class="text-danger"
							>MERAHASIAKAN & MELINDUNGI</span
						>
						Identitas Anda sebagai whistleblower. Kami sangat
						menghargai informasi yang Anda laporkan. Fokus kami
						kepada materi informasi yang Anda Laporkan. Sebagai
						bentuk terimakasih kami terhadap laporan yang Anda
						kirim, kami berkomitmen untuk merespon laporan Anda
						selambat-lambatnya 15 (Lima Belas) hari kerja sejak
						laporan Anda dikirim.
					</p>
				</div>
				<div class="p-5">
					<div class="container rounded-4 p-4 bg-white">
						<div class="mb-3 d-flex gap-3 flex-wrap">
							<div
								class="d-flex justify-content-center align-items-start"
							>
								<h3 class="display-5 fw-semibold m-0">1</h3>
							</div>
							<div class="col-10">
								<h3 class="card-title">
									Buat <span class="text-danger">Akun</span>
								</h3>
								<p class="card-text">
									Buat akun untuk memantau pengaduan Anda.
									Jika Anda sudah pernah membuat akun,
									silahkan
									<span
										><a
											href="login"
											class="text-black fw-semibold"
											>Login Disini</a
										></span
									>
									sebelum membuat pengaduan baru.
								</p>
								<div class="mb-3 row">
									<label
										for="username"
										class="col-sm-3 col-form-label fs-sm d-flex align-items-center"
										>Username</label
									>
									<div class="col-sm-9">
										<input
											type="text"
											class="form-control bg-gray-1 py-3"
											id="username"
											placeholder="Username"
										/>
									</div>
								</div>
								<div class="mb-3 row">
									<label
										for="password"
										class="col-sm-3 col-form-label fs-sm d-flex align-items-center"
										>Password</label
									>
									<div class="col-sm-9">
										<input
											type="password"
											class="form-control bg-gray-1 py-3"
											id="password"
											placeholder="Password"
										/>
									</div>
								</div>
								<div class="mb-3 row">
									<label
										for="password_confirmation"
										class="col-sm-3 col-form-label fs-sm d-flex align-items-center"
										>Konfirmasi Password</label
									>
									<div class="col-sm-9">
										<input
											type="password"
											class="form-control bg-gray-1 py-3"
											id="password_confirmation"
											placeholder="Ketik Ulang Password"
										/>
									</div>
								</div>
							</div>
						</div>
						<div class="mb-3 d-flex gap-3 flex-wrap">
							<div
								class="d-flex justify-content-center align-items-start"
							>
								<h3 class="display-5 fw-semibold m-0">2</h3>
							</div>
							<div class="col-10">
								<h3 class="card-title">
									Lengkapi
									<span class="text-danger"
										>Identitas Anda</span
									>
								</h3>
								<p class="card-text">
									Lengkapi identitas diri Anda untuk
									mempermudah Tim Whistleblowing System
									melakukan verifikasi data atas pengaduan
									Anda. Pengaduan dengan identitas pelapor
									yang tidak jelas tidak dapat
									ditindaklanjuti.
								</p>
								<div class="mb-3 row">
									<label
										for="nama_lengkap"
										class="col-sm-3 col-form-label fs-sm d-flex align-items-center"
										>Nama Lengkap</label
									>
									<div class="col-sm-9">
										<input
											type="text"
											class="form-control bg-gray-1 py-3"
											id="nama_lengkap"
											placeholder="Nama Lengkap"
										/>
									</div>
								</div>
								<div class="mb-3 row">
									<label
										for="nik"
										class="col-sm-3 col-form-label fs-sm d-flex align-items-center"
										>NIP</label
									>
									<div class="col-sm-9">
										<input
											type="text"
											class="form-control bg-gray-1 py-3"
											id="nik"
											placeholder="Masukkan NIP anda"
										/>
									</div>
								</div>
								<div class="mb-3 row">
									<label
										for="email"
										class="col-sm-3 col-form-label fs-sm d-flex align-items-center"
										>Perangkat Daerah</label
									>
									<div class="col-sm-9">
										<input
											type="text"
											class="form-control bg-gray-1 py-3"
											id="email"
											placeholder="Masukkan perangkat daerah anda"
										/>
									</div>
								</div>
								<div class="mb-3 row">
									<label
										for="no_telp"
										class="col-sm-3 col-form-label fs-sm d-flex align-items-center"
										>No. Telp</label
									>
									<div class="col-sm-9">
										<input
											type="text"
											class="form-control bg-gray-1 py-3"
											id="no_telp"
											placeholder="No. Telp"
										/>
									</div>
								</div>
								<div class="mb-3 row">
									<label
										for="alamat_rumah"
										class="col-sm-3 col-form-label fs-sm"
										>Alamat Rumah</label
									>
									<div class="col-sm-9">
										<textarea
											class="form-control bg-gray-1 py-3"
											id="alamat_rumah"
											placeholder="Alamat Rumah"
											rows="5"
										></textarea>
									</div>
								</div>
								<div class="mb-3 row">
									<label
										for="tanda_pengenal"
										class="col-sm-3 col-form-label fs-sm d-flex align-items-center"
										>Upload SPMT/SK Jabatan Terakhir</label
									>
									<div class="col-sm-9">
										<div class="position-relative">
											<input
												type="file"
												class="custom-file-input file position-absolute"
												name="upload_file"
												id="upload_file"
												value=""
											/>
											<div
												class="input-group d-flex align-items-center gap-3"
												style="z-index: 999"
											>
												<div class="input-group-append">
													<button
														type="button"
														class="browse rounded-4 py-3 px-5 btn btn-outline-dark text-danger"
													>
														Pilih File
													</button>
												</div>
												<p class="m-0">
													**File yang diizinkan adalah
													pdf atau gambar (jpg, jpeg,
													png atau gif) dengan ukuran
													maksimal 5MB.
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="mb-3 d-flex gap-3 flex-wrap">
							<div
								class="d-flex justify-content-center align-items-start"
							>
								
							</div>
									
	</body>
	@endsection
