<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
	<div class="row">
		<div class="col">
			<h1>Employee Data Management</h1>
			<table id="example" class="table table-striped table-bordered" style="width:100%">
				<thead>
					<tr>
						<th>Id Karyawan</th>
						<th>Nama</th>
						<th>Alamat</th>
						<th>Telp</th>
						<th>Gender</th>
						<th>No KTP</th>
						<th>Foto KTP</th>
						<th>Foto Profile</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>KC001</th>
						<th>Angkara</th>
						<th>Jakarta</th>
						<th>123456</th>
						<th>Male</th>
						<th>1234567890</th>
						<th>fotoktp</th>
						<th>fotoprofil</th>
						<th>active</th>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
<script>
	$(document).ready(function() {
		$('#example').DataTable();
	});
</script>
<?= $this->endSection('content'); ?>