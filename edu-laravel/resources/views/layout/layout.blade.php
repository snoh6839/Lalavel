<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', '부모 타이틀')</title>
</head>
<body>
    @include('layout.inc.header')

    @yield('contents')

    @section('test')
        <h2>테스트 섹션</h2>
        <p>부모에만 선언</p>
        <p>콘텐츠 끝</p>
    @show

    @yield('if')
    @yield('for')
    @yield('foreach')
    @yield('forelse')

    @include('layout.inc.footer',['key1'=>'key1으로 셋팅함'])

</body>
</html>