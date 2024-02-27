@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-md-4 m-5">
        <div class="card p-3 border-3">
            <div class="card-body text-center">
                <h3 class="card-title">Ini Halaman Data Diri</h3>
                <h5>Nama : {{$nama}}</h5>
                <h5>Kelas : {{$kelas}}</h5>
                <img src="{{$image}}" alt="Poto" class="img-fluid" style="max-width: 150px;">
            </div>
        </div>
    </div>
</div>

@endsection