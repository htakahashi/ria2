@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    @role('admin')
                        I am an admin!
                    @else
                        I am not an admin...
                    @endrole
                    <p>
                    @role('customer')
                        I am an customer!
                    @else
                        I am not an customer...
                    @endrole
                </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
