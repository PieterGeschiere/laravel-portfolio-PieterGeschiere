@extends ('layout')

@section ('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1>New Grade</h1>

            <form method="POST" action="{{route('grade.create');}}">
                @csrf

                <div class="field">
                    <label class="label" for="">Course name</label>

                    <div class="control">
                        <input class="input" type="text" name="course_name" id="course_name" required>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="test_name">Test name</label>

                    <div class="control">
                        <textarea class="textarea" name="test_name" id="test_name"></textarea>
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
@endsection
