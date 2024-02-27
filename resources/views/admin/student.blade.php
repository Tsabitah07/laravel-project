@extends('admin.main')
@section('content')
{{--    <div class="row justify-content-end mt-3">--}}
{{--        <div class="col-md-3">--}}
{{--            <form action="/dashboard/student">--}}
{{--                <div class="input-group mb-3">--}}
{{--                    <input type="text" class="form-control" placeholder="Search" name="search" value="{{request('search')}}">--}}
{{--                    <button class="btn btn-info" type="submit" id="button-addon2">Search</button>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}

    <h1 class="mt-5">Data Student</h1>

    <a href="/student/create"><button style="padding-inline: 25px; margin-top: 20px">Add</button></a>

    <table class="table table-sm mt-3">
        <thead class="table-light">
        <tr>
            <th scope="col">Nis</th>
            <th scope="col">Name</th>
            <th scope="col">Class</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($student as $students)
            <tr>
                <td>{{ $students->nis }}</td>
                <td>{{ $students->nama }}</td>
                <td>{{ $students->Kelas->nama_kelas}}</td>
                <td>

                    <div class="d-flex gap-2">
                        <a type="button" class="btn btn-primary" href="/student/detail/{{ $students->id }}">Detail</a>
                        <a type="button" class="btn btn-warning" href="/student/edit/{{ $students->id }}">Edit</a>
                        <form action="/student/delete/{{ $students->id }}" method="POST">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this')">Delete</button>
                        </form>
                    </div>


                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

        <div class="pagination flex justify-content-evenly">
            {{ $student->links() }}
        </div>

@endsection
