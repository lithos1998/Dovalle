@extends('layouts.app')


@section('content')
    <div class="show-service">
        <div class="service">            
            <div class="icon-div">
                <i class="{{ $service['class'] }}"></i>
            </div>
            <h3>{{ $service['name'] }}</h3>
        </div>
    </div>
@endsection
