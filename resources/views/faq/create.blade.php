@extends ('layout')

@section ('content')
<div class="content">
    <div id="wrapper">
        <div id="page" class="container">
            <h1>New Article</h1>

            <form method="POST" action="/faq">
                @csrf

                <div class="field">
                    <label class="label" for="">Title</label>

                    <div class="control">
                        <input class="input" type="text" name="question" id="question"
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="answer">Answer</label>

                    <div class="control">
                        <textarea class="textarea" name="answer" id="answer"></textarea>
                    </div>
                </div>

                <div class="field is-grouped"
                    <div class="control">
                        <button class="button is-link" type="submit">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
