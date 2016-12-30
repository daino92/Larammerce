<div class="container-fluid search-area" style="background: url('{{ URL::to('pictures/search.jpg') }}');background-repeat:no-repeat;">
    <form role="search" action="{{route('shop.results')}}" >
        {{ csrf_field() }}
        <div class="row">
            <div class="algn-center">
                <div id="custom-search-input">
                    <div class="input-group col-md-12">
                        <input type="text" name="query" class="form-control input-lg" placeholder="Search ..."/>
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-search"></span></button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>