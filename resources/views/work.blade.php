@extends('layouts.template')

@section('title', '勤務時間記録')
@include('layouts.head')

@section('content')
<form method="POST" action="{{ route('confirm') }}" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="member_id">名前</label>
        <select name="member_id" id="member_id">
            <option value="">選択してください</option>
            @foreach ($members as $member)
                <option value="{{ $member->id }}">{{ $member->name }}</option>
            @endforeach
        </select>
        @error('member_id')
            <div>{{ $message }}</div>
        @enderror

    </div>
    <div>
        <label for="start_time">開始時間</label>
        <input type="time" name="start_time" id="start_time" step="900" value="{{ $start_time }}">
        @error('start_time')
            <div>{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="end_time">終了時間</label>
        <input type="time" name="end_time" id="end_time" step="900" value="{{ $end_time }}">
        @error('end_time')
            <div>{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="break_time">休憩時間</label>
        <input type="number" name="break_time" id="break_time" min="0" max="60" step="15" value=0>分
        @error('break_time')
            <div>{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="overtime_hour">時間外労働</label>
        <input type="number" name="overtime_hour" id="overtime_hour" min="0" max="180" step="15" value=0>分
        @error('overtime_hour')
            <div>{{ $message }}</div>
        @enderror
    </div>
    <button type="submit">登録</button>
</form>

@endsection
