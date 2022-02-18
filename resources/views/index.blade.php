@extends('layouts.main')
@section('content')
<div class="container-lg" style="margin: o auto;">
    <div class="row mt-5">
        @foreach ($response['data'] as $match )
            <div class="col-lg-6 col-md-12 col-sm-12 text-center mb-4">
                <div class="card" style="width:38rem;">
                    <div class="card-body">
                        <div class="card-title">
                            <img style="width: 30px;" src="{{ $match['teams']['home']['img'] }}" alt="Team logo">
                            {{ $match['teams']['home']['name'] }} {{ $match['scores']['home_score'] }} -
                            {{ $match['scores']['away_score'] }} {{ $match['teams']['away']['name'] }}
                            <img style="width: 30px;" src="{{ $match['teams']['away']['img'] }}" alt="Team logo">
                        </div>
                        <div class="card-text" style="font-size: 12px;">{{ $match['time']['time'] }} {{ $match['time']['timezone'] }}</div>
                        <div class="card-text" style="font-size: 12px;">{{ $match['status_name'] }}</div>
                        <div class="card-text">
                            {{ $match['league']['name'] }} - {{ $match['league']['country_name'] }}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        {{-- end of the card --}}
    </div>
    {{-- end of the row --}}
</div>
@endsection
