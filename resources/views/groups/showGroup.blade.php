@extends('layouts.plantilla')

@section('tittle', 'Group')

@section('content')
    <h1>Welcome to Group {{ $group->name }}</h1>
    <a href="{{ route('group.index') }}">Back to groups</a>
    <br>
    <a href="{{ route('group.edit', $group) }}">Edit group</a>
    <p><strong>Teacher: </strong>{{ $group->teacher }}</p>
    <p><strong>Students: </strong>{{ $group->students }}</p>
    <p><strong>Course: </strong>{{ $group->course }}</p>

    <form action="{{ route('group.destroy', $group) }}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Delete</button>
    </form>
@endsection
