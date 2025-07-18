<h1>コスメ登録</h1>

@if(session('success'))
<p>{{ session('success') }}</p>
@endif

<form action="{{ route('cosmetics.store') }}" method="POST">
    @csrf
    <label>商品名</label>
    <input type="text" name="name" required><br>

    <label>ブランド</label>
    <input type="text" name="brand"><br>

    <label>カテゴリ</label>
    <input type="text" name="category"><br>

    <label>使用期限</label>
    <input type="date" name="expiration_date"><br>

    <button type="submit">登録する</button>
</form>