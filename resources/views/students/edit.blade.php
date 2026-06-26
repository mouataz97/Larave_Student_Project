<x-app-layout>


<x-slot name="header">

<h2>
Edit Student
</h2>

</x-slot>



<div class="py-6">

<div class="max-w-7xl mx-auto">


<form method="POST"
action="/students/{{ $student->id }}">


@csrf

@method('PUT')



<label>Name</label>

<input 
class="form-control"
name="name"
value="{{ $student->name }}">



<label>Email</label>

<input 
class="form-control"
name="email"
value="{{ $student->email }}">



<button class="btn btn-primary mt-3">

Update

</button>



</form>


</div>

</div>


</x-app-layout>