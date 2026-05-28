<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Edit Sale Item</title>
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-3xl mx-auto bg-white p-6 rounded-xl shadow">
        <div class="mb-6 flex items-center justify-between">
            <div>
                <h1 class="text-2xl font-bold text-orange-600">Edit Sale Item</h1>
                <p class="text-sm text-gray-600">Update the fields and save your changes.</p>
            </div>
            <a href="{{ route('item-sale.index') }}" class="rounded-lg bg-gray-200 px-4 py-2 text-sm text-gray-800 hover:bg-gray-300">Back to list</a>
        </div>

        @if($errors->any())
            <div class="mb-4 rounded-lg bg-red-50 p-4 text-red-700">
                <ul class="list-disc space-y-1 pl-5">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('item-sale.update', $item->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')
            <div>
                <label class="block text-sm font-medium text-gray-700">Item Code</label>
                <input type="text" name="item_code" value="{{ old('item_code', $item->item_code) }}" maxlength="6" class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500" required>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Item Name</label>
                <input type="text" name="item_name" value="{{ old('item_name', $item->item_name) }}" maxlength="50" class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500" required>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Quantity</label>
                <input type="number" name="quantity" value="{{ old('quantity', $item->quantity) }}" step="0.01" class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500" required>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Expired Date</label>
                <input type="date" name="expried_date" value="{{ old('expried_date', $item->expried_date) }}" class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500" required>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Note</label>
                <textarea name="note" rows="3" maxlength="60" class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500">{{ old('note', $item->note) }}</textarea>
            </div>
            <div class="flex items-center gap-3 pt-2">
                <button type="submit" class="rounded-lg bg-orange-600 px-5 py-3 text-sm font-semibold text-white hover:bg-orange-700">Update Item</button>
                <a href="{{ route('item-sale.index') }}" class="rounded-lg border border-gray-300 px-5 py-3 text-sm text-gray-700 hover:bg-gray-50">Cancel</a>
            </div>
        </form>
    </div>
</body>
</html>
