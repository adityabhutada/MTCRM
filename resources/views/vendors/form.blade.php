@csrf
<div class="mb-4">
    <label class="block">Name</label>
    <input type="text" name="name" value="{{ old('name', $vendor->name ?? '') }}" class="border p-2 w-full">
</div>
<div class="mb-4">
    <label class="block">Email</label>
    <input type="email" name="contact_email" value="{{ old('contact_email', $vendor->contact_email ?? '') }}" class="border p-2 w-full">
</div>
<div class="mb-4">
    <label class="block">Phone</label>
    <input type="text" name="phone" value="{{ old('phone', $vendor->phone ?? '') }}" class="border p-2 w-full">
</div>
<button type="submit" class="bg-green-500 text-white px-4 py-2">Save</button>
