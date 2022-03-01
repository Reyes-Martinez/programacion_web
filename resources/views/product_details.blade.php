@extends('layouts.grocery')
@section('content')
<style>
.addtxt {
    padding-top: 10px;
    padding-bottom: 10px;
    text-align: center;
    font-size: 13px;
    width: 350px;
    background-color: #e5e8ed;
    font-weight: 500
}

.form-control: focus {
    color: #000
}

.second {
    width: 350px;
    background-color: white;
    border-radius: 4px;
    box-shadow: 10px 10px 5px #aaaaaa
}

.text1 {
    font-size: 13px;
    font-weight: 500;
    color: #56575b
}

.text2 {
    font-size: 13px;
    font-weight: 500;
    margin-left: 6px;
    color: #56575b
}

.text3 {
    font-size: 13px;
    font-weight: 500;
    margin-right: 4px;
    color: #828386
}

.text3o {
    color: #00a5f4
}

.text4 {
    font-size: 13px;
    font-weight: 500;
    color: #828386
}

.text4i {
    color: #00a5f4
}

.text4o {
    color: white
}

.thumbup {
    font-size: 13px;
    font-weight: 500;
    margin-right: 5px
}

.thumbupo {
    color: #17a2b8
}
</style>

<div class="banner">
    <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url('{{asset('assets/img/bg-header.jpg')}}');">
        <div class="container">
            <h1 class="pt-5">
                {{$product->name}}
            </h1>
            <p class="lead">
                {{$product->description}}
            </p>
        </div>
    </div>
</div>
@if(session()->get('success'))
                <div class="alert alert-success text-center" role="alert" id="alert">
                    <i class="fa-solid fa-badge-check"></i> {{session()->get('success')}}
                </div>
