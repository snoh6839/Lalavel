@extends('layout.layout')
@section('title', '자식 타이틀')
@section('contents')
    <h1>Body</h1>
    <h2>콘텐츠 섹션</h2>
    <p>내용 1</p>
    <p>콘텐츠 끝</p>

    

@endsection

@section('if')
    <h2>if 섹션</h2>

    @if($data['gender'] === '남자')
        <span>남자입니다.</span>
    @elseif($data['address'] === '대구')
        <span>대구사람입니다.</span>
    @else
        <span>조건에 탈락하셨습니다.</span>
    @endif
@endsection

@section('for')
    <h2>for 섹션</h2>
    @for($i = 0; $i < 5; $i++)
        <span>{{$i}}</span>
    @endfor
@endsection

@section('foreach')
    <h2>foreach 섹션</h2>
    @foreach($data as $key => $value)
        <span>{{"count : ".$loop->count." ,iteration : ".$loop->iteration." ,loop : "}}</span>
        <span>{{$key." : ".$value}}</span>
        <br>
    @endforeach
@endsection


@section('forelse')
<h2>forelse 섹션</h2>
    @forelse($data2 as $key => $value) 
        <span>{{$key." : ".$value}}</span>
        <br>
    @empty
        <span>정보가 없습니다.</span>
    @endforelse
@endsection



