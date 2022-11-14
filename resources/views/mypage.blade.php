@extends('layouts.default')

@section('content')
<div class="name">
  <h2>{{ $user->name }}さん</h2>
</div>
<div class="reservation">
  <h3>予約情報</h3>
  @foreach($resavations as $resavation)
  <div class="resarvation-card">
    <h4>予約</h4>
    <table>
      <tr>
        <th>Shop</th>
        <td>{{ $resavation->shop->shop }}</td>
      </tr>
      <tr>
        <th>Date</th>
        <td>{{ $resarvation->date }}</td>
      </tr>
      <tr>
        <th>Time</th>
        <td>{{ $resarvation->time }}</td>
      </tr>
      <tr>
        <th>Number</th>
        <td>{{ $resarvation->number }}</td>
      </tr>
    </table>
  </div>
</div>
<div class="favorite">
  <h3>お気に入り店舗</h3>
  @foreach($favorites as $favorite)
  <div class="shop_card">
    <h4>{{ $favorite->shop->shopName }}</h4>
    <div class="shop_card-info">
      <a href="/area/{{ $shop->area_id }}">#{{ $shop->area->area }}</a>
      <a href="/area/{{ $shop->category_id }}">#{{ $shop->category->category }}</a>
    </div>
    <div class="shop_card-btn">
      <a href="/shop/{{ $shop->id }}">詳しく見る</a>
    </div>
    <div class="shop_card-fav"></div>
  </div>
</div>
@endsection