@include('irispainel::partials.login.header')
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">
                                        {{ trans('irispainel::irispainel.login_message') }}</h1>
                                </div>
                                <form id="login-form" class="user" action="{{route('login')}}" method="POST">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control form-control-user"
                                            id="exampleInputEmail" aria-describedby="emailHelp"
                                            placeholder="{{ trans('irispainel::irispainel.email') }}"
                                            value="{{ old('email') }}">
                                        <div class="invalid-feedback"
                                            style="{{ $errors->has('email') ? 'display: block' : '' }}">
                                            {{ $errors->first('email') }}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user"
                                            id="exampleInputPassword"
                                            placeholder="{{ trans('irispainel::irispainel.password') }}">
                                        <div class="invalid-feedback"
                                            style="{{ $errors->has('password') ? 'display: block' : '' }}">
                                            {{ $errors->first('password') }}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" name="checkbox" class="custom-control-input"
                                                id="customCheck">
                                            <label class="custom-control-label"
                                                for="customCheck">{{ trans('irispainel::irispainel.remember_me') }}</label>
                                        </div>
                                    </div>
                                    <a class="btn btn-primary btn-user btn-block" href="#"
                                        onclick="event.preventDefault(); document.getElementById('login-form').submit();"
                                        class="btn btn-primary btn-user btn-block">{{ trans('irispainel::irispainel.sign_in') }}</a>

                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small"
                                        href="{{ route('password.request') }}">{{ trans('irispainel::irispainel.i_forgot_my_password') }}</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="{{route('register')}}">
                                        {{ trans('irispainel::irispainel.create_an_account') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
@include('irispainel::partials.login.footer')