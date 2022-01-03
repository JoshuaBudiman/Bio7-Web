@extends('layouts.main')

@section('main_content')

<div class="container pt-5 my-5 text-white fw-bold">
    <form action="#" >
        @csrf
        <label class="form-label" for="username">Username</label>
        <input class="form-control" type="text" name="username">
        <label class="form-label" for="password">Password</label>
        <input class="form-control" type="password" name="password">
        <br>
        <br>
        <button type="submit" class="btn btn-info fw-bold" >Submit</button>
    </form>

</div>
@endsection
