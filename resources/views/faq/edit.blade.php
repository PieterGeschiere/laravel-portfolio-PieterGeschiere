@extends ('layout')

@section ('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1>Update Question</h1>

            <form method="POST" action="{{route('faq.update', $faq->id);}}">
                @csrf
                @method('PUT')

                <div class="field">
                    <label class="label" for="">Title</label>

                    <div class="control">
                        <input class="input" type="text" name="question" id="question" required value="{{ $faq->question }}">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="answer">Answer</label>

                    <div class="control">
                        <textarea class="textarea" name="answer" id="answer" required>{{ $faq->answer }}</textarea>
                    </div>
                </div>

                <div class="field is-grouped"
                    <div class="control">
                        <button class="button is-link" type="submit">Submit</button>
                    </div>
                </div>

            </form>
            <form method="POST" action="{{route('faq.destroy', $faq->id);}}">
                @csrf
                @method('DELETE')

                <button type="submit">Delete</button>
            </form>
        </div>
    </div>
@endsection
