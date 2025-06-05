@extends('layouts.app')
@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Edit Vendor</h1>
    <form action="{{ route('vendors.update', $vendor) }}" method="POST">
        @method('PUT')
        @include('vendors.form', ['vendor' => $vendor])
    </form>
</div>
@endsection
