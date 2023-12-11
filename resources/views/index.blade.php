@extends('layouts.app')

@section('content')
<section class="jumbotron">
    <div class="container-fluid position-relative" style="background-image: url( {{ Vite::asset('resources/img/jumbotron.jpg') }})">
        <h1 class="text-uppercase">Current Series</h1>
    </div>
</section>

<section class="py-4">
    <div class="container">
        <div class="row row-gap-4">
            @foreach ($comics as $item)
                <div class="col-2">
                    <div class="card h-100">
                        <img src="{{ $item['thumb'] }}" class="card-img-top" alt="">
                        <div class="card-body px-0">
                            <h6 class="text-uppercase text-white">{{ $item['series'] }}</h6>
                        </div>
                    </div>  
                </div>          
            @endforeach
        </div>
    </div>
</section>

@endsection