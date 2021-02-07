<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Excel Export Management</title>
	<link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}">
</head>
<body>

	<div class="container">
	    <div class="row">
			<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
				  <div class="container-fluid">
				    <a class="navbar-brand" href="{{ route('welcome') }}" style="font-weight: 700">Excel Upload App</a>
				    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				      <span class="navbar-toggler-icon"></span>
				    </button>
				    <div class="collapse navbar-collapse" id="navbarSupportedContent">
				      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
				        <li class="nav-item">
				          <a class="nav-link active" aria-current="page" href="{{ route('welcome') }}">Instructions</a>
				        </li>
				        <li class="nav-item">
				          <a class="nav-link" href="{{ route('export_page') }}">Upload an Excel Doc</a>
				        </li>
				        <li class="nav-item">
				        	 <a href="/download" class="nav-link"><i class="icon-download-alt"> </i> Download Sample Template </a>
				        </li>
				      </ul>
				    </div>
				  </div>
			</nav>
			<div class="container">
				@yield('content')
			</div>
		</div>	
	</div>
	
	<script src="{{ asset('asset/js/bootstrap.min.js') }}" type="text/javascript" charset="utf-8"></script>
</body>
</html>