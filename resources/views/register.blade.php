@extends('layouts.main')

@section('main_content')
<div class="container p-5 text-white fw-bold">
    <form action="#" >
        @csrf
        <label class="form-label" for="email">Email</label>
        <input class="form-control" type="text" name="email">
        <label class="form-label" for="username">Username</label>
        <input class="form-control" type="text" name="username">
        <label class="form-label" for="password">Password</label>
        <input class="form-control" type="password" name="password">
        <label class="form-label" for="name">Nama Lengkap</label>
        <input class="form-control" type="text" name="name">
        <label class="form-label" for="school">Sekolah Asal</label>
        <input class="form-control" type="text" name="school">
        <label class="form-label" for="city">Kota</label>
        <input class="form-control" type="text" name="city">
        <label class="form-label" for="birthyear">Tahun Lahir</label>
        <input class="form-control" type="text" name="birthyear">
        <br>
        <br>
        <button type="submit" class="btn btn-info fw-bold" >Submit</button>

    </form>
</div>
@endsection
