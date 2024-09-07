@extends('theme.panel')

@section('title', 'Produk')

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
                            File
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($files as $file)
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h4>{{ $file['name'] }}</h4>
                            <a id="lihat-file" data-id="" href="{{ route('file.show', ['filename' => $file['name']]) }}" class="btn btn-primary">Lihat</a>
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
