
@extends('layouts.guest')

@section('wrapper')

    <div class="wrapper">
        <div class="d-flex align-items-center justify-content-center my-5 my-lg-0">
            <div class="container">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2">
                    <div class="col mx-auto">
                        <div class="my-4 text-center">
                            <img src="assets/images/logo-img.png" width="180" alt=""/>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="border p-4 rounded">
                                    <div class="text-center">
                                        <h3 class="">Sign Up</h3>
                                        <p>Already have an account? <a href="{{ route('login') }}">Sign in
                                                here</a>
                                        </p>
                                    </div>
                                    <div class="d-grid">
                                        <a class="btn my-4 shadow-sm btn-white" href="javascript:;"> <span
                                                class="d-flex justify-content-center align-items-center">
                          <img class="me-2" src="https://pbs.twimg.com/profile_images/1311763847775125516/mvBRhlDs_400x400.jpg" width="16" alt="Image Description">
                          <span>Sign Up with Google</span>
											</span>
                                        </a> <a href="javascript:;" class="btn btn-facebook"><i class="bx bxl-facebook"></i>Sign
                                            Up with Facebook</a>
                                    </div>
                                    <div class="login-separater text-center mb-4"><span>OR SIGN UP WITH EMAIL</span>
                                        <hr/>
                                    </div>
                                    <div class="form-body">
                                        <form class="row g-3" method="POST" action="{{ route('register') }}">
                                            @csrf
                                            <div class="col-sm-12">
                                                <label for="inputFirstName" class="form-label">Full Name</label>
                                                <input class="form-control"
                                                       placeholder="Jhon"
                                                       id="name"
                                                       type="text"
                                                       name="name"
                                                       value="{{old('name')}}"
                                                       required
                                                       autofocus autocomplete="name"
                                                >
                                                <x-input-error :messages="$errors->get('name')" class="mt-2"/>
                                            </div>
                                            <div class="col-sm-12">
                                                <label for="inputLastName" class="form-label">Email</label>
                                                <input
                                                    class="form-control"
                                                    placeholder="example@gmail.com"
                                                    id="email"
                                                    type="email"
                                                    name="email"
                                                    value="{{old('email')}}"
                                                    required
                                                    autocomplete="username"
                                                >
                                                <x-input-error :messages="$errors->get('email')" class="mt-2"/>
                                            </div>
                                            <div class="col-12">
                                                <label for="inputChoosePassword" class="form-label">Password</label>
                                                <div class="input-group" id="show_hide_password">
                                                    <input
                                                        class="form-control border-end-0"
                                                        value="12345678"
                                                        placeholder="Enter Password"
                                                        id="password"
                                                        type="password"
                                                        name="password"
                                                        required
                                                        autocomplete="new-password"
                                                    > <a href="javascript:;"
                                                         class="input-group-text bg-transparent"><i
                                                            class='bx bx-hide'></i></a>
                                                    <x-input-error :messages="$errors->get('password')" class="mt-2"/>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label for="inputChoosePassword" class="form-label">Password</label>
                                                <div class="input-group" id="show_hide_password">
                                                    <input
                                                        class="form-control border-end-0"
                                                        value="12345678"
                                                        placeholder="Enter Password"
                                                        id="password_confirmation"
                                                        type="password"
                                                        name="password_confirmation"
                                                        required autocomplete="new-password"
                                                    > <a href="javascript:;"
                                                         class="input-group-text bg-transparent"><i
                                                            class='bx bx-hide'></i></a>
                                                    <x-input-error :messages="$errors->get('password')" class="mt-2"/>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary"><i class='bx bx-user'></i>Sign
                                                        up
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </div>
    </div>
@endsection




