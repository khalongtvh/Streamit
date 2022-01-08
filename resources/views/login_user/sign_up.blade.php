@extends('login_user.master')
@section('content')
<div class="col-lg-7 col-md-12 align-self-center">
   <div class="sign-user_card ">
      <div class="sign-in-page-data">
         <div class="sign-in-from w-100 m-auto">
            <form class="" action="{{route ('user.store')}}" method="POST">
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group">
                        <label>Tên</label>
                        <input name="name" type="text" class="form-control mb-0" id="exampleInputEmail2" placeholder="Enter Full Name" autocomplete="off" required>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <label>E-mail</label>
                        <input name="email" type="email" class="form-control mb-0" id="exampleInputEmail3" placeholder="Enter email" autocomplete="off" required>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <label>Password</label>
                        <input name="password" type="password" class="form-control mb-0" id="exampleInputPassword2" placeholder="Password" required>
                     </div>
                  </div>
               </div>
               <button type="submit" class="btn btn-hover my-2">Đăng Ký</button>
            </form>
         </div>
      </div>
      <div class="mt-3">
         <div class="d-flex justify-content-center links">
            Already have an account? <a href="{{route ('login_user')}}" class="text-primary ml-2">Sign In</a>
         </div>
      </div>
   </div>
</div>
@endsection