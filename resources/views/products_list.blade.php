@extends('layouts.grocery')
@section('content')
<div class="banner">
    <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url('assets/img/bg-header.jpg');">
        <div class="container">
            <h1 class="pt-5">
                products list
            </h1>
            <p class="lead">
                Save time and leave the groceries to us.
            </p>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <br>
            <button class="btn btn-primary mx-auto" id="btn-load" type="button">Load products</button>
            <br>
            <table class="table table-hover" id="tblProducts">
                <thead class="thead-inverse">
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Old Price</th>
                        <th class="text-center">Quantity</th>
                        <th class="text-center">Comments</th>
                        <th class="text-center">Category ID</th>
                        <th class="text-center">Description</th>
                    </tr>
                    </thead>
                    <tbody>
        
                    </tbody>
            </table>    
        </div>
    </div>
</div>
@endsection
@section('js')
<script type="text/javascript" src="{{asset('assets/js/myscript.js')}}"></script>
@endsection