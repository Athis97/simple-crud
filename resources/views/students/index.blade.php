@extends('layouts.app')

@section('title', 'Students')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-lg dark:bg-gray-800 dark:text-white">
        <div class="flex justify-between mb-4">
            <h1 class="text-2xl font-bold dark:text-white">Students</h1>
            <a href="{{ route('students.create') }}"
                class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">Create</a>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            @empty($students)
                <p class="text-gray-500 dark:text-gray-400 text-center py-4">No students found.</p>
            @else
                <table class="w-full overflow-scroll text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th class="py-3 px-4 border-b dark:border-gray-600">Name</th>
                            <th class="py-3 px-4 border-b dark:border-gray-600">Email</th>
                            <th class="py-3 px-4 border-b dark:border-gray-600">Class</th>
                            <th class="py-3 px-4 border-b dark:border-gray-600">Section</th>
                            <th class="py-3 px-4 border-b dark:border-gray-600">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                            <tr class="hover:bg-gray-100 dark:hover:bg-gray-700 transition">
                                <td class="py-2 px-4 border-b dark:border-gray-600">{{ $student->first_name }}
                                    {{ $student->last_name }}</td>
                                <td class="py-2 px-4 border-b dark:border-gray-600">{{ $student->email }}</td>
                                <td class="py-2 px-4 border-b dark:border-gray-600">{{ $student->class }}</td>
                                <td class="py-2 px-4 border-b dark:border-gray-600">{{ $student->section }}</td>
                                <td class="py-2 px-4 border-b dark:border-gray-600 flex space-x-2">
                                    <a href="{{ route('students.edit', $student->id) }}"
                                        class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">Edit</a>
                                    <form action="{{ route('students.destroy', $student->id) }}" method="POST"
                                        class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endempty
        </div>
    </div>

@endsection
