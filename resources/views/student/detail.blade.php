@extends('admin.main')

@section('content')

<div class="row justify-content-center m-5">
{{--    <div class="col-md-4 m-5">--}}
{{--        <div class="card p-3 border-3">--}}
            <div class="card-body text-center">
                <h3 class="card-title mb-2">Ini Halaman Data Diri</h3>
                <h5>NIS : {{$student->nis}}</h5>
                <h5>Nama : {{$student->nama}}</h5>
                <h5>Tanggal Lahir : {{$student->tanggal_lahir}}</h5>
                <h5>Kelas : {{$student->Kelas->nama_kelas}}</h5>
                <h5>Alamat : {{$student->alamat}}</h5>
                <a type="button" class="btn btn-secondary mt-3" href="/admin/student">Back</a>
            </div>
{{--        </div>--}}
{{--    </div>--}}
</div>

@endsection
