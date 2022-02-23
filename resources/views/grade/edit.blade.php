@extends ('layout')

@section ('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1>Update Grade</h1>

            <form method="POST" action="{{route('grade.update', $grade->id);}}">
                @csrf
                @method('PUT')

                <div class="field">
                    <label class="label" for="">Course name</label>

                    <div class="control">
                        <input class="input" type="text" name="course_name" id="course_name" required value="{{ $grade->course_name }}">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="test_name">test name</label>

                    <div class="control">
                        <textarea class="textarea" name="test_name" id="test_name" required>{{ $grade->test_name }}</textarea>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="test_name">Best grade</label>

                    <div class="control">
                        <textarea class="textarea" name="best_grade" id="best_grade" required>{{ $grade->best_grade }}</textarea>
                    </div>
                </div>

                <div class="field is-grouped"
                    <div class="control">
                        <button class="button is-link" type="submit">Submit</button>
                    </div>
                </div>

            </form>
            <form method="POST" action="{{route('grade.destroy', $grade->id);}}">
                @csrf
                @method('DELETE')

                <button type="submit">Delete</button>
            </form>
        </div>
    </div>
@endsection
