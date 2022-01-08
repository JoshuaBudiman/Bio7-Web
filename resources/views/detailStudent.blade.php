@extends('layouts.main')

@section('main_content')
<div class="container-sm text-center">
<br>
    <img class="text-center" src="img/user.jpg" alt="User profile picture">
    @foreach ($studentDetails as $stdDetail)
    <a class="btn btn-warning m-5 p-3" href="{{route('profile.show', $stdDetail->student_detail_id)}}">
    <h2>Profile {{$stdDetail['student_profpic']}}</h2>
    </a>
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
                    <td>5</td>
                    <td>score</td>
                </tr>

        </tbody>
    </table>
</div>

</div>
@endsection
