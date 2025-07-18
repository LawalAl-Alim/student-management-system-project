@extends('layouts.app')

@section('content')
    <h1>Add Student</h1>
    <form method="POST" action="{{ route('students.store') }}">
        @csrf
        Name: <input type="text" name="name"><br>
        Email: <input type="email" name="email"><br>
        Matriculation Number: <input type="text" name="matric_number"><br><br>

        <label for="course">Course:</label>
        <select name="course" id="course">
            <option value="Computer Science">Computer Science</option>
            <option value="Business Administration">Business Administration</option>
            <option value="Engineering">Engineering</option>
            <option value="Medicine">Medicine</option>
            <option value="Law">Law</option>
            <option value="Accounting">Accounting</option>
            <option value="Psychology">Psychology</option>
            <option value="Economics">Economics</option>
            <option value="Architecture">Architecture</option>
            <option value="Mass Communication">Mass Communication</option>
        </select><br><br>

        <button type="submit">Add</button>
    </form>
@endsection