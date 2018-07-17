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
			<h><center>LEMBAR PERMOHONAN</center></h4>
			<h><center>SURAT IJIN PRAKTIK PSIKOLOGI</center></h4>
			{{-- <hr size="3px"> --}}
		</div>
	</div>	
	<div class="row">
		<div class="col-md-12">
			@foreach($keluar as $bio)
			<p>
				Yth,<br>
				Ketua Himpunan Psikologi Indonesia<br>
				Wilayah Jawa Timur<br>
				d.a Fakultas Psikologi Universitas Airlangga<br>
				Jl. Dharmawangsa Dalam Selatan<br>
				Surabaya<br>
				<br>
				<b>Hal : Permohonan Surat Ijin Praktik Psikologi (SIPP)</b><br>
				<br>
				Dengan hormat,<br>
				Bersama ini kami mengajukan permohonan untuk dapat memperoleh Surat Ijin Praktik Psikologi (SIPP) sesuai dengan ketentuan yang diatur dalam<br>
				1. Anggaran Dasar Bab IX Pasal 21 tentang Jasa dan Praktik Psikologi.<br>
				2 Anggaran Rumah Tangga Bab VIII Pasal 22 Tentang Definisi dan Ijin Praktik Psikologi.<br>
				3. Ketentuan mengenai Praktik Psikologi.<br>
				<br>
				Untuk itu dapat kami sampaikan informasi sebagai berikut :<br>
				<br>
				1.Nama Lengkap & Gelar : {{ $bio->nama_lengkap }}<br>
				2.Tempat / Tanggal Lahir : {{$bio->tempat_lahir}} / {{ $bio->tanggal_lahir }}<br>
				3.Agama : {{ $bio->agama }}<br>
				4.Jenis Kelamin : {{ $bio->gender }}<br>
				5.Lulusan : <br>
				6.Tahun Masuk S1 : <br>
				7.Tahun Lulus S1 : <br>
				8.No. KTA Himpsi : <br>
				9.Alamat Rumah : {{ $bio->alamat }}<br>
				10. Psikolog diperoleh dari pendidikan :<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;( v )Sistem Paket Murni<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;( v )Sistem Kredit Semester plus pelatihan Psikoagnostika<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;( v )Program S1 plus Program Profesi Psikolog<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;( v )Program Magister Profesi Psikolog<br>
				<br>
				Permohonan untuk memperoleh SIPP ini kami perlukan dalam pelaksanaan kegiatan kami yang melakukan praktik psikologi dalam bidang :<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;( v )Psikologi Perkembangan<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;( v )Psikologi Pendidikan<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;( v )Psikologi Klinis<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;( v )Psikologi Perusahaan Industri dan Organisasi<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(___)Lainnya<br>
				<br>
				Pengalaman Praktik :<br>
				<table border="1">
					<thead>
						<th><center>Tempat Praktik</center></th>
						<th><center>Pekerjaan/Jabatan</center></th>
						<th><center>Tahun Masuk</center></th>
						<th><center>Tahun Keluar</center></th>
					</thead>
				</table>
				<br>
				Alat tes yang dikuasai :<br>
				...
				<br>
				Dapat kami sampaikan pula bahwa dalam melakukan praktik psikologi tersebut kami melakukannya<br>
				(___)Sendiri<br>
				( v )Bersama-sama dengan sejawat psikolog lainnya, yaitu<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5.<br>
				<br>
				Adapun klien kami (mayoritas) adalah :<br>
				( v )Perusahaan<br>
				( v )Instansi / Lembaga Pemerintah dan Swasta<br>
				( v )Orang Dewasa<br>
				( v )Remaja<br>
				( v )Anak-Anak<br>
				(___)Lainnya<br>
				<br>
				Kalau masih ada hal-hal yang diperlukan sehubungan dengan pengajuan permohonan untuk mendapatkan SIPP ini, kami bersedia memenuhi, sesuai dengan peraturan yang ditetapkan oleh Himpunan Psikologi Indonesia. Saya juga bersedia untuk mengikuti ujian kopetensi apabila diperlukan.<br>
				<br>
				<center>
					Surabaya, 28 Mei 2018<br>
					Hormat Kami<br>
					<br>
					<br>
					<br>
					<br>
					<hr size="3px" width="12%">
				</center>

			</p>
			@endforeach
		</div>
	</div>
</body>
</html>