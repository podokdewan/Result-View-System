@extends('layout')
@section('content')

          
          <div class="row user-profile">
            <div class="col-lg-12 side-left">
              <div class="card mb-6">
                <div class="card-body avatar">
                  <h2 class="card-title">Info</h2>
                  <img src="http://via.placeholder.com/47x47" alt="">
                  <p class="name">{{$student_description_profile->student_name}}</p>
                  <p class="designation">{{$student_description_profile->student_id}}</p>
                  <a class="email" href="#">johndoe@gmail.com</a>
                  <a class="number" href="#">+1 9438 934089</a>
                </div>
              </div>
              <div class="card mb-6">
                <div class="card-body overview">
                  <ul class="achivements">
                    <li><p>34</p><p>Projects</p></li>
                    <li><p>23</p><p>Task</p></li>
                    <li><p>29</p><p>Completed</p></li>
                  </ul>
                  <div class="wrapper about-user">
                    <h2 class="card-title mt-4 mb-3">About</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam consectetur ex quod.</p>
                  </div>
                  <div class="info-links">
                    <a class="website">
                      <i class="icon-globe icon"></i>
                      <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam consectetur ex quod.</span>
                    </a>
                    <a class="social-link" >
                      <i class="icon-social-facebook icon"></i>
                      <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam consectetur ex quod.</span>
                    </a>
                    <a class="social-link" >
                      <i class="icon-social-linkedin icon"></i>
                      <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam consectetur ex quod.</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        
        @endsection