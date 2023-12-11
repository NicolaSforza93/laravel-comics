@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row row-gap-4">
        @foreach ($comics as $item)
            <div class="col-2">
                <div class="card h-100">
                    <img src="{{ $item['thumb'] }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h6 class="text-uppercase">{{ $item['series'] }}</h6>
                    </div>
                </div>  
            </div>          
        @endforeach
    </div>
</div>
@endsection