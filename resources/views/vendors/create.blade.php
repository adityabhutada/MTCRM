@extends('layouts.app')
@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">New Vendor</h1>
    <form action="{{ route('vendors.store') }}" method="POST">
        @include('vendors.form')
    </form>
</div>
@endsection
