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
								<h3 class="display-5 fw-semibold m-0">3</h3>
							</div>
							<div class="col-10">
								<h3 class="card-title">
									Detail
									<span class="text-danger">Pengaduan</span>
								</h3>
								<p class="card-text">
									Lengkapi seluruh form berikut. Sampaikan
									laporan Anda secara detail dan jelas.
								</p>
								<div class="mb-3 row">
									<label
										for="nama_terlapor"
										class="col-sm-3 col-form-label fs-sm d-flex align-items-center"
										>Nama dilaporkan</label
									>
									<div class="col-sm-9">
										<input
											type="text"
											class="form-control bg-gray-1 py-3"
											id="nama_terlapor"
											placeholder="Nama Pihak yang terlapor"
										/>
									</div>
								</div>
								<div class="mb-3 row">
									<label
										for="jabatan"
										class="col-sm-3 col-form-label fs-sm d-flex align-items-center"
										>Jabatan</label
									>
									<div class="col-sm-9">
										<input
											type="text"
											class="form-control bg-gray-1 py-3"
											id="jabatan"
											placeholder="Jabatan Pihak yang terlapor"
										/>
									</div>
								</div>
								<div class="mb-3 row">
									<label
										for="perangkat_daerah"
										class="col-sm-3 col-form-label fs-sm d-flex align-items-center"
										>Perangkat Daerah</label
									>
									<div class="col-sm-9">
										<select
											name="perangkat_daerah[]"
											multiple="multiple"
											id="perangkat_daerah"
											class="form-control form-select bg-gray-1 py-3"
										>
											<option value="Sekretariat DPRD">
												Sekretariat DPRD
											</option>
											<option value="Inspektorat">
												Inspektorat
											</option>
											<option
												value="Badan Pengelolaan Keuangan dan Pajak Daerah"
											>
												Badan Pengelolaan Keuangan dan
												Pajak Daerah
											</option>
										</select>
									</div>
								</div>
								<div class="mb-3 row">
									<label
										for="tempat"
										class="col-sm-3 col-form-label fs-sm d-flex align-items-center"
										>Tempat</label
									>
									<div class="col-sm-9">
										<input
											type="text"
											class="form-control bg-gray-1 py-3"
											id="tempat"
											placeholder="Tempat kejadian"
										/>
									</div>
								</div>
								<div class="mb-3 row">
									<label
										for="tanggal"
										class="col-sm-3 col-form-label fs-sm d-flex align-items-center"
										>Tanggal</label
									>
									<div class="col-sm-9">
										<input
											type="text"
											class="form-control bg-gray-1 py-3"
											id="tanggal"
											placeholder="Tanggal kejadian"
										/>
									</div>
								</div>
								<div class="mb-3 row">
									<label
										for="detail_kejadian"
										class="col-sm-3 col-form-label fs-sm"
										>Kejadian</label
									>
									<div class="col-sm-9">
										<textarea
											class="form-control bg-gray-1 py-3"
											id="detail_kejadian"
											placeholder="Detail kejadian yang dilaporkan"
											rows="5"
										></textarea>
									</div>
								</div>
								<div class="mb-3 row">
									<label
										for="tanda_pengenal"
										class="col-sm-3 col-form-label fs-sm d-flex align-items-center"
										>Bukti Pendukung</label
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
														class="browse rounded-4 py-3 px-5 btn btn-outline-light border border-1 border-dark text-danger"
													>
														Pilih File
													</button>
												</div>
												<div class="d-flex gap-3">
													<button
														type="button"
														class="btn btn-success text-black py-2 d-flex align-items-center"
													>
														+ Tambah
													</button>
													<button
														type="button"
														class="btn btn-danger text-black py-2 d-flex align-items-center"
													>
														<img
															src="assets/img/icons/trash.svg"
															alt="Trash"
															class="icon"
														/>
														Hapus
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="mb-3 row">
									<label
										for="kode_keamanan"
										class="col-sm-3 col-form-label fs-sm"
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
										<label
											for="kode_kemamanan"
											class="form-label"
											>Masukkan kode keamanan
											diatas:</label
										>
										<input
											type="text"
											class="form-control bg-gray-1 py-3"
											id="kode_kemamanan"
											placeholder="Masukkan kode keamanan (6 Karakter)"
										/>
									</div>
								</div>
							</div>
						</div>
						<div class="d-flex justify-content-center">
							<div class="col-md-6 d-flex justify-content-center">
								<a
									class="btn btn-light bg-orange rounded-4 text-white border-0 py-3 px-5 fw-semibold"
									href="pengaduan-sebagai-masyarakat.html"
									role="button"
									data-bs-toggle="modal"
									data-bs-target="#modalSubmitPengaduan"
									>KIRIM PENGADUAN
									<img
										src="assets/img/icons/plane.svg"
										alt="Send"
										class="icon d-inline-block"
								/></a>
							</div>
						</div>
					</div>
				</div>
			</main>
			<footer id="footer">
				<div class="py-5">
					<div
						class="container custom-border border-purple p-4 rounded-3"
					>
						<div
							class="footer-widget d-flex flex-wrap justify-content-between gap-3"
						>
							<div class="col-lg-3">
								<a
									href="#!"
									class="brand-image brand-link bg-transparent border-bottom"
								>
									<img
										class="mw-100"
										src="/assets/img/logo-svg.svg"
										alt=""
										title=""
										width="350"
									/>
								</a>
								<p class="text-secondary word-break">
									Sistem pelaporan pelanggaran yang
									memungkinkan setiap pegawai untuk melaporkan
									adanya Pelanggaran yang kerahasiaan
									identitas Pelapor dijamin serta diberikan
									perlindungan oleh pimpinan Kementerian
									Komunikasi dan Informatika.
								</p>
							</div>
							<div class="col-lg-3 py-3">
								<h4 class="m-0">Data Pendukung</h4>
								<div class="navbar flex-wrap px-0">
									<ul class="navbar-nav">
										<li class="nav-item">
											<a class="nav-link p-0" href="#!"
												>Peraturan Walikota Malang</a
											>
										</li>
										<li class="nav-item">
											<a class="nav-link p-0" href="#!"
												>Tugas & Fungsi Inspektorat</a
											>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-lg-4 py-3">
								<h4 class="m-0">Hubungi Kami</h4>
								<p class="text-secondary word-break">
									Hubungi kami apabila anda membutuhkan
									bantuan lebih lanjut tentang Whistlebowling
								</p>
								<ul class="list-unstyled">
									<li class="mb-1 d-flex gap-3 flex-wrap">
										<div>
											<img
												src="assets/img/icons/home.svg"
												alt="Home"
												class="icon"
											/>
										</div>
										<div class="col-10">
											<p class="m-0">
												Inspektorat Kota Malang
											</p>
											<address
												class="m-0 text-secondary word-break"
											>
												Jl. Gajahmada No.2A, Kiduldalem,
												Kec. Klojen, Kota Malang, Jawa
												Timur 65119
											</address>
										</div>
									</li>
									<li class="mb-1 d-flex gap-3 flex-wrap">
										<div>
											<img
												src="assets/img/icons/mail.svg"
												alt="Home"
												class="icon"
											/>
										</div>
										<div class="col-10">
											<p class="m-0">Email</p>
											<span
												class="m-0 text-secondary word-break"
											>
												whistleblower.inspektorat@malangkota.go.id
											</span>
										</div>
									</li>
									<li class="mb-1 d-flex gap-3 flex-wrap">
										<div>
											<img
												src="assets/img/icons/phone.svg"
												alt="Home"
												class="icon"
											/>
										</div>
										<div class="col-10">
											<p class="m-0">No. Telp</p>
											<span
												class="m-0 text-secondary word-break"
											>
												0341364450
											</span>
										</div>
									</li>
									<li class="mb-1 d-flex gap-3 flex-wrap">
										<div>
											<img
												src="assets/img/icons/web.svg"
												alt="Home"
												class="icon"
											/>
										</div>
										<div class="col-10">
											<p class="m-0">Website</p>
											<span
												class="m-0 text-secondary word-break"
											>
												whistleblower.inspektoratmalangkota.go.id
											</span>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="bg-body py-3">
					<div class="container">
						<p class="text-md-right m-0">
							© 2022 Pemerintah Kota Malang - All Rights Reserved
						</p>
					</div>
				</div>
			</footer>
		</div>
		<div
			class="modal fade"
			id="modalSubmitPengaduan"
			tabindex="-1"
			aria-labelledby="exampleModalLabel"
			aria-hidden="true"
		>
			<div
				class="modal-dialog modal-dialog-centered"
				style="max-width: 800px"
			>
				<div
					class="modal-content bg-white"
					style="background: url(assets/img/shapes/bg-gradient.svg)"
				>
					<div class="modal-header border-0">
						<button
							type="button"
							class="btn-close shadow-none bg-img-none p-0 pe-4"
							data-bs-dismiss="modal"
							aria-label="Close"
						>
							<img
								class="mw-100"
								src="/assets/img/icons/close.svg"
								alt=""
								title=""
							/>
						</button>
					</div>
					<div class="modal-body py-4 px-5">
						<div class="d-flex justify-content-center flex-column">
							<img
								src="assets/img/logo-diskominfo.svg"
								alt=""
								class="d-block mx-auto mw-100 mb-4"
							/>
							<p class="text-primary text-center">
								Pengaduan anda sedang diajukan, silahkan pantau
								perkembangan pengaduan anda di bagian pantau
								pengaduan
							</p>
						</div>
						<div class="text-center">
							<a
								class="btn btn-outline-primary py-2 px-5 d-inline-block"
								href="pengaduanpegawai"
								role="button"
								>Ok</a
							>
						</div>
					</div>
				</div>
			</div>
		</div>
		<style>
			.file {
				visibility: hidden;
				position: absolute;
			}
		</style>
		<script src="assets/js/app.js" type="text/javascript"></script>
		<!-- jQuery-MultiSelect -->
		<script src="assets/vendor/jQuery-MultiSelect/jquery.multiselect.js"></script>
		<script>
			$("select[multiple]#perangkat_daerah").multiselect({
				search: true,
				texts: {
					placeholder: "Perangkat Daerah yang terlapor",
					search: "Ketik nama Perangkat Daerah disini ...",
				},
			});
		</script>
	</body>
</html>
