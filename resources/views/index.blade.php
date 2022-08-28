@extends('layout')

@section('content')
<!-- Carousel -->
<div id="carouselExampleFade" class="carousel slide carousel-fade bg-light" data-ride="carousel">
    <div class="container">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-5">
                        <h4>Disini adalah tempat <br>yang tepat untuk bersantai <br>dan bersenang ria</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus tempora modi animi
                            debitis
                            dicta facere reiciendis suscipit fuga, nulla tenetur!</p>
                    </div>
                    <div class="col-lg-5 d-flex justify-content-end">
                        <div class="img-bg">
                            <img src="{{ asset('/img/coffee-machine.png') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Carousel -->
@endsection