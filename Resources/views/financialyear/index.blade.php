@extends('calendar::layouts.app')

@section('content')

<div class="container-fluid">
	<div class="content-header">
	
		<div class="row mb-2">
			<div class="col-sm-6">
				<h4 class="m-0">Financial Year</h4>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="{{ url('calendar') }}">Home</a></li>
					<li class="breadcrumb-item active">Financial Year</li>
				</ol>
			</div>
		</div>
	</div>

	<div class="content">
		<div class="row">
			<div class="col-lg-12">
				<livewire:calendar::financial-year />	
			</div>
		</div>
		  
    </div>
</div>

@endsection

