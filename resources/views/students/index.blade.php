<h1>Student List</h1>

<a href="students/create">Add Student</a>

<ul>
    @foreach(students as student)
        <li> {{ $student->name }} - {{ $student->email }}
            <a href="students/{{ $student->id }}/edit">Edit</a>
            <form action="/students/{{ $student->id }}" method="POST" style="display: inline">
                @csrf
                @method('delete');
                <button type="submit">Delete</button>
            </form>
        </li>
    @endforeach
</ul>