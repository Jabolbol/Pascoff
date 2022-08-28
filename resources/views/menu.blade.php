@extends('layout')

@section('content')
<div id="menu" class="menu">
    <div class="container">
        <div class="row mt-5">
            @foreach($menus as $menu)
            <div class="col-lg-3">
                <div class="shadow p-3 mb-5 bg-white">
                    <img src="{{$menu}}" class="img-fluid">
                    <div class="text-center mt-3">
                        <h5>Menu</h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class=" row justify-content-center mt-2">
        </div>
    </div>
</div>
@endsection