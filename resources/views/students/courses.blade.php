@extends('layouts.app')

@section('content')
    <h1>Select Course to View Students</h1>
    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 15px; margin-top: 30px;">
        @foreach ($courses as $course)
            <a href="{{ route('students.byCourse', $course) }}" class="btn" style="text-align: center;">
                {{ $course }}
            </a>
        @endforeach
    </div>
@endsection