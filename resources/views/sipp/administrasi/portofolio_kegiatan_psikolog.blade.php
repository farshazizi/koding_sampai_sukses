<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laporan Keluar</title>
	<style type="text/css">
		table, td, th {    
		    border: 1px solid #ddd;
		    text-align: left;
		}
		table {
		    border-collapse: collapse;
		    width: 100%;
		}
		th, td {
		    padding: 10px;
		}
	</style>
</head>
<body>
	<div class="row">
		<div class="col-md-8">
			<h><center>PORTOFOLIO KEGIATAN PSIKOLOG</center></h4><br>
		</div>
	</div>	
	<div class="row">
		<div class="col-md-12">
			@foreach($keluar as $bio)
			<table border="1" style="width: 100%">
				<tr>
					<th colspan="4">I. IDENTITAS</th>
				</tr>
				<tr>
					<th colspan="4">A. Data Diri</th>
				</tr>
				<tr>
					<td colspan="4">1. Nama/Jenis Kelamin : {{ $bio->nama_lengkap }}/{{ $bio->gender }}</td>
				</tr>
				<tr>
					<td colspan="4">2. Tempat & Tanggal Lahir : {{ $bio->tempat_lahir }} & {{ $bio->tanggal_lahir }}</td>
				</tr>
				<tr>
					<td colspan="4">3. Alamat Tinggal Saat Ini : {{ $bio->alamat }}</td>
				</tr>
				<tr>
					<td colspan="4">4. Telp Rumah, HP, Fax dan Email : {{ $bio->telepon }} / {{ $bio->handphone }} / {{ $bio->email }}</td>
				</tr>
				<tr>
					<td colspan="4">5. Alamat Tempat Kerja/Kantor : ...</td>
				</tr>
				<tr>
					<th colspan="4">B. Riwayat Pendidikan</th>
				</tr>
				<tr>
					<th><center>Jenjang</center></th>
					<th><center>Nama PT</center></th>
					<th><center>Bidang Ilmu</center></th>
					<th><center>Tahun Lulus</center></th>
				</tr>
			</table>
			<br><br>
			<table border="1" style="width: 100%">
				<tr>
					<th colspan="4">C. Riwayat Praktek</th>
				</tr>
				<tr>
					<th><center>Tempat Praktik</center></th>
					<th><center>Pekerjaan/Jabatan</center></th>
					<th><center>Tahun Masuk</center></th>
					<th><center>Tahun Keluar</center></th>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</table>
			@endforeach
		</div>
	</div>
</body>
</html>