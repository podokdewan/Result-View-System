@extends('layout')
@section('content')


          <div class="card">
            <div class="card-body">
              <h2 class="card-title">Data table</h2>
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                          <th>student id</th>
                          <th>student name</th>
                          <th>email</th>
                          <th>phone num</th>
                          <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($all_student_info as $v_student)
                      <tr>
                          <td>{{$v_student->student_id}}</td>
                          <td>{{$v_student->student_name}}</td>
                          <td>{{$v_student->student_email}}</td>
                          <td>{{$v_student->student_phone}}</td>
                          
                          <td>
                            <a href="{{URL::to('/student_view/'.$v_student->student_id)}}"><button class="btn btn-outline-primary">View</button></a>

                            <a href="{{URL::to('/student_edit/'.$v_student->student_id)}}"><button class="btn btn-outline-warning">edit</button></a>
                            
                            {{--<button class="btn btn-outline-danger">delete</button>--}}
                              <form id="delete-form-{{ $v_student->student_id }}" action="{{ route('student.destroy', $v_student->student_id) }}" method="post">
                                  @csrf
                                  @method('DELETE')
                              </form>
                              <a href="" class="btn btn-outline-danger" onclick="
                                      if (confirm('Are you sure, you want to delete this Student?')) {
                                      event.preventDefault();
                                      document.getElementById('delete-form-{{ $v_student->student_id }}').submit();
                                      }   else {
                                      event.preventDefault();
                                      }
                                      ">{{--<span class="glyphicon glyphicon-trash"></span>--}}Delete</a>
                          </td>
                      </tr>
                     @endforeach 
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        




@endsection