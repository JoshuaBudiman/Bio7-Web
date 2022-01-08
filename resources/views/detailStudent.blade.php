@extends('layouts.main')

@section('main_content')
<div class="container-sm text-center">
<br>
    @foreach ($studentDetails as $stdDetail)
    <div class="container text-white" href="{{route('profile.show', $stdDetail->student_detail_id)}}">
    <img class="text-center" src="{{$stdDetail['student_profpic']}}"
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
                    <td>5</td>
                    <td>score</td>
                </tr>

        </tbody>
    </table>
</div>

</div>
@endsection
