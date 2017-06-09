{!! Form::open(['route' => 'shop.results', 'method' => 'GET', 'role' => 'search']) !!}
    {{ csrf_field() }}
        <div class="align-center">
            <div id="custom-search-input">
                <div class="input-group col-md-12">
                    <input type="text" name="query" class="form-control input-lg" placeholder="Search ..."/>
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-search"></span></button>
                    </span>
                </div>
            </div>
        </div>
{!! Form::close() !!}