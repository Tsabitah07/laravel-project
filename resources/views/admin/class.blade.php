@extends('admin.main')
@section('content')
    <h1 class="mt-5">Ini Data Kelas</h1>

    <a href="/class/create"><button style="padding-inline: 25px; margin-top: 20px">Add</button></a>

    <div class="m-5">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Kelas</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($class as $kelas)
                <tr>
                    <td>{{$no++}}</td>
                    {{--                    <td>{{$kelas["id"]}}</td>--}}
                    <td>{{$kelas["nama_kelas"]}}</td>
                    <td class="d-flex gap-2">
                        <a type="button" class="btn btn-warning" href="/class/edit/{{ $kelas->id }}">Edit</a>
                        <form action="/class/delete/{{ $kelas->id }}" method="POST">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="pagination flex justify-content-evenly">
            {{ $class->links() }}
        </div>
    </div>
@endsection