@endif
<div class="product-detail">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="slider-zoom">
                    <a href="{{asset('assets/img/meats.jpg')}}" class="cloud-zoom" rel="transparentImage: 'data:image/gif;base64,R0lGODlhAQABAID/AMDAwAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==', useWrapper: false, showTitle: false, zoomWidth:'500', zoomHeight:'500', adjustY:0, adjustX:10" id="cloudZoom">
                        <img alt="Detail Zoom thumbs image" src="{{asset('assets/img/meats.jpg')}}" style="width: 100%;">
                    </a>
                </div>

                <div class="slider-thumbnail">
                    <ul class="d-flex flex-wrap p-0 list-unstyled">
                        <li>
                            <a href="{{asset('assets/img/meats.jpg')}}" rel="gallerySwitchOnMouseOver: true, popupWin:'{{asset('assets/img/meats.jpg')}}', useZoom: 'cloudZoom', smallImage: '{{asset('assets/img/meats.jpg')}}'" class="cloud-zoom-gallery">
                                <img itemprop="image" src="{{asset('assets/img/meats.jpg')}}" style="width:135px;">
                            </a>
                        </li>
                        <li>
                            <a href="{{asset('assets/img/fish.jpg')}}" rel="gallerySwitchOnMouseOver: true, popupWin:'{{asset('assets/img/fish.jpg')}}', useZoom: 'cloudZoom', smallImage: '{{asset('assets/img/fish.jpg')}}'" class="cloud-zoom-gallery">
                                <img itemprop="image" src="{{asset('assets/img/fish.jpg')}}" style="width:135px;">
                            </a>
                        </li>
                        <li>
                            <a href="{{asset('assets/img/vegetables.jpg')}}" rel="gallerySwitchOnMouseOver: true, popupWin:'{{asset('assets/img/vegetables.jpg')}}', useZoom: 'cloudZoom', smallImage: '{{asset('assets/img/vegetables.jpg')}}'" class="cloud-zoom-gallery">
                                <img itemprop="image" src="{{asset('assets/img/vegetables.jpg')}}" style="width:135px;">
                            </a>
                        </li>
                        <li>
                            <a href="{{asset('assets/img/frozen.jpg')}}" rel="gallerySwitchOnMouseOver: true, popupWin:'{{asset('assets/img/frozen.jpg')}}', useZoom: 'cloudZoom', smallImage: '{{asset('assets/img/frozen.jpg')}}'" class="cloud-zoom-gallery">
                                <img itemprop="image" src="{{asset('assets/img/frozen.jpg')}}" style="width:135px;">
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
            <div class="col-sm-6">
                <p>
                    <strong>Overview</strong><br>
                    {{$product->description}}
                </p>
                <div class="row">
                    <div class="col-sm-6">
                        <p>
                            <strong>Price</strong> (/Pack)<br>
                            <span class="price">${{$product->price}}</span>
                            <span class="old-price">${{$product->old_price}}</span>
                        </p>
                    </div>
                    <div class="col-sm-6 text-right">
                        <p>
                            <span class="stock available">In Stock: {{$product->quantity}}</span>
                        </p>
                    </div>
                </div>
                <p class="mb-1">
                    <strong>Quantity</strong>
                </p>
                <div class="row">
                    <div class="col-sm-5">
                        <input class="vertical-spin" type="text" data-bts-button-down-class="btn btn-primary" data-bts-button-up-class="btn btn-primary" value="" name="vertical-spin">
                    </div>
                    <div class="col-sm-6"><span class="pt-1 d-inline-block">Pack (250 gram)</span></div>
                </div>

                <button class="mt-3 btn btn-primary btn-lg">
                    <i class="fa fa-shopping-basket"></i> Add to Cart
                </button>
                <div class="row">
                    <div class="col-sm-6 py-3">
                        <form  class="form-horizontal" action="{{route('store_comment')}}" method="post" enctype="multipart/form">
                            @csrf
                            <div class="form-group row mt-3">
                                <div class="col-md-12">
                                    <label class="text-dark"><strong>Commenter</strong></label>
                                    <input class="form-control" name="commenter" type="text" required placeholder="Commenter">
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <div class="col-md-12">
                                    <label class="text-dark"><strong>Comment</strong></label>
                                    <textarea class="form-control" placeholder="Comment" required name="comment"></textarea>
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <div class="col-md-12">
                                    <label class="text-dark"><strong>Email</strong></label>
                                    <input class="form-control" type="email" name="email" required placeholder="Email">
                                </div>
                            </div>
                            <input type="hidden" name="product_id" value ={{$product->id}}>
                            <div class="form-group row text-center mt-4">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-block text-uppercase">Add comment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section id="related-product">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="title">Related Products</h2>
                <div class="product-carousel owl-carousel">
                    <div class="item">
                        <div class="card card-product">
                            <div class="card-ribbon">
                                <div class="card-ribbon-container right">
                                    <span class="ribbon ribbon-primary">SPECIAL</span>
                                </div>
                            </div>
                            <div class="card-badge">
                                <div class="card-badge-container left">
                                    <span class="badge badge-default">
                                        Until 2018
                                    </span>
                                    <span class="badge badge-primary">
                                        20% OFF
                                    </span>
                                </div>
                                <img src="{{asset('assets/img/meats.jpg')}}" alt="Card image 2" class="card-img-top">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="detail-product.html">Product Title</a>
                                </h4>
                                <div class="card-price">
                                    <span class="discount">Rp. 300.000</span>
                                    <span class="reguler">Rp. 200.000</span>
                                </div>
                                <a href="detail-product.html" class="btn btn-block btn-primary">
                                    Add to Cart
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card card-product">
                            <div class="card-ribbon">
                                <div class="card-ribbon-container right">
                                    <span class="ribbon ribbon-primary">SPECIAL</span>
                                </div>
                            </div>
                            <div class="card-badge">
                                <div class="card-badge-container left">
                                    <span class="badge badge-default">
                                        Until 2018
                                    </span>
                                    <span class="badge badge-primary">
                                        20% OFF
                                    </span>
                                </div>
                                <img src="{{asset('assets/img/fish.jpg')}}" alt="Card image 2" class="card-img-top">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="detail-product.html">Product Title</a>
                                </h4>
                                <div class="card-price">
                                    <span class="discount">Rp. 300.000</span>
                                    <span class="reguler">Rp. 200.000</span>
                                </div>
                                <a href="detail-product.html" class="btn btn-block btn-primary">
                                    Add to Cart
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card card-product">
                            <div class="card-ribbon">
                                <div class="card-ribbon-container right">
                                    <span class="ribbon ribbon-primary">SPECIAL</span>
                                </div>
                            </div>
                            <div class="card-badge">
                                <div class="card-badge-container left">
                                    <span class="badge badge-default">
                                        Until 2018
                                    </span>
                                    <span class="badge badge-primary">
                                        20% OFF
                                    </span>
                                </div>
                                <img src="{{asset('assets/img/vegetables.jpg')}}" alt="Card image 2" class="card-img-top">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="detail-product.html">Product Title</a>
                                </h4>
                                <div class="card-price">
                                    <span class="discount">Rp. 300.000</span>
                                    <span class="reguler">Rp. 200.000</span>
                                </div>
                                <a href="detail-product.html" class="btn btn-block btn-primary">
                                    Add to Cart
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card card-product">
                            <div class="card-ribbon">
                                <div class="card-ribbon-container right">
                                    <span class="ribbon ribbon-primary">SPECIAL</span>
                                </div>
                            </div>
                            <div class="card-badge">
                                <div class="card-badge-container left">
                                    <span class="badge badge-default">
                                        Until 2018
                                    </span>
                                    <span class="badge badge-primary">
                                        20% OFF
                                    </span>
                                </div>
                                <img src="{{asset('assets/img/frozen.jpg')}}" alt="Card image 2" class="card-img-top">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="detail-product.html">Product Title</a>
                                </h4>
                                <div class="card-price">
                                    <span class="discount">Rp. 300.000</span>
                                    <span class="reguler">Rp. 200.000</span>
                                </div>
                                <a href="detail-product.html" class="btn btn-block btn-primary">
                                    Add to Cart
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card card-product">
                            <div class="card-ribbon">
                                <div class="card-ribbon-container right">
                                    <span class="ribbon ribbon-primary">SPECIAL</span>
                                </div>
                            </div>
                            <div class="card-badge">
                                <div class="card-badge-container left">
                                    <span class="badge badge-default">
                                        Until 2018
                                    </span>
                                    <span class="badge badge-primary">
                                        20% OFF
                                    </span>
                                </div>
                                <img src="{{asset('assets/img/fruits.jpg')}}" alt="Card image 2" class="card-img-top">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="detail-product.html">Product Title</a>
                                </h4>
                                <div class="card-price">
                                    <span class="discount">Rp. 300.000</span>
                                    <span class="reguler">Rp. 200.000</span>
                                </div>
                                <a href="detail-product.html" class="btn btn-block btn-primary">
                                    Add to Cart
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="comments">
    <h2 class="title">Comments</h2>
    <div class="container justify-content-center mt-5 border-left border-right">
        @foreach ($product_comments as $comment)
        <div class="d-flex justify-content-center py-2">
            <div class="second text-center"> <span class="text1">{{$comment->comment}}</span>
                <div class="d-flex justify-content-between py-1 pt-2">
                    <div><span class="text2">{{$comment->commenter}}</span></div>
                    <div><span class="text3">{{$comment->created_at}}</span></div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
<script>
    window.setTimeout(function() {
    $("#alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 2000);
</script>