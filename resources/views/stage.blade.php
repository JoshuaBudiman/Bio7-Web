@extends('layouts.main')

@section('main_content')
<div class="container-sm">
    <img class="img-fluid" src="img/logoBIO.png" alt="" width="128">
</div>
<br>
<div class="container pt-5 my-5">

    @foreach ($bab->stages as $stage)
    <a class="btn btn-warning m-5 p-3" href="{{route('stage.show', $stage->stage_id)}}">
        <h2>{{$stage['stage']}}</h2>
    </a>
    @endforeach


</div>
@endsection
