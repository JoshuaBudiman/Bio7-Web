@extends('layouts.main')

@section('main_content')
<div class="container-sm text-center">
<br>
    <img class="text-center" src="img/user.jpg" alt="User profile picture">
    @foreach ($studentDetails as $studentDetail)
    <a class="btn btn-warning m-5 p-3" href="{{route('detailStudent.show', $studentDetail->student_detail_id)}}">
    <h2>Bab {{$studentDetail['student_profpic']}}</h2>
    </a>
@endforeach

</div>
@endsection
