@extends('layouts.main')

@section('main_content')
<div class="container-sm text-center">
<br>
    @foreach ($studentDetails as $stdDetail)
    <div class="container text-white fs-4" >
    <img class ="img-fluid" src="{{$stdDetail['student_profpic']}}" alt=""> 
    <br>
    </div>

@endforeach
<div class="row text-white fw-bold fs-3">
    <b>History List</b>
    <table class="table table-danger text-dark fs-5">
        <thead>
            <tr>
                <th scope="col">Bab</th>
                <th scope="col">Level</th>
                <th scope="col">Score</th>
            </tr>
        </thead>
        <tbody>
            @php $index = 1 @endphp
            <tr>
                <td>1</td>
                <td>3</td>
                <td>10/10</td>
            </tr>
            {{--  @foreach ($historys as $history)
                <tr>
                    <td>{{$history['score']}}/td>
                    <td>1{{$history['student_id']}}/td>
                    <td>1{{$history['stage_id']}}/td>
                </tr>
            @endforeach  --}}
        </tbody>
    </table>
</div>
</div>
@endsection
