@extends('layouts.container')
@section('title')
    Dashboard
@endsection

@section('m-content')
    <div class="row">
        <div class="col-12">
            <h1 class="display-1 font-monospace text-primary"> Lessons</h1>
        </div>
        <div class="col-lg-12 mb-4">
            <div class="card shadow-lg rounded">
                <div class="card-body">
                    <div class="card-header font-monospace fs-3 text-info px-0">
                        Lessons Number
                    </div>
                    <div class="card-title d-flex align-items-center justify-content-between">
                        <div class="fs-1">
                            <span class="rounded text-info">
                                <svg xmlns="http://www.w3.org/2000/svg" width='100' height="100" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                                    <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                                  </svg>
                            </span>
                        </div>
                        <div class="fs-1">
                            <span class="rounded text-info">{{ $carsCount }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="col-lg-6 col-md-12 col-4 mb-4">
            <div class="card shadow-lg rounded">
                <div class="card-body">
                    <div class="card-header font-monospace fs-3 text-success px-0">
                        Cars Total Sum
                    </div>
                    <div class="card-title d-flex align-items-center justify-content-between">
                        <div class="fs-1">
                            <span class="rounded text-success"><i class="fa-solid fa-circle-dollar-to-slot"></i></span>
                        </div>
                        <div class="fs-1">
                            <span class="rounded text-success">{{ $sumCarPrise }}
                                <small><i class="fs-3 fa-solid fa-dollar-sign"></i></small>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
    {{-- <div class="row">
        <div class="col-12">
            <h1 class="display-1 font-monospace text-primary"> Orders</h1>
        </div>
        <div class="col-lg-4 col-md-12 col-4 mb-4">
            <div class="card shadow-lg rounded">
                <div class="card-body">
                    <div class="card-header fs-3 font-monospace text-primary px-0">
                        Total Orders
                    </div>
                    <div class="card-title d-flex align-items-center justify-content-between">
                        <div class="fs-1">
                            <span class="rounded text-primary"><i class="fa-solid fa-credit-card"></i></span>
                        </div>
                        <div class="fs-1">
                            <span class="rounded text-primary">{{ $OraderTotalSum->count() }}</span>
                        </div>
                    </div>
                    <h3 class="card-title text-primary fw-semibold mb-2">
                        {{ $OraderTotalSum->sum('price') }} $
                    </h3>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 col-4 mb-4">
            <div class="card shadow-lg rounded">
                <div class="card-body">
                    <div class="card-header fs-3 font-monospace text-danger px-0">
                        Orader Incomplete
                    </div>
                    <div class="card-title d-flex align-items-center justify-content-between">
                        <div class="fs-1">
                            <span class="rounded text-danger"><i class="fa-solid fa-credit-card"></i></span>
                        </div>
                        <div class="fs-1">
                            <span class="rounded text-danger">{{ $OraderIncompleteSum->count() }}</span>
                        </div>
                    </div>
                    <h3 class="card-title text-danger fw-semibold mb-2">
                        {{ $OraderIncompleteSum->sum('price') }} $
                    </h3>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 col-4 mb-4">
            <div class="card shadow-lg rounded">
                <div class="card-body">
                    <div class="card-header font-monospace fs-3 text-success px-0">
                        Orader Complete
                    </div>
                    <div class="card-title d-flex align-items-center justify-content-between">
                        <div class="fs-1">
                            <span class="rounded text-success"><i class="fa-solid fa-credit-card"></i></span>
                        </div>
                        <div class="fs-1">
                            <span
                                class="rounded text-success">{{ $OraderTotalSum->count() - $OraderIncompleteSum->count() }}</span>
                        </div>
                    </div>
                    <h3 class="card-title text-success fw-semibold mb-2">
                        {{ $OraderTotalSum->sum('price') - $OraderIncompleteSum->sum('price') }} $
                    </h3>
                </div>
            </div>
        </div>
    </div> --}}
@endsection


@section('styles')
    <style>
        .card {
            opacity: 0.7 !important;
        }

        .card:hover {
            opacity: 1 !important;
        }

    </style>
@endsection
