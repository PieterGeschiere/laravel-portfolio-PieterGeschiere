@extends ('layout')


@section ('content')
    <h2>{!!$faq->question;!!}</h2>
    <main>
        <p>
            {!!$faq->answer;!!}
            <a href="{{ route('faq.edit', $faq)}}">Edit</a>
        </p>
    </main>
@endsection
