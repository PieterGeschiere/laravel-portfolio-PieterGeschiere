@extends ('layout')

@section ('content')
<main>
        <h1>Dashboard</h1>
        <p>
            Hier is een tabel te zien met alle toetsen en de mogelijke studiepunten.
        </p>
        <table>

            <tr>
                <th>Quartile</th>
                <th>Course</th>
                <th>EC</th>
                <th>Exam</th>
                <th>Grade</th>
            </tr>

            @foreach($grades as $grade)
            <tr>
                <td>0</td>
                <td>{{$grade->course_name}}</td>
                <td>yes</td>
                <td>{{$grade->test_name}}</td>
                <td>{{$grade->best_grade}}</td>
            </tr>
            @endforeach
            <tr>
                <td rowspan="3">0</td>
                <td rowspan="3">Personal Professional Development</td>
                <td>12.5 EC</td>
                <td>Porftolio</td>
                <td>-</td>
            </tr>
            <tr>
                <td>1.25 EC</td>
                <td>Personality 1</td>
                <td>-</td>
            </tr>
            <tr>
                <td>1.25 EC</td>
                <td>Personality 2</td>
                <td>-</td>
            </tr>

            <tr>
                <td rowspan="3">1</td>
                <td>Programme and Career Orientation</td>
                <td>2.5 EC</td>
                <td>Assessment Exam</td>
                <td>+</td>
            </tr>
            <tr>
                <td>Computer Science Basics</td>
                <td>5 EC</td>
                <td>Written Exam</td>
                <td>+</td>
            </tr>
            <tr>
                <td>Programming Bascis</td>
                <td>5 EC</td>
                <td>Case Study Exam</td>
                <td>+</td>
            </tr>

            <tr>
                <td rowspan="2">2</td>
                <td rowspan="2"> Object Oriented Programming</td>
                <td rowspan="2"> 10 EC</td>
                <td>Case Study</td>
                <td>+</td>
            </tr>
            <tr>
                <td>Project</td>
                <td>+</td>
            </tr>
            <tr>
                <td rowspan="4">3</td>
                <td>Framework devolopment 1</td>
                <td>5 EC</td>
                <td>Case study</td>
                <td>-</td>
            </tr>

            <tr>
                <td rowspan="3">Framework project 1</td>
                <td rowspan="3">7,5 EC</td>
                <td>Project</td>
                <td>-</td>
            </tr>
            <tr>
                <td>Assessment</td>
                <td>-</td>
            </tr>
            <tr>
                <td>Report</td>
                <td>-</td>
            </tr>

            <tr>
                <td rowspan="3">4 </td>
                <td rowspan="3">Framework Project 2</td>
                <td rowspan="3">10 EC</td>
                <td>Portfolio</td>
                <td>-</td>
            </tr>
            <tr>
                <td>Project</td>
                <td>-</td>
            </tr>
            <tr>
                <td>Assessment</td>
                <td>-</td>
            </tr>
        </table>
        <h2>
            NBSA grens
        </h2>
        <p>
            22,5/45
        </p>
        <p>
            60 maximaal
        </p>
</main>
@endsection
