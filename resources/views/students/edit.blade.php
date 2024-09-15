@extends('layouts.app')

@section('title', 'Edit Student')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-lg">
    <h1 class="text-2xl font-bold mb-4">Edit Student</h1>
    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')

        <x-input label="First Name" name="first_name" value="{{ $student->first_name }}" required />
        <x-input label="Last Name" name="last_name" value="{{ $student->last_name }}" required />
        <x-input label="Email" name="email" type="email" value="{{ $student->email }}" required />
        <x-input label="Date of Birth" name="date_of_birth" type="date" value="{{ $student->date_of_birth }}" required />
        <x-input label="Roll Number" name="roll" value="{{ $student->roll }}" required />
        <x-input label="Religion" name="religion" value="{{ $student->religion }}" required />
        <x-input label="Class" name="class" value="{{ $student->class }}" required />
        <x-input label="Section" name="section" value="{{ $student->section }}" required />
        <x-input label="Admission ID" name="admission_id" value="{{ $student->admission_id }}" required />
        <x-input label="Phone Number" name="phone_number" type="tel" value="{{ $student->phone_number }}" required />
        
        <div class="mb-4">
            <label for="gender" class="block text-sm font-medium text-gray-700">Gender</label>
            <select name="gender" id="gender" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <option value="Male" {{ $student->gender == 'Male' ? 'selected' : '' }}>Male</option>
                <option value="Female" {{ $student->gender == 'Female' ? 'selected' : '' }}>Female</option>
            </select>
            @error('gender')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
        </div>
    </form>
</div>
@endsection
