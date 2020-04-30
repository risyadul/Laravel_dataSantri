<!doctype html>
<html lang="en">

<head>
	<title>Dashboard</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/linearicons/style.css')}}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/main.css')}}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('admin/assets/img/apple-icon.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('admin/assets/img/favicon.png')}}">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
        <!-- NAVBAR -->
        @include('layouts.includes._navbar')
		<!-- END NAVBAR -->
        <!-- LEFT SIDEBAR -->
        @include('layouts.includes._sidebar')
		<!-- END LEFT SIDEBAR -->
        <!-- MAIN -->
        @yield('content')
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">Shared by <i class="fa fa-love"></i><a href="https://bootstrapthemes.co">BootstrapThemes</a>
</p>
			</div>
		</footer>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Tambah Data Tadarus</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
					<form action="/create" method="POST">
						{{csrf_field()}}
						<div class="form-group">
							<input type="hidden" name="tanggal" value="<?php echo date('Y-m-d') ?>" class="form-control" placeholder="Enter email">
							<label for="waktu">Waktu</label>
							<select name="waktu" class="form-control" id="waktu">
								<option>Subuh</option>
								<option>Dzuhur</option>
								<option>Ashar</option>
								<option>Maghrib</option>
								<option>Isya</option>
							</select>
						</div>
						<div class="form-group">
						  <label for="surah">Surah</label>
						  <input name="surah" type="text" class="form-control" id="surah" placeholder="Surah">
						</div>
						<div class="form-group">
						  <label for="start_ayat">Start Ayat</label>
						  <input name="start_ayat" type="number" class="form-control" id="start_ayat" placeholder="Start Ayat">
						</div>
						<div class="form-group">
						  <label for="end_ayat">End Ayat</label>
						  <input name="end_ayat" type="number" class="form-control" id="end_ayat" placeholder="End Ayat">
						</div>
						<div class="form-group">
						  <label for="keterangan">Keterangan</label>
						  <textarea name="keterangan" class="form-control" id="keterangan" rows="3"></textarea>
						</div>
					</div>
					<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" name="submit" class="btn btn-primary">Submit</button>
					</form>
                </div>
            </div>
            </div>
    </div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="{{asset('admin/assets/vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('admin/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('admin/assets/scripts/klorofil-common.js')}}"></script>
</body>

</html>