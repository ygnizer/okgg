@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard　(You are logged in!)</div>

                @if (session('status'))
                <div class="card-body">
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                </div>
                @endif

                <div class="card-body">
                    <form method="POST" action="{{ route('updateRecruitStatus') }}">
                        <div class="form-group row">
                            <label for="recruitStatus" class="col-md-4 col-form-label text-md-right">{{ __('Your recruit status') }}</label>
                            <div class="col-md-4">
                                <select name="status" class="form-control" name="status" value="{{ old('user.status') }}" required>
                                    <option value="0" {{ old('status')==0 ? 'selected="selected"' : '' }}>Do nothing</option>
                                    <option value="1" {{ old('status')==1 ? 'selected="selected"' : '' }}>Wait for recruiting</option>
                                    <option value="2" {{ old('status')==2 ? 'selected="selected"' : '' }}>Recruit</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
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
