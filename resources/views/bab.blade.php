@extends('layouts.main')

@section('main_content')
<div class="container-sm text-center">
    <img class="img-fluid" src="img/logoBIO.png" alt="" width="150">
</div>
<div class="container pt-5 my-5 text-center">
    
    @foreach ($babs as $bab)
        <a class="btn btn-warning m-5 p-3" href="{{route('bab.show')}}">
        <h2>{{$bab['bab']}} </h2>
        </a>
    @endforeach
@endsection
