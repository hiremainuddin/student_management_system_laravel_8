@extends('layouts.app', ['activePage' => 'studentAdd', 'titlePage' => __('student_manage')])

@section('content')
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header card-header-primary">
						<h4 class="card-title ">Student Details Create</h4>
						<p class="card-category"> Here is a Student details  table</p>
					</div>
					<div class="card-body">
						    @if(session('success'))
						    <div class="alert alert-warning">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<i class="material-icons">close</i>
							</button>
							<span>{{ session('success') }}</span>
							 </div>
							 @endif
							<form action="{{ url('/studentRegister') }}" method="POST" class="mt-4">
								@csrf
								<div class="mb-3">
									<label for="cns" class="form-label">CNS</label>
									<input type="text" name="cns" class="form-control" id="cns" aria-describedby="cns">
									@if($errors->has('cns'))
									<small class="text-danger ml-1">{{$errors->first('cns')}}</small>
									@endif
								</div>
								<div class="mb-3">
									<label for="first_name" class="form-label">First Name</label>
									<input type="text" name="first_name" class="form-control" id="first_name">
									@if($errors->has('first_name'))
									<small class="text-danger ml-1">{{$errors->first('first_name')}}</small>
									@endif
								</div>
								<div class="mb-3">
									<label for="first_name" class="form-label">Last Name</label>
									<input type="text" name="last_name" class="form-control" id="first_name">
									@if($errors->has('last_name'))
									<small class="text-danger ml-1">{{$errors->first('last_name')}}</small>
									@endif
								</div>
								<div class="mb-3">
									<label for="age" class="form-label">Age</label>
									<input type="text" name="age" class="form-control" id="age">
									@if($errors->has('age'))
									<small class="text-danger ml-1">{{$errors->first('age')}}</small>
									@endif
								</div>
								<div class="mb-3">
									<label for="speciality" class="form-label">Specialty</label>
									<input type="text" name="speciality" class="form-control" id="first_name">
									@if($errors->has('speciality'))
									<small class="text-danger ml-1">{{$errors->first('speciality')}}</small>
									@endif
								</div>
								<button type="submit" class="btn btn-primary">Submit</button>
								<button type="reset" class="btn btn-warning">Reset</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endsection