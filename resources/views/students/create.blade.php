@extends('layouts.app')

@section('title', 'Create Student')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-lg">
    <h1 class="text-2xl font-bold mb-4">Create Student</h1>
    <form action="{{ route('students.store') }}" method="POST">
        @csrf

        <x-input label="First Name" name="first_name" required />
        <x-input label="Last Name" name="last_name" required />
        <x-input label="Email" name="email" type="email" required />
        <x-input label="Date of Birth" name="date_of_birth" type="date" required />
        <x-input label="Roll Number" name="roll" required />
        <x-input label="Religion" name="religion" required />
        <x-input label="Class" name="class" required />
        <x-input label="Section" name="section" required />
        <x-input label="Admission ID" name="admission_id" required />
        <x-input label="Phone Number" name="phone_number" type="tel" required />
        
        <div class="mb-4">
            <label for="gender" class="block text-sm font-medium text-gray-700">Gender</label>
            <select name="gender" id="gender" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            @error('gender')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>
        </div>
    </form>
</div>
@endsection
