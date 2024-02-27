@extends('admin.main')
@section('content')

    <div>
        <h1 style="display: flex;flex-direction: row;justify-content: center;margin: 25px">WELCOME TO ADMIN DASHBOARD</h1>

        <div class="row justify-content-center">
            <div class="col-md-4 m-5">
                <div class="card p-3 border-3">
                    <div class="card-body text-center">
                        <h3 class="card-title>">Data User</h3>
                        <h5 class="card-text>">Nama User : {{ auth()->user()->name }}</h5>
                        <h5 class="card-text>">Email User : {{ auth()->user()->email }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
