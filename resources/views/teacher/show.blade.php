<x-app-layout>


    {{-- @section('content_header')
        <h1>Information {{ $name_group }}</h1>
    @stop --}}

    <div class="card">

        <div class="card-header">
            <div class="row">
                <h2 class="h5">Information {{ $name_group }}</h2>
                <h2><strong>Course: </strong>{{ $group->course }}</h2>
            </div>
        </div>

        <div class="card-body">
            <h2 class="h5">List Student</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>email</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->id }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->email }}</td>
                            <td width="10px">
                                <a class="btn btn-primary btn-md" href="{{ route('tracing', ['id' => $student, 'id_g' => $group]) }}">Tracing</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <x-slot:footer>
        <div class="grupo-2">
            <small>&copy; 2022 <b>Barber Academy</b> - All rights reserved.</small>
        </div>
    </x-slot:footer>
</x-app-layout>



    <style>
        .body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            background: linear-gradient(0deg, rgba(84, 49, 27) 0%, rgb(255, 255, 255) 150%);
        }

        .dark {
            background: #1f1f1f;
            color: #f1eded;
            transition: all 1.5s ease;
        }

        .navi {
            background-color: #272727;
        }

        .barber {
            background: rgba(84, 49, 27);
        }

        .back {
            background: linear-gradient(0deg, rgba(84, 49, 27) 0%, rgb(255, 255, 255) 150%);
        }

        .centering {
            text-align: center;
        }

        .anime {
            animation-duration: 3s;
            animation-name: slidein;
            animation-iteration-count: infinite;
            animation-direction: alternate;
        }

        .h1 {
            text-shadow:
                3px 3px 1px #272727,
                5px 5px 2px white,
                8px 8px 3px rgba(84, 49, 27);
            ;
        }

        .text-gradient {
            color: transparent;
            background-image: linear-gradient(to left, #272727, #3498db, rgba(84, 49, 27));
            background-clip: text;
            animation: color 5s linear infinite;
            background-size: 500%;
        }

        @keyframes color {
            from {
                background-position: 0% 50%;
            }

            to {
                background-position: 100% 50%;
            }
        }
    </style>