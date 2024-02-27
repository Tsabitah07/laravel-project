@extends('layouts.main')

@section('container')

{{--    @if (session()->has('success'))--}}
{{--        <div class="alert alert-success col-lg-12" role="alert">--}}
{{--            {{ session ('success') }}--}}
{{--        </div>--}}
{{--    @endif--}}

    <h1 class="m-5 ps-4" style="">Ini Data Kelas</h1>

{{--    <a type="button" class="btn btn-primary ms-5 " href="/class/create">Add Data</a>--}}

    <div class="m-5">
        <table class="table m-4">
            <thead>
            <tr>
                <th scope="col">No</th>
{{--                <th scope="col">Id Kelas</th>--}}
                <th scope="col">Kelas</th>
{{--                <th scope="col">Action</th>--}}
            </tr>
            </thead>
            <tbody>
            @foreach ($class as $kelas)
                <tr>
                    <td>{{$no++}}</td>
{{--                    <td>{{$kelas["id"]}}</td>--}}
                    <td>{{$kelas["nama_kelas"]}}</td>
{{--                    <td>--}}
{{--                        <a type="button" class="btn btn-primary" href="/student/detail/{{ $student->id }}">Detail</a>--}}
{{--                        <a type="button" class="btn btn-warning" href="/class/edit/{{ $kelas->id }}">Edit</a>--}}
{{--                        <form action="/class/delete/{{ $kelas->id }}" method="POST">--}}
{{--                            @method('delete')--}}
{{--                            @csrf--}}
{{--                            <button class="btn btn-danger mt-2" onclick="return confirm('Are you sure you want to delete this')">Delete</button>--}}
{{--                        </form>--}}
{{--                    </td>--}}
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
