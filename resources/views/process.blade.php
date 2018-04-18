@extends('template.template')

@section('content')
@hasrole('admin')
<?php header('location: /order'); ?>
@else <h1>Hello Customer!!</h1>

@endhasrole
@endsection