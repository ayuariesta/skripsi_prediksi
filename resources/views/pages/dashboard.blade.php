@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Dashboard'])
    <div class="container-fluid">
        <div class="row mt-7">
            <div class="col-lg-19 mb-lg-0 mb-4">
                <div class="card z-index-2 h-100">
                    <div class="card-header pb-0 pt-3 bg-transparent">
                        <h1 class="my-0">Selamat datang </h1>
                    </div>
                    <div class="card-body p-3">
                    <br><br><br>                    
                    <h3 class="display-9 my-0" height="300">Sistem Prediksi Harga Bahan Pangan Jawa Timur</h3>
                    <br><br>
                </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection
