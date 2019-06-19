@extends('layouts.layout')
@section('content')
<div class="row">
	<section class="content">
		<div class="col-md-8 col-md-offset-2">
			@if (count($errors) > 0)
			<div class="alert alert-danger">
				<strong>Error!</strong> Please check fields are not empty!<br><br>
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			@if(Session::has('success'))
			<div class="alert alert-info">
				{{Session::get('success')}}
			</div>
			@endif

			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">New Book</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
						<form method="POST" action="{{ route('book.store') }}"  role="form">
							{{ csrf_field() }}
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="name" id="name" class="form-control input-sm" placeholder="Title of the book">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="author" id="author" class="form-control input-sm" placeholder="Author of the book">
									</div>
								</div>
							</div>

							<div class="form-group">
								<textarea name="category" class="form-control input-sm" placeholder="Select a category"></textarea>
							</div>

							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="published_date" id="published_date" class="form-control input-sm" placeholder="Published date">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="user" id="user" class="form-control input-sm" placeholder="User">
									</div>
								</div>
							</div>
							
                            <div class="row">

								<div class="col-xs-12 col-sm-12 col-md-12">
									<input type="submit"  value="Add" class="btn btn-success btn-block">
									<a href="{{ route('book.index') }}" class="btn btn-info btn-block" >Go back</a>
								</div>	

							</div>
						</form>
					</div>
				</div>

			</div>
		</div>
	</section>
	@endsection