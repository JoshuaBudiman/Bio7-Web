@extends('layouts.main')

@section('main_content')
<div class="container-sm text-center">
<img class="img-fluid" src="img/logoBIO.png" alt="" width="150">
    <div class="container-sm text-center text-white fs-1">
        Soal {{$stage['stage']}}
    </div>
</div>

<div class="container pt-5 my-5 text-white ">

    @foreach ($stage->soals as $soal)
        <h3>{{$loop->iteration}}.
            {{$soal->soal_text}}</h3>

            @foreach ($soal->opsiJawabans as $opsi)
            <button class="btn btn-warning m-2 p-2">
                <h4>{{$opsi['opsi_jawaban']}}</h4>
            </button>
            <br>
            @endforeach
    @endforeach

</div>
@endsection
