@extends('layouts.app')

@section('content')
    <h1>Welcome to Blank School Management System</h1>
    <p>Please choose an option below to proceed:</p>
    <div style="display: flex; gap: 20px; margin-top: 30px;">
        <a href="{{ route('students.create') }}" class="btn" style="flex: 1; text-align: center;">Add New Student</a>
        <a href="{{ route('courses') }}" class="btn" style="flex: 1; text-align: center;">View Students by Course</a>
    </div>
@endsection