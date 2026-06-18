<h1>Edit Student</h1>

<form method="POST" action="/students"
    {{ $student->id}} >
    
    @csrf
    @method('PUT')

    <input type="text" name="name" placeholder="Name" value="{{ $student->name}}">
    <br><br>

    <input type="email" name="email" placeholder="Email" value="{{ $student->email}}">
    <br><br>

    <button type="submit">Update</button>
</form>