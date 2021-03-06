@extends('layouts.app')

@section('content')
<!-- khung -->
<div style=" margin-top: 99px;border-style: ridge;">
<!-- noi dung -->
<div class="container">
    <div class="row">
        <div class="panel-heading"><h1>Advanced Search</h1></div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

        <form class="form-horizontal" method="GET" action="hdvSearchTour/result">
            <div class="panel-heading">
                <h5>Tìm kiếm theo công ty</h5>
            </div> 
            <div class="panel-body">
                <div>
                    <label class=" col-md-4 control-label">Tên công ty</label>
                    <input type="text" class="form-control col-md-6" name="name_cty">
                    <br>
                </div>
                <div>
                    <label class=" col-md-4 control-label">Địa chỉ văn phòng</label>
                    <input type="text" class="form-control col-md-6" name="address">
                    <br>
                </div>
            </div>     
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" name="submit" class="btn btn-primary">
                        Search
                    </button>
                </div>
            </div>        
        </form>
        </div>
    </div>
</div>
@endsection