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
			<table>
				<tr>
					<td>
						<img src="/images/himpsi_jatim.png">
					</td>
					<td>
						HIMPUNAN PSIKOLOGI INDONESIA<br>
						(Indonesian Psychological Association)<br>
						Wilayah Jawa Timur<br>
						d/a Fakultas Psikologi Universitas Airlangga<br>
						Jl. Airlangga 4-6 Surabaya 60286 Telp. 031-5032770, 5014460 Faks. 031-5025910<br>
						Website: himpsijatim.org - Email: sekretariathimpsijatim@gmail.com<br>
					</td>
				</tr>
			</table>
			@endforeach
		</div>
	</div>
</body>
</html>