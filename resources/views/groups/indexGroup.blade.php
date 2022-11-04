@extends('layouts.plantilla')

@section('tittle', 'Group Home')

@section('content')
    <h1>Welcome to Groups</h1>

    <a href="{{ route('group.create') }}">Create Group</a>

    <ul>
        @foreach ($groups as $group)
            <li>
                <a href="{{ route('group.show', $group->id) }}">{{ $group->name }}</a>
            </li>
        @endforeach
    </ul>
@endsection
