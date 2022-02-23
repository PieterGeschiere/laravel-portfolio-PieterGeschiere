@extends ('layout')

@section ('content')
    <h2>{!!$grade->course_name;!!}</h2>
    <main>
        <p>
            {!!$grade->test_name;!!}
        </p>
    </main>
@endsection
