@extends('layouts.main')

@section('container')

    <h1 class="m-5">Ini Data Student</h1>

{{--    <a type="button" class="btn btn-primary ms-5 " href="/student/create">Add Data</a>--}}

    @if (session()->has('success'))
      <div class="alert alert-success col-lg-12" role="alert">
        {{ session ('success') }}
      </div>
    @endif

    <div class="m-5">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
{{--                <th scope="col">NIS</th>--}}
                <th scope="col">Nama</th>
                <th scope="col">Kelas</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($students as $key => $student)
                <tr>
                  <td>{{$no++}}</td>
{{--                  <td>{{$student["nis"]}}</td>--}}
                  <td>{{$student["nama"]}}</td>
                  <td>{{$student->Kelas->nama_kelas}}</td>
                  <td>
                    <a type="button" class="btn btn-primary" href="/student/detail/{{ $student->id }}">Detail</a>
{{--                    <a type="button" class="btn btn-warning" href="/student/edit/{{ $student->id }}">Edit</a>--}}
{{--                    <form action="/student/delete/{{ $student->id }}" method="POST">--}}
{{--                      @method('delete')--}}
{{--                      @csrf--}}
{{--                      <button class="btn btn-danger mt-2" onclick="return confirm('Are you sure you want to delete this')">Delete</button>--}}
{{--                    </form>--}}
                  </td>
                  </tr>
                @endforeach
            </tbody>
          </table>
    </div>

@endsection
