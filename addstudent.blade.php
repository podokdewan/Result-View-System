@extends('layout')
@section('content')

<div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Add student</h2>
                          <form class="forms-sample" method="post" action="{{URL::to('/save_student')}}" enctype="multipart/form-data">
                          	{{csrf_field() }}
                              <div class="form-group">
                                  <label for="exampleInputEmail1">student id</label>
                                  <input type="text" class="form-control p-input" name="student_id" aria-describedby="emailHelp" placeholder="student id">
                                  
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">student name</label>
                                  <input type="text" class="form-control p-input" name="student_name" aria-describedby="emailHelp" placeholder="student name">
                                  
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Password</label>
                                  <input type="password" class="form-control p-input" name="student_password" placeholder="Password">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">student email</label>
                                  <input type="email" class="form-control p-input" name="student_email" aria-describedby="emailHelp" placeholder="student email">
                                  
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">student phone</label>
                                  <input type="text" class="form-control p-input" name="student_phone" aria-describedby="emailHelp" placeholder="student phone">
                                  
                              </div>
                              

                              <!-- <div class="form-group">
                                  <label>Upload profile pic</label>
                                  <div class="row">
                                    <div class="col-12">
                                      <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>image</label>
                                      <input type="file" class="form-control-file" id="exampleInputFile2" aria-describedby="fileHelp">
                                      
                                    </div>
                                  </div>
                              </div> -->
                              <button type="submit" class="btn btn-success">Submit</button>
                          </form>
                      </div>
                  </div>
              </div>





@endsection