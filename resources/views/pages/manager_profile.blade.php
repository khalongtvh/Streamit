@extends('layout')
@section('content')
<section class="m-profile manage-p">
    <div class="container h-100">
        <div class="row align-items-center justify-content-center h-100">
            <div class="col-lg-10">
                <div class="sign-user_card">
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="upload_profile d-inline-block">
                                <img src="{{asset('frontend/images/user/user.jpg')}}" class="profile-pic rounded-circle img-fluid" alt="user">
                            </div>
                        </div>
                        <div class="col-lg-10 device-margin">
                            <div class="profile-from">
                                <h4 class="mb-3">Quản lý thông tin</h4>
                                <form class="mt-4" action="{{('home')}}">
                                    <div class="form-group">
                                        <label>Tên</label>
                                        <input type="text" class="form-control mb-0" id="exampleInputl2" placeholder="Nhập tên của bạn" autocomplete="off" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control mb-0" id="exampleInputl2" placeholder="Nhập email" autocomplete="off" required>
                                    </div>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-hover">Save</a>
                                        <a href="{{route('homepage')}}" class="btn btn-link">Cancel</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection