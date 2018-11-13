
@extends('admin.layouts.app')
@section('content')
<h1>注文一覧</h1>
<h1>詳細検索</h1>


<table class="table">
    <thead>
    <tr>
        <th scope="col">NO(注文番号)</th>
        <th scope="col">注文日</th>
        <th scope="col">会社名</th>
        <th scope="col"></th>

    </tr>
    </thead>
    <tbody>

    <tr>
        <th 1="row">1</th>
        <td>15</td>
        <td>uehonmachi</td>
        <th><a href="{{ url('/admin/order/detail') }}">詳細</a></th>
    </tr>
    <tr>
        <th 2="row">2</th>
        <td>18</td>
        <td>nanba</td>
        <th></th>
    </tr>
    </tbody>
</table>

@endsection