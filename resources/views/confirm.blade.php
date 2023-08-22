@extends('layouts.template')

@section('title', '確認')
@include('layouts.head')

@section('content')

<div>
    <p>以下の内容で登録します。</p>
</div>
<div>
    <p>
        名前:{{ $work->member->name}}<br>
        日付:{{ $work->date}}<br>
        勤務時間:{{ $work->start_time}} - {{ $work->end_time}}<br>
        休憩時間:{{ $work->break_time}}分<br>
        時間外労働:{{ $work->overtime_hour}}分<br>


@endsection
