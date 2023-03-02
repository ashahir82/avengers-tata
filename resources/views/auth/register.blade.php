@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="nationality"
                                    class="col-md-3 col-form-label text-md-end">{{ __('Nationality') }}</label>

                                <div class="col-md-9">
                                    <select id="citizenship" class="js-example-basic-single form-select @error('citizenship') is-invalid @enderror"
                                        name="citizenship">
                                        <option selected>Please select</option>
                                        <option value="1">Malaysia Citizen</option>
                                        <option value="2">Permanent Citizen</option>
                                        <option value="3">Non Malaysia Citizen</option>
                                    </select>

                                    @error('nationality')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="citizenship"
                                    class="col-md-3 col-form-label text-md-end">{{ __('Citizenship') }}</label>

                                <div class="col-md-9">
                                    <select id="citizenship" class="js-example-basic-single form-select @error('citizenship') is-invalid @enderror"
                                        name="citizenship">
                                        <option selected>Please select</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>

                                    @error('citizenship')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="userid"
                                    class="col-md-3 col-form-label text-md-end">{{ __('User ID') }}</label>

                                <div class="col-md-9">
                                    <input id="userid" type="text"
                                        class="form-control @error('userid') is-invalid @enderror" name="userid"
                                        value="{{ old('userid') }}" autocomplete="userid" autofocus>

                                    @error('userid')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="name"
                                    class="col-md-3 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-9">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-3 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-9">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-3 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-9">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-3 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-9">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="dob"
                                    class="col-md-3 col-form-label text-md-end">{{ __('Date of Birth') }}</label>

                                <div class="col-md-9">
                                    <input id="dob" type="date"
                                        class="form-control @error('dob') is-invalid @enderror" name="dob"
                                        value="{{ old('dob') }}" autocomplete="dob" autofocus>

                                    @error('dob')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="race"
                                    class="col-md-3 col-form-label text-md-end">{{ __('Race') }}</label>

                                <div class="col-md-9">
                                    <select id="race" class="js-example-basic-single form-select @error('race') is-invalid @enderror"
                                        name="race">
                                        <option selected>Please select</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>

                                    @error('race')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="gender"
                                    class="col-md-3 col-form-label text-md-end">{{ __('Gender') }}</label>

                                <div class="col-md-9">
                                    <select id="gender" class="js-example-basic-single form-select @error('gender') is-invalid @enderror"
                                        name="gender">
                                        <option selected>Please select</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>

                                    @error('gender')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="passport"
                                    class="col-md-3 col-form-label text-md-end">{{ __('Passport No.') }}</label>

                                <div class="col-md-9">
                                    <input id="passport" type="text"
                                        class="form-control @error('passport') is-invalid @enderror" name="passport"
                                        value="{{ old('passport') }}" autocomplete="passport" autofocus>

                                    @error('passport')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="address1"
                                    class="col-md-3 col-form-label text-md-end">{{ __('Address') }}</label>

                                <div class="col-md-9">
                                    <input id="address1" type="text"
                                        class="form-control @error('address1') is-invalid @enderror" name="address1"
                                        value="{{ old('address1') }}" autocomplete="address1" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-3"></div>
                                <div class="col-md-9">
                                    <input id="address2" type="text"
                                        class="form-control @error('address2') is-invalid @enderror" name="address2"
                                        value="{{ old('address2') }}" autocomplete="address1" autofocus>

                                    @error('address2')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-3"></div>
                                <div class="col-md-9">
                                    <input id="address3" type="text"
                                        class="form-control @error('address3') is-invalid @enderror" name="address3"
                                        value="{{ old('address3') }}" autocomplete="address1" autofocus>

                                    @error('address3')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="postcode"
                                    class="col-md-3 col-form-label text-md-end">{{ __('Postcode') }}</label>

                                <div class="col-md-9">
                                    <input id="postcode" type="text"
                                        class="form-control @error('postcode') is-invalid @enderror" name="postcode"
                                        value="{{ old('postcode') }}" autocomplete="postcode" autofocus>

                                    @error('postcode')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="country"
                                    class="col-md-3 col-form-label text-md-end">{{ __('Country') }}</label>

                                <div class="col-md-9">
                                    <select id="country" class="js-example-basic-single form-select @error('country') is-invalid @enderror"
                                        name="country">
                                        <option selected>Please select</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>

                                    @error('country')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="state"
                                    class="col-md-3 col-form-label text-md-end">{{ __('State') }}</label>

                                <div class="col-md-9">
                                    <select id="country" class="js-example-basic-single form-select @error('country') is-invalid @enderror"
                                        name="country">
                                        <option selected>Please select</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>

                                    @error('state')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="city"
                                    class="col-md-3 col-form-label text-md-end">{{ __('City') }}</label>

                                <div class="col-md-9">
                                    <select id="country" class="js-example-basic-single form-select @error('country') is-invalid @enderror"
                                        name="country">
                                        <option selected>Please select</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>

                                    @error('city')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <hr>

                            <div class="row mb-3">
                                <label for="security"
                                    class="col-md-3 col-form-label text-md-end">{{ __('Security Question') }}</label>

                                <div class="col-md-9">
                                    <select id="security" class="js-example-basic-single form-select @error('security') is-invalid @enderror"
                                        name="security">
                                        <option selected>Please select</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>

                                    @error('security')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="answer"
                                    class="col-md-3 col-form-label text-md-end">{{ __('Answer') }}</label>

                                <div class="col-md-9">
                                    <input id="answer" type="text"
                                        class="form-control @error('answer') is-invalid @enderror" name="answer"
                                        value="{{ old('answer') }}" autocomplete="answer" autofocus>

                                    @error('answer')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="CaptchaCode"
                                    class="col-md-3 col-form-label text-md-end">{{ __('Captcha') }}</label>

                                <div class="col-md-9">
                                    {!! captcha_image_html('CustomCaptcha') !!}
                                    <input id="CaptchaCode" type="text"
                                        class="form-control @error('password') is-invalid @enderror" name="CaptchaCode"
                                        autocomplete="CaptchaCode">
                                    @error('CaptchaCode')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-9 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
