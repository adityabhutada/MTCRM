@extends('layouts.app')
@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Vendors</h1>
    <a href="{{ route('vendors.create') }}" class="bg-blue-500 text-white px-4 py-2">New Vendor</a>
    <table class="min-w-full mt-4">
        <thead>
            <tr>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Email</th>
                <th class="px-4 py-2">Phone</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        @foreach($vendors as $vendor)
            <tr>
                <td class="border px-4 py-2">{{ $vendor->name }}</td>
                <td class="border px-4 py-2">{{ $vendor->contact_email }}</td>
                <td class="border px-4 py-2">{{ $vendor->phone }}</td>
                <td class="border px-4 py-2">
                    <a href="{{ route('vendors.edit', $vendor) }}" class="text-blue-500 mr-2">Edit</a>
                    <form action="{{ route('vendors.destroy', $vendor) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure?')" class="text-red-500">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
