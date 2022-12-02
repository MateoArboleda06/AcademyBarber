@extends('adminlte::page')

@section('title', 'Admin Groups')

@section('content_header')
    <h1>List Groups</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    <div class="card">

        <div class="card-header">
            <a class="btn btn-secondary" href="{{ route('admin.groups.create') }}">Create Group</a>
            <a class="btn btn-secondary" href="{{ route('form_asigned') }}">Asignement</a>
        </div>

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Teacher</th>
                        <th>Course</th>
                        <th>Schedule</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($groups as $group)
                        <tr>
                            <td>{{ $group->id }}</td>
                            <td>{{ $group->name }}</td>
                            <td>{{ $group->teacher }}</td>
                            <td>{{ $group->course }}</td>
                            <td>{{ $group->schedule }}</td>
                            <td width="10px">
                                <a class="btn btn-primary btn-sm" href="{{ route('list_students', $group->id) }}">See</a>
                            </td>
                            <td width="10px">
                                {{-- <a class="btn btn-primary btn-sm" href="{{ route('list_students', $group->id) }}">See</a> --}}
                                <a class="btn btn-primary btn-sm" href="{{ route('admin.groups.edit', $group) }}">Edit</a>
                            </td>
                            <td width="10px">
                                <form action="{{ route('admin.groups.destroy', $group) }}" method="POST">
                                    @csrf
                                    @method('delete')

                                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                </form>
                            </td>
                            <td>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
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
@stop

@section('js')
    <script> </script>
@stop