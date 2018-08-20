@extends('layouts.app')

@section('content')
<div class="jumbotron">
    <img src="{{ asset('images/banner2.jpg') }}" style="width: 100%;">
    <div class="banner-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">Lorem Ipsum is simply dummy text of the</h2>
                    <p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                </div>
            </div>
        </div>
    </div>
</div>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Post your enquiry below</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Instructional video</h2>
                <p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                <p class="text-center"><iframe width="100%" height="500" src="https://www.youtube.com/embed/W5r--N5iOrw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></p>
            </div>
        </div>
    </div>
</section>
@endsection
