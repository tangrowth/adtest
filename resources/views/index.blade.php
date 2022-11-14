@extends('layouts.default')

@section('content')
<div class="search-box">
  <form action="search" method="POST">
    @csrf
    <div class="search_area">
      <select name="area">
        <option value="">All area</option>
        @foreach($areas as $area)
        <option value="{{ $area->id }}">{{ $area->area }}</option>
        @endforeach
      </select>
    </div>
    <div class="search_category">
      <select name="category">
        <option value="">All genre</option>
        @foreach($categories as $category)
        <option value="{{ $category->id }}">{{ $category->category }}</option>
        @endforeach
      </select>
    </div>
    <div class="search_word">
        <input type="text" name="input" value="{{$input}}">
    </div>
    <input type="submit" value="検索" class="search_btn">
  </form>
</div>

<div class="shop">
  @foreach($shops as $shop)
  <div class="shop_card">
    <div class="shop_card-title">
      <h2>{{ $shop->shop }}</h2>
    </div>
    <div class="shop_card-info">
      <a href="/area/{{ $shop->area_id }}">#{{ $shop->area->area }}</a>
      <a href="/area/{{ $shop->category_id }}">#{{ $shop->category->category }}</a>
    </div>
    <div class="shop_card-btn">
      <a href="/shop/{{ $shop->id }}">詳しく見る</a>
    </div>
    <div class="shop_card-fav"></div>
  </div>
  @endforeach
</div>
@endsection