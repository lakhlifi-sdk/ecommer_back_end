@extends('layouts/app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12">

			<div class="panel-body">

				<div class="panel panel-default panel-info">

					<div class="panel-heading">add product</div>
					<div class="panel-body">
			
				<form class="form-horizontal" method="POST" action="{{url('create1')}}" enctype="multipart/form-data" >
				 {{csrf_field()}}

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Domaine de votre question</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="titre" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('titre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('titre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
				<div class="form-group{{ $errors->has('contenu') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">La question</label>

                            <div class="col-md-6">
                                <textarea id="name" type="text" class="form-control" name="contenu" value="{{ old('contenu') }}" required autofocus></textarea>

                                @if ($errors->has('contenu'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('contenu') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('photo') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Photo</label>

                            <div class="col-md-6">
                                <input id="name" type="file" class="form-control" name="photo" value="{{ old('photo') }}" >

                                @if ($errors->has('contenu'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('photo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

				{{-- <div class="form-group">
					<label for="">Contenu</label>
					<textarea type="text" name="contenu" placeholder="votre question"  class="form-control"></textarea>
				</div> --}}

                 <div class="form-group">
                 	<label for="name" class="col-md-4 control-label"></label>
                            <div class="col-md-6">
                                <input type="submit" class="form-control btn-primary" value="Publier votre question" required autofocus>
                            </div>
                  </div>


				{{-- <div class="form-group">
					<div class="col-md-6">
					<input type="submit" value="Publier" class="col-md-4 control-label btn btn-primary form-control">
				</div>
					</div> --}}

				</form>
             

				
			</div>
			</div>
		</div>
		</div>

	
				
			</div>
</div>

@endsection