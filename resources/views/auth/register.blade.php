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

                        {{-- SummonerName --}}
                        <div class="form-group row">
                            <label for="summonerName" class="col-md-4 col-form-label text-md-right">{{ __('SummonerName') }}</label>

                            <div class="col-md-6">
                                <input id="summonerName" type="text" class="form-control{{ $errors->has('summonerName') ? ' is-invalid' : '' }}" name="summonerName" value="{{ old('summonerName') }}" required autofocus>

                                @if ($errors->has('summonerName'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('summonerName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        {{-- Tier --}}
                        <div class="form-group row">
                            <label for="tier" class="col-md-4 col-form-label text-md-right">{{ __('Tier') }}</label>

                            <div class="col-md-6">
                                <select name="tier" class="form-control{{ $errors->has('tier') ? ' is-invalid' : '' }}" name="tier" value="{{ old('tier') }}" required>
                                    <option value="Challenger" {{ old('tier')=='Challenger' ? 'selected="selected"' : '' }}>Challenger</option>
                                    <option value="Diamond"    {{ old('tier')=='Diamond'    ? 'selected="selected"' : '' }}>Diamond</option>
                                    <option value="Platinum"   {{ old('tier')=='Platinum'   ? 'selected="selected"' : '' }}>Platinum</option>
                                    <option value="Gold"       {{ old('tier')=='Gold'       ? 'selected="selected"' : '' }}>Gold</option>
                                    <option value="Silver"     {{ old('tier')=='Silver'     ? 'selected="selected"' : '' }}>Silver</option>
                                    <option value="Bronze"     {{ old('tier')=='Bronze'     ? 'selected="selected"' : '' }}>Bronze</option>
                                </select>

                                @if ($errors->has('tier'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('tier') }}</strong>
                                    </span>
                                @endif

                            </div>
                        </div>

                        {{-- TwiterId --}}
                        <div class="form-group row">
                            <label for="twitterId" class="col-md-4 col-form-label text-md-right">{{ __('Twitter Account') }}</label>

                            <div class="col-md-6">
                                <input id="twitterId" type="text" class="form-control{{ $errors->has('twitterId') ? ' is-invalid' : '' }}" name="twitterId" value="{{ old('twitterId') }}" required>

                                @if ($errors->has('twitterId'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('twitterId') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        {{-- Email --}}
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        {{-- Password --}}
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        {{-- Confirm Password --}}
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
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
