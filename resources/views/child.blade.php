
@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>This is my body content.</p>
    <form method="POST" action="jibs">
    	{{ csrf_field ()}}
    	<input type="email" name="email">
    	<textarea name="comment"></textarea>
    	<input type="submit" value="Submit">
    </form>
@endsection
