@extends('admin.main')

@section('content')

    <div class="row justify-content-center m-4">
{{--        <div class="col-md-4 m-5">--}}
{{--            <div class="card p-3 border-3">--}}
                <div class="card-body text-center">
                    <h3 class="card-title mb-2">Edit Class</h3>

                    <form method="post" action="/class/update/{{ $kelas->id }}">
                        @csrf

                        <div class="form-group text-start mb-3">
                            <label for="nama_kelas">Kelas:</label>
                            <input type="text" name="nama_kelas" id="nama_kelas" class="form-control" required value="{{ old('kelas', $kelas->nama_kelas) }}">
                        </div>

                        <button type="submit" class="btn btn-primary mt-3 px-5" onclick="return showAlert()">Update Data</button>
                    </form>
                </div>
{{--            </div>--}}
{{--        </div>--}}
    </div>

    <script>
        function showAlert() {
            alert("Data updated successfully!");
        }
    </script>

@endsection
