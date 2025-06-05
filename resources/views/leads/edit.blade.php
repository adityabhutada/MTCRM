@extends('layouts.app')
@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Edit Lead</h1>
    <form action="{{ route('leads.update', $lead) }}" method="POST">
        @method('PUT')
        @include('leads.form', ['lead' => $lead])
    </form>
</div>
@endsection
