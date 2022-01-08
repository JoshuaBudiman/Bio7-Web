@extends('layouts.main')

@section('main_content')
<div class="container-sm text-center">
<img class="img-fluid" src="img/logoBIO.png" alt="" width="150">
    <div class="container-sm text-center text-white fs-1">
        Soal {{$stage['stage']}}
    </div>
</div>

<div class="container pt-5 my-5 text-white">

    @foreach ($stage->soals as $soal)
        <h3>{{$loop->iteration}}.
            {{$soal->soal_text}}</h3>
            <br>
            @foreach ($soal->opsiJawabans as $opsi)
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                    <h4>{{$opsi['opsi_jawaban']}}</h4>
                </label>
              </div>
            <br>
            @endforeach
    @endforeach

    <br>
    <div class="container-sm text-center text-white fs-1">
    <button class="btn btn-warning m-5 p-3">
        <h4>Finish</h4>
    </button>
</div>

</div>
@endsection
