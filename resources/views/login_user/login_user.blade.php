@extends('login_user.master')
@section('content')
<div class="col-lg-5 col-md-12 align-self-center">
   <div class="sign-user_card ">
      <div class="sign-in-page-data">
         <div class="sign-in-from w-100 m-auto">
            <h3 class="mb-3 text-center">Đăng Nhập</h3>
            <form class="mt-4" action="index.html">
               <div class="form-group">
                  <input type="email" class="form-control mb-0" id="exampleInputEmail1" placeholder="Enter email" autocomplete="off" required>
               </div>
               <div class="form-group">
                  <input type="password" class="form-control mb-0" id="exampleInputPassword2" placeholder="Password" required>
               </div>

               <div class="sign-info">
                  <button type="submit" class="btn btn-hover">Sign in</button>
                  <div class="custom-control custom-checkbox d-inline-block">
                     <input type="checkbox" class="custom-control-input" id="customCheck">
                     <label class="custom-control-label" for="customCheck">Remember Me</label>
                  </div>
               </div>

            </form>
         </div>
      </div>
      <div class="mt-3">
         <div class="d-flex justify-content-center links">
            Don't have an account? <a href="{{route ('sign_up')}}" class="text-primary ml-2">Sign Up</a>
         </div>
         <div class="d-flex justify-content-center links">
            <a href="reset-password.html" class="f-link">Forgot your password?</a>
         </div>
      </div>
   </div>
</div>
@endsection