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
                                    <select id="citizenship"
                                        class="js-example-basic-single form-select @error('citizenship') is-invalid @enderror"
                                        name="citizenship">
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

                                <div class="col-md-9" id="isCitizen">
                                    <input id="isCitizen" type="text"
                                        class="form-control @error('isCitizen') is-invalid @enderror" name="isCitizen"
                                        value="Malaysia" autocomplete="isCitizen" autofocus readonly>

                                    @error('isCitizen')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-9" id="nonCitizen" style="display:none;">
                                    <select id="nonCitizen"
                                        class="js-example-basic-single form-select @error('nonCitizen') is-invalid @enderror"
                                        name="nonCitizen">
                                        <option value="" selected>Please select</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>

                                    @error('nonCitizen')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3" id="labelUserID">
                                <label for="userid"
                                    class="col-md-3 col-form-label text-md-end">{{ __('User ID') }}</label>

                                <div class="col-md-9">
                                    <input id="userid" type="text"
                                        class="form-control @error('userid') is-invalid @enderror" name="userid"
                                        value="{{ old('userid') }}" autocomplete="userid" autofocus>

                                    <p id="helperUserID" class="mb-0">
                                        As Per MyKad
                                    </p>

                                    @error('userid')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3" id="labelEmailID" style="display: none;">
                                <label for="emailid"
                                    class="col-md-3 col-form-label text-md-end">{{ __('Email') }}</label>

                                <div class="col-md-9">
                                    <input id="emailid" type="email"
                                        class="form-control @error('emailid') is-invalid @enderror" name="emailid"
                                        value="{{ old('emailid') }}" autocomplete="emailid" autofocus>

                                    <p id="helperUserID" class="mb-0">
                                        As Per Passport
                                    </p>

                                    @error('emailid')
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
                                    <p id="helperName" class="mb-0">
                                        Looks good!
                                    </p>
                                    @error('name')
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
                                    <select id="race"
                                        class="js-example-basic-single form-select @error('race') is-invalid @enderror"
                                        name="race">
                                        <option value="" selected>Please select</option>
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
                                    <select id="gender"
                                        class="js-example-basic-single form-select @error('gender') is-invalid @enderror"
                                        name="gender">
                                        <option value="" selected>Please select</option>
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

                            <div class="row mb-3" id="emailField">
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

                            <div class="row mb-3" id="passportField" style="display: none;">
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

                                <div class="col-md-9 offset-md-3">
                                    <input id="address2" type="text"
                                        class="form-control @error('address2') is-invalid @enderror" name="address2"
                                        value="{{ old('address2') }}" autocomplete="address1" autofocus>

                                    @error('address2')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-9 offset-md-3">
                                    <input id="address3" type="text"
                                        class="form-control @error('address3') is-invalid @enderror" name="address3"
                                        value="{{ old('address3') }}" autocomplete="address1" autofocus>
                                    <p id="helperAddress" class="mb-0">
                                        Looks good!
                                    </p>
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
                                    <input id="postcode" type="number"
                                        class="form-control @error('postcode') is-invalid @enderror" name="postcode"
                                        value="{{ old('postcode') }}" autocomplete="postcode" autofocus>

                                    @error('postcode')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div id="nonCountryID" style="display:none;">
                                <div class="row mb-3">
                                    <label for="country"
                                        class="col-md-3 col-form-label text-md-end">{{ __('Country') }}</label>

                                    <div class="col-md-9">
                                        <select id="isCountry"
                                            class="js-example-basic-single form-select @error('isCountry') is-invalid @enderror"
                                            name="isCountry">
                                            <option value="" selected>Please select</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>

                                        @error('isCountry')
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
                                        <input id="isState" type="text"
                                            class="form-control @error('isState') is-invalid @enderror"
                                            name="isState" value="{{ old('isState') }}" autocomplete="isState"
                                            autofocus>

                                        @error('isState')
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
                                        <input id="isCity" type="text"
                                            class="form-control @error('isCity') is-invalid @enderror"
                                            name="isCity" value="{{ old('isCity') }}" autocomplete="isCity"
                                            autofocus>

                                        @error('isCity')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div id="isCountryID">
                                <div class="row mb-3">
                                    <label for="country"
                                        class="col-md-3 col-form-label text-md-end">{{ __('Country') }}</label>

                                    <div class="col-md-9">
                                        <input id="nonCountry" type="text"
                                            class="form-control @error('nonCountry') is-invalid @enderror"
                                            name="nonCountry" value="Malaysia" autocomplete="nonCountry"
                                            autofocus readonly>

                                        @error('nonCountry')
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
                                        <select id="nonState"
                                            class="js-example-basic-single form-select @error('nonState') is-invalid @enderror"
                                            name="nonState">
                                            <option value="" value="" selected>Please select</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>

                                        @error('nonState')
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
                                        <select id="nonCity"
                                            class="js-example-basic-single form-select @error('nonCity') is-invalid @enderror"
                                            name="nonCity">
                                            <option value="" selected>Please select</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>

                                        @error('nonCity')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="row mb-3">
                                <label for="security"
                                    class="col-md-3 col-form-label text-md-end">{{ __('Security Question') }}</label>

                                <div class="col-md-9">
                                    <select id="security"
                                        class="js-example-basic-single form-select @error('security') is-invalid @enderror"
                                        name="security">
                                        <option value="" selected>Please select</option>
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
                                <div class="col-md-9 offset-md-3">
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
