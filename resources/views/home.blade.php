@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">


                <div class="title m-b-md">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                           Hello Customer!



            </div>
        </div>
    </div>
</div>
@endsection
