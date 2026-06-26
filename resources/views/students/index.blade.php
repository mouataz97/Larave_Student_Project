<x-app-layout>


<x-slot name="header">

<h2 class="font-semibold text-xl text-gray-800">
    Students Management
</h2>

</x-slot>



<div class="py-6">


<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">



@if(auth()->user()->role == 'admin')

<a href="/students/create"
class="inline-flex items-center px-6 py-3 mb-6 mt-4 bg-green-600 text-white font-medium rounded-lg shadow hover:bg-green-700 transition">
    + Add Student
</a>

@endif





<div class="bg-white p-6 rounded shadow">


<table class="table mt-3">


<tr>

<th>Name</th>

<th>Email</th>

<th>Action</th>

</tr>



@foreach($students as $student)


<tr>


<td>
{{ $student->name }}
</td>


<td>
{{ $student->email }}
</td>



<td>


@if(auth()->user()->role == 'admin')


<a href="/students/{{ $student->id }}/edit"
class="px-4 py-2 bg-yellow-500 text-black rounded-lg shadow hover:bg-yellow-600 transition">
    Edit
</a>




<form action="/students/{{ $student->id }}"
method="POST"
style="display:inline">


@csrf

@method('DELETE')

<button class="px-4 py-2 bg-red-600 text-white rounded-lg shadow hover:bg-red-700 transition">
    Delete
</button>


</form>


@endif



</td>


</tr>


@endforeach



</table>


</div>


</div>


</div>


</x-app-layout>