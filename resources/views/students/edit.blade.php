@extends('layouts.app')

@section('content')

<h2>Edit Student</h2>

<form method="POST" action="/students/{{ $student->id }}">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" value="{{ $student->name }}" class="form-control">
    </div>

    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" value="{{ $student->email }}" class="form-control">
    </div>

    <button class="btn btn-primary">Update</button>
</form>
