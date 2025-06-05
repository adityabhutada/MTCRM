@extends('layouts.app')
@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">New Lead</h1>
    <form action="{{ route('leads.store') }}" method="POST">
        @include('leads.form')
    </form>
</div>
@endsection
