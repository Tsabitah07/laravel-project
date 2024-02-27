@extends('admin.main')

@section('content')

<div class="row justify-content-center m-4">
{{--    <div class="col-md-4 m-5">--}}
{{--        <div class="card p-3 border-3">--}}
            <div class="card-body text-center">
                <h3 class="card-title mb-2">Add New Student</h3>

                <form method="post" action="/student/add">
                    @csrf

                    <div class="form-group text-start mb-3">
                        <label for="nis">Nis:</label>
                        <input type="number" name="nis" id="nis" class="form-control" required value="{{ old('nis') }}">
                    </div>

                    <div class="form-group text-start mb-3">
                        <label for="nama">Nama:</label>
                        <input type="text" name="nama" id="nama" class="form-control" required value="{{ old('nama') }}">
                    </div>

                    <div class="form-group text-start mb-3">
                        <label for="tanggal_lahir">Tanggal Lahir:</label>
                        <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" required value="{{ old('tanggal_lahir') }}">
                    </div>

                    <div class="form-group text-start mb-3">
                        <label for="kelas">Kelas:</label>
{{--                        <input type="text" name="kelas" id="kelas" class="form-control" required value="{{ old('kelas') }}">--}}
                        <select class="form-select" aria-label="Default select example" name="kelas">
                            @foreach($kelas as $kelasItem)
                                <option name="kelas" value={{$kelasItem->id}}>{{ $kelasItem-> nama_kelas}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group text-start mb-3">
                        <label for="alamat">Alamat:</label>
                        <input type="text" name="alamat" id="alamat" class="form-control" required value="{{ old('alamat') }}">
                    </div>

                    <button type="submit" class="btn btn-outline-primary mt-3 px-5">Add</button>
                </form>
            </div>
{{--        </div>--}}
{{--    </div>--}}
</div>

@endsection
