@extends('theme.panel')

@section('title', 'FIle Detail')

@section('style')
    <style>
        #table_wrapper {
            padding: 20px !important;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="page-header d-print-none mb-2">
            <div>
                <div class="row align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            File Detail
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($products['rows'] as $item)
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h4>{{ $item[1] }}</h4>
                            <p>{{ $item[2] }}</p>
                            <p>{{ $item[3] }}</p>
                            <p>{{ $item[4] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('url')

@endsection

@section('script')
    @vite(['resources/js/apps/product/product.js'])
@endsection
