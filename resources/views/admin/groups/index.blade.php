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
                            <td width="10px">
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
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> </script>
@stop