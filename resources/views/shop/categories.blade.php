@extends('master')

@section('title')
    Locoroco
@endsection

@section('content')
<link rel="stylesheet" type="text/css" href="{{ URL::to('src/css/component.css') }}" />
<div class="container demo-3">
    <ul class="grid cs-style-4">
        @foreach($SubCategories as $SubCategory)
            <h2 class="category_name"> Sub-Categories about {{str_replace('_', ' & ', $SubCategory->category)}}</h2>
            @foreach(json_decode($SubCategory->subcategory,true) as $sub)
                <li>
                    <div class="category">
                        <a href="{{route('shop.products','cat='.$SubCategory->category.'&'.'subCat='.$sub['name'])}}">
                            <img src="{{$sub['img']}}" alt="{{$sub['name']}}">
                        </a>
                        <div class="cat_Descr">{{$sub['name']}}</div>
                    </div>
                </li>
            @endforeach
        @endforeach
    </ul>
</div>
@endsection