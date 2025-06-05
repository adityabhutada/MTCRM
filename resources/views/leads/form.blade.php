@csrf
<div class="mb-4">
    <label class="block">Name</label>
    <input type="text" name="name" value="{{ old('name', $lead->name ?? '') }}" class="border p-2 w-full">
</div>
<div class="mb-4">
    <label class="block">Email</label>
    <input type="email" name="email" value="{{ old('email', $lead->email ?? '') }}" class="border p-2 w-full">
</div>
<div class="mb-4">
    <label class="block">Phone</label>
    <input type="text" name="phone" value="{{ old('phone', $lead->phone ?? '') }}" class="border p-2 w-full">
</div>
<div class="mb-4">
    <label class="block">Status</label>
    <select name="status" class="border p-2 w-full">
        @foreach(['New','Qualified','Sale Made'] as $status)
            <option value="{{ $status }}" @selected(old('status', $lead->status ?? 'New')==$status)>{{ $status }}</option>
        @endforeach
    </select>
</div>
<button type="submit" class="bg-green-500 text-white px-4 py-2">Save</button>
