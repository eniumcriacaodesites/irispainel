@include('irispainel::partials.login.header')
<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">{{ trans('irispainel::irispainel.register_message') }}
                            </h1>
                        </div>
                        <form class="user" action="{{ route('register') }}" method="post">
                            {!! csrf_field() !!}
                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <input type="text" name="name" class="form-control form-control-user"
                                        id="exampleFirstName"
                                        placeholder="{{ trans('irispainel::irispainel.full_name') }}"
                                        value="{{ old('name') }}">
                                    <div class="invalid-feedback"
                                        style="{{ $errors->has('name') ? 'display: block' : '' }}">
                                        {{ $errors->first('name') }}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control form-control-user"
                                    id="exampleInputEmail" placeholder="{{ trans('irispainel::irispainel.email') }}"
                                    value="{{ old('email') }}">
                                <div class="invalid-feedback"
                                    style="{{ $errors->has('email') ? 'display: block' : '' }}">
                                    {{ $errors->first('email') }}
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" name="password" class="form-control form-control-user"
                                        id="exampleInputPassword"
                                        placeholder="{{ trans('irispainel::irispainel.password') }}">
                                    <div class="invalid-feedback"
                                        style="{{ $errors->has('password') ? 'display: block' : '' }}">
                                        {{ $errors->first('password') }}
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" name="password_confirmation"
                                        class="form-control form-control-user" id="exampleInputPassword"
                                        placeholder="{{ trans('irispainel::irispainel.retype_password') }}">
                                    <div class="invalid-feedback"
                                        style="{{ $errors->has('password_confirmation') ? 'display: block' : '' }}">
                                        {{ $errors->first('password_confirmation') }}
                                    </div>
                                </div>
                            </div>
                            <button type="submit"
                                class="btn btn-primary btn-user btn-block">{{ trans('irispainel::irispainel.register') }}</button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small"
                                href="{{route('login')}}">{{ trans('irispainel::adminlte.i_already_have_a_membership') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@include('irispainel::partials.login.footer')