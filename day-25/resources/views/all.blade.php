{{--<h1>This is a heading</h1>--}}

{{--data_Share--}}
{{--<h1>{{$data}}</h1>--}}
{{--<h1>{{$tarok}}</h1>--}}

{{--for printing model data--}}

@foreach($students as $student)
    <h1>{{$student['name']}}</h1>
@endforeach
