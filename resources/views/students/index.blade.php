@extends('layouts.app')

@section('content')

<h2>Students List</h2>

<form method="GET" action="/students" class="mb-3">
    <input type="text" name="search" class="form-control"
       placeholder="Search..."
       value="{{ request('search') }}"
       onkeyup="{{ request('search') }}">
</form>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<table class="table table-bordered table-striped mt-3">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>
        @foreach($students as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>
                <a class="btn btn-warning btn-sm" href="/students/{{ $student->id }}/edit">Edit</a>

                <form action="/students/{{ $student->id }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

    <div class="mt-3">
        {{ $students->links() }}
    </div>

</table>
