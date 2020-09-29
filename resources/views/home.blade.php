@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div id="firstDivistion" class="card-header">Create Product</div><a class="btn" target="_blank" href="https://linkpicture.com/en/?set=en">upold photo url</a>
                    <center>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="panel-body">

                                            <div class="panel panel-default panel-info">

                                                <div class="panel-heading"></div>
                                                    <div class="panel-body">

                                                        <form class="form-horizontal" method="POST" action="{{url('create')}}" enctype="multipart/form-data" >
                                                             {{csrf_field()}}

                                                               <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                                                    <label for="name" class="col-md-4 control-label">Product name</label>

                                                                    <div class="col-md-6">
                                                                        <input id="name" type="text" class="form-control" name="nom" value="{{ old('name') }}" required autofocus>

                                                                        @if ($errors->has('nom'))
                                                                            <span class="help-block">
                                                                                <strong>{{ $errors->first('nom') }}</strong>
                                                                            </span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="form-group{{ $errors->has('contenu') ? ' has-error' : '' }}">
                                                                    <label for="name" class="col-md-4 control-label">Description</label>
                                                                    <div class="col-md-6">
                                                                        <textarea id="name" type="text" class="form-control" name="description" value="{{ old('contenu') }}" required autofocus></textarea>

                                                                        @if ($errors->has('description'))
                                                                            <span class="help-block">
                                                                                <strong>{{ $errors->first('description') }}</strong>
                                                                            </span>
                                                                        @endif
                                                                    </div>
                                                                </div>

                                                                <div class="form-group{{ $errors->has('contenu') ? ' has-error' : '' }}">
                                                                    <label for="name" class="col-md-4 control-label">Prix</label>
                                                                    <div class="col-md-6">
                                                                        <input id="name" type="text" class="form-control" name="prix" value="{{ old('contenu') }}" required autofocus></input>

                                                                        @if ($errors->has('prix'))
                                                                            <span class="help-block">
                                                                                <strong>{{ $errors->first('prix') }}</strong>
                                                                            </span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="form-group{{ $errors->has('contenu') ? ' has-error' : '' }}">
                                                                    <label for="name" class="col-md-4 control-label">Promotion</label>
                                                                    <div class="col-md-6">
                                                                        <input id="name" type="text" class="form-control" name="promotion" value="{{ old('contenu') }}" required autofocus></input>

                                                                        @if ($errors->has('promotion'))
                                                                            <span class="help-block">
                                                                                <strong>{{ $errors->first('promotion') }}</strong>
                                                                            </span>
                                                                        @endif
                                                                    </div>
                                                                </div>

                                                                <div class="form-group{{ $errors->has('photo') ? ' has-error' : '' }}">
                                                                    <label for="name" class="col-md-4 control-label">Photo</label>

                                                                    <div class="col-md-6">
                                                                        <input id="name" type="text" class="form-control" name="photo" value="{{ old('photo') }}" >

                                                                        @if ($errors->has('contenu'))
                                                                            <span class="help-block">
                                                                                <strong>{{ $errors->first('photo') }}</strong>
                                                                            </span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                <label for="name" class="col-md-4 control-label"></label>
                                                                        <div class="col-md-6">
                                                                            <input type="submit" class="form-control btn-primary" value="Add Product" required autofocus>
                                                                        </div>
                                                                </div>
                                                        </form>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </center>
            </div>
        </div>
    </div>
</div>



<!-- start list products section -->
@if($products)
    <div class="container" >
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Products list</div>
                    <div class="container">
                            <div class="row">
                                <div class="col-md-12">


                                     <div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-default">
                <div class="panel-body">
                    Product
                </div>

            </div>

            <table class="table">
                <tr>
                    <th>Product ID</th>
                    <th>Product name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Promotion</th>
                    <th>Image</th>
                </tr>

                @foreach($products as $q)
                <tr>
                    <td>{{$q->id}}</td>
                    <td> {{$q->nom}} </td>
                    <td>{{$q->description}}<br></td>
                    <td>{{$q->prix}}</td>
                    <td>{{$q->promotion}}</td>
                   <!--  http://127.0.0.1:8000/storage/produits/btn_post.png -->

                     <!-- <td> <img  src="http://127.0.0.1:8000/storage/produits/.{{$q->image_url}}"/></td> -->
                     <td> <img width="50px" height="50px"  src="{{$q->image_url}}"/></td>



                     </tr>
                @endforeach


            </table>
        </div>
    </div>
</div>



                                </div>
                            </div>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
