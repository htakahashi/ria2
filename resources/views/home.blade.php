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





                        <?php

                        if(!empty($user->permission) && $user->permission == 'Buy Stuff')
                        {
                            echo '<div class="title m-b-md">Hello Customer!</div><a href="product/"><button class="btn btn-success">Let\'s go shopping!</button></a>';
                        }

                        ?>

            </div>
        </div>
    </div>
</div>
@endsection
