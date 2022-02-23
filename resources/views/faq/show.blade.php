@extends ('layout')

@section ('content')
    <h2>{!!$faq->question;!!}</h2>
    <main>
        <p>
            {!!$faq->answer;!!}
        </p>
    </main>
@endsection
