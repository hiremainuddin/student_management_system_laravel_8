@extends('layouts.app', ['activePage' => 'edit_student', 'titlePage' => __('student_manage')])

@section('content')
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header card-header-primary">
						<h4 class="card-title ">Student Data Edit</h4>
						<p class="card-category"> Here is a Student Data Edit Table</p>
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
							<form action="{{ url('/update_student') }}" method="POST" class="mt-4">
								@csrf
								<input type="hidden" name="id" value="{{$find_student_data->id ?? ''}}">
								<div class="mb-3">
									<label for="cns" class="form-label">CNS</label>
									<input type="text" name="cns" value="{{$find_student_data->cns ?? ''}}" class="form-control" id="cns" aria-describedby="cns">
									@if($errors->has('cns'))
									<small class="text-danger ml-1">{{$errors->first('cns')}}</small>
									@endif
								</div>
								<div class="mb-3">
									<label for="first_name" class="form-label">First Name</label>
									<input type="text" name="first_name" value="{{$find_student_data->first_name ?? ''}}" class="form-control" id="first_name">
									@if($errors->has('first_name'))
									<small class="text-danger ml-1">{{$errors->first('first_name')}}</small>
									@endif
								</div>
								<div class="mb-3">
									<label for="first_name" class="form-label">Last Name</label>
									<input type="text" name="last_name" value="{{$find_student_data->last_name ?? ''}}" class="form-control" id="first_name">
									@if($errors->has('last_name'))
									<small class="text-danger ml-1">{{$errors->first('last_name')}}</small>
									@endif
								</div>
								<div class="mb-3">
									<label for="age" class="form-label">Age</label>
									<input type="text" name="age" value="{{$find_student_data->age ?? ''}}" class="form-control" id="age">
									@if($errors->has('age'))
									<small class="text-danger ml-1">{{$errors->first('age')}}</small>
									@endif
								</div>
								<div class="mb-3">
									<label for="speciality" class="form-label">Specialty</label>
									<input type="text" name="speciality" value="{{$find_student_data->speciality ?? ''}}" class="form-control" id="first_name">
									@if($errors->has('speciality'))
									<small class="text-danger ml-1">{{$errors->first('speciality')}}</small>
									@endif
								</div>
								<button type="submit" class="btn btn-primary">Update</button>
								<button type="reset" class="btn btn-warning">Reset</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endsection