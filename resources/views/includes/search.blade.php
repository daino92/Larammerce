<div class="search_area">
    <div class="align-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="input-group" id="adv-search">
                        <div class="input-group-btn">
                            <div class="btn-group" role="group">
                                <input type="text" class="form-control" id="fauxTitle" placeholder="Search by title"/>
                                <div class="dropdown dropdown-lg">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
                                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                                        {!! Form::open(['route' => 'results', 'method' => 'GET', 'role' => 'search', 'class' => 'form-horizontal searchFormUltimate']) !!}
                                        <input type="hidden" name="title" id="realTitle"/>
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
                                            <select class="form-control" id="subcategory" disabled name="subcategory">
                                                <option selected value="0">Please Select a Subcategory</option>
                                                @foreach($SubCategories as $SubCategory)
                                                    @foreach(json_decode($SubCategory->subcategory,true) as $sub)
                                                        <option selected="false" data-options="{{str_replace('_', ' & ', $SubCategory->category)}}" value="{{$sub['name']}}">{{$sub['name']}}</option>
                                                    @endforeach
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('minPrice', 'Min Price:') !!}
                                            <div class="input-group">
                                                <div class="input-group-addon" id="minPrice">$</div>
                                                <input type="text" class="form-control" name="priceFrom" id="priceFrom">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('maxPrice', 'Max Price:') !!}
                                            <div class="input-group">
                                                <div class="input-group-addon" id="maxPrice">$</div>
                                                <input type="text" class="form-control" id="priceTo" name="priceTo">
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
            $("#realTitle").val( $("#fauxTitle").val());
            $(".searchFormUltimate").submit();
        });
    </script>
@endsection