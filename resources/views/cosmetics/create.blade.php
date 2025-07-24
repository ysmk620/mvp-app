@extends('layouts.app')

@section('content')
  <div class="max-w-md mx-auto space-y-6">
    <h2 class="text-3xl font-bold text-center text-primary">コスメ登録</h2>

    @if(session('success'))
      <div class="p-4 bg-primary/30 text-text rounded-lg shadow">
        {{ session('success') }}
      </div>
    @endif

    <form action="{{ route('cosmetics.store') }}" method="POST"
          class="bg-white/60 backdrop-blur-sm p-6 rounded-2xl shadow-lg space-y-5">
      @csrf

      {{-- 商品名 --}}
      <div>
        <label class="block mb-1 font-medium text-text text-opacity-80">商品名</label>
        <input type="text" name="name" required
               class="w-full border border-primary rounded-lg px-4 py-2
                      focus:outline-none focus:ring-2 focus:ring-primary/50">
      </div>

      {{-- ブランド --}}
      <div>
        <label class="block mb-1 font-medium text-text text-opacity-80">ブランド</label>
        <input type="text" name="brand"
               class="w-full border border-primary rounded-lg px-4 py-2
                      focus:outline-none focus:ring-2 focus:ring-primary/50">
      </div>

      {{-- カテゴリ --}}
      <div>
        <label class="block mb-1 font-medium text-text text-opacity-80">カテゴリ</label>
        <select name="category_id"
                class="w-full border border-primary rounded-lg px-4 py-2
                       focus:outline-none focus:ring-2 focus:ring-primary/50">
          <option value="">選択してください</option>
          @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
          @endforeach
        </select>
        @error('category_id')
          <p class="mt-1 text-red-600 text-sm">{{ $message }}</p>
        @enderror
      </div>

      {{-- 使用期限 --}}
      <div>
        <label class="block mb-1 font-medium text-text text-opacity-80">使用期限</label>
        <input type="date" name="expiration_date"
               class="w-full border border-primary rounded-lg px-4 py-2
                      focus:outline-none focus:ring-2 focus:ring-primary/50">
      </div>

      {{-- 送信ボタン --}}
      <button type="submit"
              class="w-full text-white font-semibold px-6 py-3 rounded-lg
                     bg-primary hover:bg-secondary transition">
        登録する
      </button>
    </form>
  </div>
@endsection