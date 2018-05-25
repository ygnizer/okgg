@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard!　(You are logged in!)</div>

                @if (session('status'))
                <div class="card-body">
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                </div>
                @endif

                <div class="card-body">
                    <form method="POST" action="{{ route('updateRecruitStatus') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="recruitStatus" class="col-md-4 col-form-label text-md-right">{{ __('Your recruit status') }}</label>
                            <div class="col-md-4">
                                <select name="recruitStatus" class="form-control" name="recruitStatus" required>
                                    @foreach (App\Models\User::RECRUIT_STATUSES as $statusId => $statusMessage)
                                        <option value="{{$statusId}}" {{ $user->recruitStatus==$statusId ? 'selected="selected"' : '' }}>{{$statusMessage}}</option>
                                    @endforeach
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

                <div class="card-header">Now suggested!</div>
                <div class="card-body">
                    @if (!empty($suggested))
                    <div class="row">
                        <div class="col-md-4">
                            Name
                        </div>
                        <div class="col-md-4">
                            lane
                        </div>
                        <div class="col-md-4">
                            twitterId
                        </div>
                    </div>
                    @else
                    <div class="row">
                        <div class="col-md-12 text-center">
                            No recommendation...
                        </div>
                    </div>
                    @endif
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
