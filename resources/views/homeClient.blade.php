@extends('layouts.appCustomer')


@section('title')
    Home
@endsection
{{-- ['truck', 'car', 'bike'] --}}
@section('m-content')
    <div class=" d-flex justify-content-between align-items-center ">
        {{-- <div class="col-md-6 col-xl-4 "> --}}
            <form action="{{ route('cars', ['type' => 'truck']) }}" method="get" class="card  shadow-lg mb-5  rounded mx-2" >
                <img class="card-img-top" src="{{ asset('users/types/truck.jpeg') }}" style="width:100%"  alt="truck image cap">
                <div class="card-body">
                    <h5 class="card-title"><button type="submit">Type truck</button></h5>
                </div>
            </form>
            <form action="{{ route('cars', ['type' => 'car']) }}" method="get" class="card  shadow-lg mb-5  rounded mx-2" >
                <img class="card-img-top" src="{{ asset('users/types/car.jpeg') }}" style="width:100%"  alt="truck image cap">
                <div class="card-body">
                    <h5 class="card-title"><button type="submit">Type car</button></h5>
                </div>
            </form>
            <form action="{{ route('cars', ['type' => 'bike']) }}" method="get" class="card  shadow-lg mb-5  rounded mx-2" >
                <img class="card-img-top" src="{{ asset('users/types/bike.jpeg') }}" style="width:100%"  alt="truck image cap">
                <div class="card-body">
                    <h5 class="card-title"><button type="submit">Type bike</button></h5>
                </div>
            </form>
        {{-- </div> --}}
    </div>
@endsection


@section('styles')
    <style>
        .card{
            width: 25vw;
        }
        .card-img-top{
            height: 200px !important;
            object-fit: cover
        }
        .card:hover {
            /* padding: 10px !important; */
            scale: 1.03;
            transition: 0.2s;
            cursor: pointer;
        }

    </style>
@endsection
