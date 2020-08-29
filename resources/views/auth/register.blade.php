@extends('layouts.layout')

@section('content')
<div id="page">

            <h1>{{ __('Register') }}</h1>

            <form class="default" method="POST" action="{{ route('register') }}">
                @csrf

                <div class="input-group">
                    <div>
                    <label>{{ __('Name') }}</label>

                        <input id="name" type="text" name="name" value="{{ old('name') }}">

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="input-group">

                    <div>
                        <label for="email">{{ __('E-Mail Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="input-group">

                    <div>
                        <label for="password">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="input-group">

                    <div>
                        <label for="password-confirm">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="input-group">
                    <div>
                        <button type="submit" class="submit-button w-full">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>
            </form>

        </div>
</div>
@endsection
