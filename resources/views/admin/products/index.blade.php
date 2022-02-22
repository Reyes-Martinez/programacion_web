@extends('layouts.grocery')
@section('content')
<div class="banner">
    <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url('{{asset('assets/img/bg-header.jpg')}}');">
        <div class="container">
            <h1 class="pt-5">
                Products Management
            </h1>
            <p class="lead">
                Product management
            </p>
        </div>
    </div>
</div>
<div class="product-detail">
    <div class="container">
        <div class="row">
            <a class="btn btn-success mx-auto">New product</a>
            <div class="col-sm-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Old Price</th>
                            <th>Description</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td scope="row">{{$product->id}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->old_price}}</td>
                            <td>{{$product->description}}</td>
                            <td>
                                <a class="btn btn-primary">Edit</a>
                                <a class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
</div>

