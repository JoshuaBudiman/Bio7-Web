@extends('layouts.main')

@section('main_content')
<div class="container pt-5 my-5">
    <h1 class="text-center">Bab {{$material['bab_material']}}</h1>

    <p>{{$material['desc_material']}}</p>
</div>
@endsection