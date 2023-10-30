@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-light">Laman User</div>

                <div class="card-body bg-danger">
                    @if (session('status'))
                        <div class="alert alert-primary" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Selamat datang {{ Auth::user()->name}} !</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
