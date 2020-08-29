@extends('layouts.layout')

@section('content')
<div id="page">

            <form class="default" method="POST" action="{{ route('login') }}">
                @csrf



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
                        <button type="submit" class="submit-button w-full">
                            {{ __('Login') }}
                        </button>
                    </div>
                </div>
            </form>

        </div>
</div>
@endsection
