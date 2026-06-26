<x-app-layout>

<x-slot name="header">

<h2>
    Create Student
</h2>

</x-slot>

<div class="py-6">

    <div class="max-w-7xl mx-auto">

        <form method="POST"
        action="/students">

            @csrf

                <input class="form-control mb-3"
                name="name" placeholder="Name">

                <input class="form-control mb-3"
                name="email" placeholder="Email">

            <button class="btn btn-success">
                Create
            </button>

        </form>
    </div>
</div>


</x-app-layout>