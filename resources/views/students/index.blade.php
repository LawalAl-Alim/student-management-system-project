@extends('layouts.app')

@section('content')
    <h1>Students in {{ $course ?? 'All Courses' }}</h1>
    <a href="{{ route('students.create') }}" class="btn">Add New Student</a>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Matric Number</th>
                <th>Course</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->matric_number }}</td>
                <td>{{ $student->course }}</td>
                <td style="display: flex; gap: 10px;">
    <a href="{{ route('students.edit', $student->id) }}" class="btn">Edit</a>
    <form action="{{ route('students.destroy', $student->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection