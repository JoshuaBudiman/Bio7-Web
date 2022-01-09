@extends('layouts.main')

@section('main_content')
<div class="text-center container-sm">
    <img class="img-fluid mx-auto d-block" src="img/logoBIO.png" alt="" width="246">
</div>
<div class="text-center container-sm ">
    <a class="btn btn-danger align-center text-white fw-bold" href="{{route('material.index')}}">
        <img class="img-fluid mx-auto d-block rounded-corners" src="img/materiicon.png" alt="" width="150" >Materi
    </a>

    <a class="btn btn-danger align-center text-white fw-bold" href="{{route('bab.index')}}">
        <img class="img-fluid mx-auto d-block" src="img/quizicon.png" alt="" width="150">Quiz
    </a>
</div>
@endsection

