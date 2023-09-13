@extends('layouts.app')


@section('content')
    <div class="show-service">
        <div class="service">            
            <div class="icon-div">
                <i class="{{ $service[2] }}"></i>
            </div>
            <h3>{{ $service[0] }}</h3>
        </div>
    </div>
@endsection
