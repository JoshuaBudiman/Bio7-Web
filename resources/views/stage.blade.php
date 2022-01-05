@extends('layouts.main')

@section('main_content')
<div class="container-sm">
    <img class="img-fluid" src="img/logoBIO.png" alt="" width="128">
</div>
<br>
<div class="container pt-5 my-5">

    @foreach ($stages as $stage)
    <button class="btn btn-warning m-5 p-3">
        <h2>{{$stage['stage']}}</h2>
    </button>
    @endforeach
    

</div>
@endsection