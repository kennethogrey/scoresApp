@extends('layouts.main')
@section('content')
<div class="container-lg" style="margin: o auto;">
    <h1 class="text-center">Superliga Livescores</h1>
    <div class="row mt-5">
        @if (@isset($response['data']))
            @foreach ($response['data'] as $match )
                <div class="col-lg-12 col-md-12 col-sm-12 text-center mb-4">
                    <div class="card">
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
        @else
            <h1 class="text-center" style="font-size: 34px; color:red">There are no matches today!</h1>
        @endif

        {{-- end of the card --}}
    </div>
    {{-- end of the row --}}
</div>
@endsection
