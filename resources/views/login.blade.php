@extends('layouts.template')

@section('title', 'ログイン')
@include('layouts.head')

@section('content')
<div>
    <form method="POST" action="{{ route('works.login') }}">
        @csrf
        <div>
            <label for="email">メールアドレス</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}">
            @error('email')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="password">パスワード</label>
            <input type="password" name="password" id="password">
            @error('password')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <button type="submit">ログイン</button>
</div>
@endsection
