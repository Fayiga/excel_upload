@extends('layouts.header')

{{-- title section --}}
@section('title')
    Excel Export
@endsection

{{-- body section --}}
@section('content')
    <div style="padding: 50px; margin-top: 40px; background: #e3f2fd">
	    <div class="col-md-8 col-md-offset-2">
	    	<h3>Upload Sample Data </h3><hr>
	    		<div class="col-auto pull-right">
			       <a href="/download" class="btn btn-success mb-3 pull-right"><i class="icon-download-alt"> </i> Download Sample Template </a>
		       </div><div class="clearfix"></div>
	    	<form action="{{ route('file.upload.post') }}" class="row g-12" method="POST" enctype="multipart/form-data">
               @csrf
			  <div class="col-auto">
			    <label for="inputPassword2" class="visually-hidden">Upload document</label>
			    <input type="file" class="form-control" name="excel"  placeholder="Click to upload document" required>
			  </div>
			  <div class="col-auto">
			    <button type="submit" class="btn btn-primary mb-3">Upload document</button>
			  </div>
			</form>
	    </div>
    </div>
@endsection

