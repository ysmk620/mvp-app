@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">コスメ登録</h1>

@if(session('success'))
<p>{{ session('success') }}</p>
@endif

<form action="{{ route('cosmetics.store') }}" method="POST" class="bg-white p-6 rounded shadow">
    @csrf
    <div class="mb-4">
        <label class="block mb-1">商品名</label>
        <input type="text" name="name" required
            class="w-full border rounded px-3 py-2">
    </div>
    <div class="mb-4">
        <label class="block mb-1">ブランド</label>
        <input type="text" name="brand" class="w-full border rounded px-3 py-2">
    </div>
    <div class="mb-4">
        <label for="category_id" class="block text-sm font-medium text-gray-700">カテゴリ</label>
        <select name="category_id" id="category_id"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
            <option value="">選択してください</option>
            @foreach($categories as $category)
            <option value="{{ $category->id ?? $category }}">
                {{ $category->name ?? $category }}
            </option>
            @endforeach
        </select>
        @error('category_id')
        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-6">
        <label class="block mb-1">使用期限</label>
        <input type="date" name="expiration_date" class="w-full border rounded px-3 py-2">
    </div>
    <button type="submit"
        class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
        登録する
    </button>
</form>
@endsection