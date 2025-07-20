@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">コスメ一覧</h1>

@if(session('success'))
<p>{{ session('success') }}</p>
@endif

<table border="1" cellpadding="8">
    <thead>
        <tr>
            <th>商品名</th>
            <th>ブランド</th>
            <th>カテゴリ</th>
            <th>使用期限</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cosmetics as $cosmetic)
        <tr
            @if($cosmetic->expiration_date && $cosmetic->expiration_date < \Carbon\Carbon::today()->toDateString())
                style="color: red;"
                @endif
                >
                <td>{{ $cosmetic->name }}</td>
                <td>{{ $cosmetic->brand }}</td>
                <td>{{ $cosmetic->category->name ?? '未設定' }}</td>
                <td>{{ $cosmetic->expiration_date }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection