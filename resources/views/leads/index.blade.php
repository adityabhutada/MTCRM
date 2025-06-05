@extends('layouts.app')
@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Leads</h1>
    <a href="{{ route('leads.create') }}" class="bg-blue-500 text-white px-4 py-2">New Lead</a>
    <table class="min-w-full mt-4">
        <thead>
            <tr>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Email</th>
                <th class="px-4 py-2">Phone</th>
                <th class="px-4 py-2">Status</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        @foreach($leads as $lead)
            <tr>
                <td class="border px-4 py-2">{{ $lead->name }}</td>
                <td class="border px-4 py-2">{{ $lead->email }}</td>
                <td class="border px-4 py-2">{{ $lead->phone }}</td>
                <td class="border px-4 py-2">{{ $lead->status }}</td>
                <td class="border px-4 py-2">
                    <a href="{{ route('leads.edit', $lead) }}" class="text-blue-500 mr-2">Edit</a>
                    <form action="{{ route('leads.destroy', $lead) }}" method="POST" class="inline">
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
