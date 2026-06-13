<h1>Add Student</h1>

<form method="POST" action="/students">
    @csrf

    <input type="text" name="name" placeholder="Name">
    <br><br>

    <input type="email" name="email" placeholder="Email">
    <br><br>

    <button type="submit">Save</button>
</form>