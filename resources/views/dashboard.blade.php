<x-app-layout>

    <x-slot name="header">

        <h2 class="font-semibold text-xl text-gray-800">
            Dashboard
        </h2>

    </x-slot>



    <div class="py-6">


        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


            <div class="row">


                <div class="col-md-4">

                    <div class="bg-primary text-white p-4 rounded shadow">


                        <h4>
                            Total Students
                        </h4>


                        <h1>
                            {{ $totalStudents }}
                        </h1>


                    </div>

                </div>



                <div class="col-md-4">

                    <div class="bg-success text-white p-4 rounded shadow">


                        <h4>
                            My Role
                        </h4>


                        <h1>
                            {{ auth()->user()->role }}
                        </h1>

                    </div>
                </div>

                <div class="col-md-4">

                    <div class="bg-warning p-4 rounded shadow">

                        <h1>
                            {{ auth()->user()->name }}
                        </h1>

                    </div>
                </div>
            </div>

            <div class="bg-white p-6 rounded shadow mt-5">

                <h3 class="mb-3">
                    Latest Students
                </h3>

                <table class="table">


                    <tr>

                        <th>Name</th>

                        <th>Email</th>

                    </tr>

                    @foreach($latestStudents as $student)

                        <tr>

                            <td>
                                {{ $student->name }}
                            </td>

                            <td>
                                {{ $student->email }}
                            </td>

                        </tr>

                    @endforeach

                </table>
            </div>
        </div>
    </div>

</x-app-layout>