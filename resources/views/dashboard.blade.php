<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- STATS CARD -->
            <div class="row mb-4">

                <div class="col-md-4">
                    <div class="bg-primary text-white p-4 rounded">
                        <h4>Total Students</h4>
                        <h2>{{ $totalStudents }}</h2>
                    </div>
                </div>

            </div>

            <!-- LATEST STUDENTS -->
            <div class="bg-white p-6 rounded shadow">
                <h3 class="text-lg font-bold mb-4">Latest Students</h3>

                <ul>
                    @foreach($latestStudents as $student)
                        <li>
                            {{ $student->name }} - {{ $student->email }}
                        </li>
                    @endforeach
                </ul>
            </div>

        </div>
    </div>
</x-app-layout>