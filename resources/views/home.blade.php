<!-- Home Page Layout -->
@extends('layout.app')

@section('content')
    <!-- Hero Section -->
    <section class="bg-blue-600 text-white py-20">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold mb-4">Welcome to Your Dashboard</h1>
        </div>
    </section>

    <!-- Users Table Section -->
    <section class="py-10">
        <div class="container mx-auto p-4">
            <h2 class="text-2xl font-bold mb-4">Users List</h2>

            <!-- Table Component -->
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-lg">
                    <thead class="bg-blue-600 text-white">
                        <tr>
                            <th class="py-3 px-6 text-left">#</th>
                            <th class="py-3 px-6 text-left">Name</th>
                            <th class="py-3 px-6 text-left">Email</th>
                            <th class="py-3 px-6 text-left">Role</th>
                            <th class="py-3 px-6 text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6">1</td>
                            <td class="py-3 px-6">John Doe</td>
                            <td class="py-3 px-6">john@example.com</td>
                            <td class="py-3 px-6">Admin</td>
                            <td class="py-3 px-6 text-center">
                                <a href="/edit/1" class="text-blue-600 hover:text-blue-900 px-2">Edit</a>
                                <a href="/delete/1" class="text-red-600 hover:text-red-900 px-2">Delete</a>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6">2</td>
                            <td class="py-3 px-6">Jane Smith</td>
                            <td class="py-3 px-6">jane@example.com</td>
                            <td class="py-3 px-6">User</td>
                            <td class="py-3 px-6 text-center">
                                <a href="/edit/2" class="text-blue-600 hover:text-blue-900 px-2">Edit</a>
                                <a href="/delete/2" class="text-red-600 hover:text-red-900 px-2">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
