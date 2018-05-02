<html>
	<head>
		<title>Form Ubah - CRUD Codeigniter</title>
		<style>

		input[type=text]{
				width: 100%;
				padding: 12px 20px;
				margin: 8px 0;
				box-sizing: border-box;
		}

		body {
		padding-left: 100px;
		padding-right: 100px;
    border-radius: 5px;
    background-color: #f2f2f2;
}

.btn_simpan{
	background-color: #337ab7;
	color: white;
	padding: 14px 25px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
}

.btn_batal{
	background-color: #d9534f;
	color: white;
	padding: 14px 25px;
	text-align: center;
	text-decoration: none;
	/* display: inline-block; */
}
		</style>
	</head>
	<body>
		<h1>Form Ubah Data Pelanggan</h1>
		<hr>

		<!-- Menampilkan Error jika validasi tidak valid -->
		<div style="color: red;"><?php echo validation_errors(); ?></div>


		<?php echo form_open("pelanggan/ubah/".$pelanggan->KdPelanggan); ?>
			<table cellpadding="8">
				<tr>
					<td>KdPelanggan</td>
					<td><input size="90" type="text" name="input_kdpelanggan" placeholder="Harus diawali PG and 3 digit angka"value="<?php echo set_value('inplanggan', $pelanggan->KdPelanggan); ?>" readonly></td>
				</tr>
				<tr>
					<td>Nama Pertama</td>
					<td><input type="text" name="input_namapertama" placeholder="Berisi nama pertama pelanggan" value="<?php echo set_value('input_namapertama', $pelanggan->NamaPertama); ?>"></td>
				</tr>
				<tr>
					<td>Nama Terakhir</td>
					<td><input type="text" name="input_namaterakhir" placeholder="Berisi nama terakhir pelanggan" value="<?php echo set_value('input_namaterakhir', $pelanggan->NamaTerakhir); ?>"></td>
				</tr>
				<tr>
					<td>Email</td>
						<td><input type="text" name="input_email" placeholder="Berisi email pelanggan" value="<?php echo set_value('input_email', $pelanggan->Email); ?>"></td>
				</tr>
				<tr>
					<td>NoTelp</td>
						<td><input type="text" name="input_notelp" placeholder="Berisi nomor telepon pelanggan" value="<?php echo set_value('input_notelp', $pelanggan->NoTelp); ?>"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="input_alamat" placeholder="Berisi alamat pelanggan" value="<?php echo set_value('input_alamat', $pelanggan->Alamat); ?>"></td>
				</tr>
				<tr>
					<td>KodePos</td>
					<td><input type="text" name="input_kodepos" placeholder="berisi kode pos tempa tinggal pelanggan" value="<?php echo set_value('input_kodepos', $pelanggan->KodePos); ?>"></td>
				</tr>
				<tr>
					<td>Kota</td>
					<td><input type="text" name="input_kota" placeholder="berisi kota pos tempa tinggal pelanggan" value="<?php echo set_value('input_kota', $pelanggan->Kota); ?>"></td>
				</tr>
				<tr>
					<td>Username</td>
						<td><input type="text" name="input_username" placeholder="Berisi username akun pelanggan" value="<?php echo set_value('input_username', $pelanggan->Username); ?>"></td>
				</tr>
				<tr>
					<td>Password</td>
						<td><input type="text" name="input_password" placeholder="Berisi password aku pelanggan" value="<?php echo set_value('input_password', $pelanggan->Password); ?>"></td>
				</tr>
			</table>

			<hr>

			<input class="btn_simpan" type="submit" name="submit" value="Ubah">
			<a href="<?php echo base_url(); ?>">
			<input class="btn_batal" type="button" value="Batal"></a>
		<?php echo form_close(); ?>
	</body>
</html>
