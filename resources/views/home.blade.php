@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard!</div>

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

                <div class="card-header">Recommended!</div>
                <div class="card-body">
                    @forelse ($recommends as $recommend)
                    <div class="row alert alert-info">
                        <div class="col-md-4">
                            {{ $recommend->summonerName }}
                        </div>
                        <div class="col-md-2">
                            {{ $recommend->tier }}
                        </div>
                        <div class="col-md-2">
                            {{ App\Models\User::LANE_STATUSES[$recommend->laneFirst] }}
                        </div>
                        <div class="col-md-4">
                            {{ $recommend->twitterId }}
                        </div>
                    </div>

                    @empty
                    <div class="row">
                        <div class="col-md-12 text-center">
                            No recommendation...
                        </div>
                    </div>
                    @endforelse
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
