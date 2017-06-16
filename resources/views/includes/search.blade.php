

<style>
.dropdown.dropdown-lg .dropdown-menu {
    margin-top: -1px;
    padding: 6px 20px;
}
.input-group-btn .btn-group {
    display: flex !important;
}
.btn-group .btn {
    border-radius: 0;
    margin-left: -1px;
}
.btn-group .btn:last-child {
    border-top-right-radius: 4px;
    border-bottom-right-radius: 4px;
}
.btn-group .form-horizontal .btn[type="submit"] {
  border-top-left-radius: 4px;
  border-bottom-left-radius: 4px;
}
.form-horizontal .form-group {
    margin-left: 0;
    margin-right: 0;
}
.form-group .form-control:last-child {
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
}

@media screen and (min-width: 768px) {
    #adv-search {
        width: 500px;
        margin: 0 auto;
    }
    .dropdown.dropdown-lg {
        position: static !important;
    }
    .dropdown.dropdown-lg .dropdown-menu {
        min-width: 500px;
    }
}
</style>

<!-- <div class="search_area">
    {!! Form::open(['route' => 'shop.results', 'method' => 'GET', 'role' => 'search']) !!}
        <div class="align-center">
            <div id="custom-search-input">
                <div class="input-group col-md-12">
                    <input type="text" name="query" class="form-control input-lg" placeholder="Search by title"/>
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-search"></span></button>
                    </span>
                </div>
            </div>
        </div>
    {!! Form::close() !!}
</div> -->

<div class="search_area">
    <div class="align-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="input-group" id="adv-search">
                        
                        <div class="input-group-btn">
                            <div class="btn-group" role="group">      
                                <input type="text" name="query" class="form-control" placeholder="Search by title" />
                                <div class="dropdown dropdown-lg">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
                                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                                     {!! Form::open(['route' => 'shop.results', 'method' => 'GET', 'role' => 'search','class'=>'form-horizontal searchFormUltimate']) !!}
                                       <div class="form-group">
                                           {!! Form::label('Category', 'Filter by Category:') !!}
                                            <select class="form-control" id="category" name="category">
                                                <option selected value="">Please Select a category</option>
                                                @foreach($SubCategories as $SubCategory)
                                                    <option value="{{str_replace('_', ' & ', $SubCategory->category)}}">{{str_replace('_', ' & ', $SubCategory->category)}}</option>
                                                @endforeach
                                            </select>
                                       </div>
                                       <div class="form-group">
                                            {!! Form::label('Subcategory', 'Subcategory:') !!}
                                            <select class="form-control" id="subcategory" name="subcategory">
                                                <option selected value="">Please Select a Subcategory</option>
                                                @foreach($SubCategories as $SubCategory)
                                                    @foreach(json_decode($SubCategory->subcategory,true) as $sub)
                                                        <option data-options="{{str_replace('_', ' & ', $SubCategory->category)}}" value="{{$sub['name']}}">{{$sub['name']}}</option>
                                                    @endforeach
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('MinPrice', 'Min Price:') !!}
                                            <div class="input-group">
                                                <div class="input-group-addon" id="minPrice">$</div>
                                                <input type="text" class="form-control" id="pricefrom">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('MaxPrice', 'Max Price:') !!}
                                            <div class="input-group">
                                                <div class="input-group-addon" id="maxPrice">$</div>
                                                <input type="text" class="form-control" id="priceto"">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-info btn-md" id="searchThis"><span class="glyphicon glyphicon-search"></span></button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@section('scripts')
    <script type="text/javascript" src="{{ URL::to('src/js/dropdown.js') }}"></script>

    <script>
        $("#searchThis").click(function() {
            $(".searchFormUltimate").submit();
        });
    </script>
@endsection