@extends('layouts.app', ['activePage' => 'student_manage', 'titlePage' => __('student_manage')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Student Management Table</h4>
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
            <div class="table-responsive">
              <table class="table">
                <thead class="text-primary">
                  <th>
                    CNS
                  </th>
                  <th>
                   First Name
                  </th>
                  <th>
                  Last Name
                  </th>
                  <th>
                    Age
                  </th>
                  <th>
                    Speciality
                  </th>
                  <th>
                    Created_at
                  </th>
                  <th>
                    Updated_at
                  </th>
                  <th>
                    Operation
                  </th>
                </thead>
                <tbody>

                  @foreach($student_data as $student)
                  <tr>
                    <td>
                      {{ $student->cns }}
                    </td>
                    <td>
                      {{ $student->first_name }}
                    </td>
                    <td>
                      {{ $student->last_name }}
                    </td>
                    <td>
                      {{ $student->age }}
                    </td>
                     <td>
                      {{ $student->speciality }}
                    </td>
                    <td>
                      {{ Carbon\carbon::parse($student->created_at)->diffForHumans() }}
                    </td>
                    <td>
                      {{ Carbon\carbon::parse($student->updated_at)->diffForHumans() }}
                    </td>
                    <td class="text-primary">
                      <a href="/edit_student/{{ $student->id }}" class="btn btn-primary">Edit</a>
                      <a href="/delete_student/{{ $student->id }}" class="btn btn-warning">Delete</a>
                    </td>
                  </tr>
                  @endforeach

                </tbody>
              </table>
              <div class="paginate">
                 {{ $student_data->links('pagination::bootstrap-4') }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection