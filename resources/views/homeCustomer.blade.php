@extends('layouts.appCustomer')


@section('title')
    Home
@endsection

@section('m-content')

    @if($cars->count()==0)
    no file exist
    @else 
    <div class=" d-flex jusity-content-center mx-auto flex-wrap">
        @foreach ($cars as $car)
            {{-- <div class="col-md-6 col-xl-4"> --}}
                <div class="card  shadow-lg mb-5  rounded w-25 mx-2 ">
                    <img class="card-img-top" src="{{ asset('users/cars/' . $car->picture) }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ $car->name }}</h5>
                        <p class="card-text">{{ $car->description }}</p>
                        {{-- <p class="card-text text-capitalize">{{ $car->color }} | {{ $car->type }} | <span
                                class="text-danger">{{ $car->price }}$</span></p> --}}
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="card-text">
                                <small class="text-muted">Last updated {{ $car->updated_at->diffforhumans() }}</small>
                            </p>
                            {{-- <a href="{{ route('order-create', ['id' => $car->id]) }}" --}}
                            <a href="{{ route('download', ['file' => $car->id]) }}"
                                class="btn rounded-pill btn-icon btn-success d-flex justify-content-center">
                                {{-- <span class="tf-icons bx bxs-cart-add"></span> --}}
                                
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                    <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                    <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                                  </svg>
                            </a>
                        </div>
                    </div>
                </div>
            {{-- </div> --}}
        @endforeach
    </div>
    @endif
 
    
@endsection


@section('styles')
    <style>
        .card:hover {
            /* padding: 10px !important; */
            scale: 1.03;
            transition: 0.2s;
            cursor: pointer;
        }

    </style>
@endsection
