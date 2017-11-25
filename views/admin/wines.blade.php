@extends('admin.welcome')
@section('carteira')
	    <div class="panel-body">
	            <table class="table">
	            <thead>
	                <tr>
	                    <th> País</th>
	                </tr>
	            </thead>
	            <tbody>
	            	@foreach($wines as $wine)
	                <tr>
	                    <td>{{$wine->country}}</td>
	                    <td>
	                        <a href="{{route('editar_wine', $wine->id)}}" class="btn btn-sm btn-warning glyphicon glyphicon-pencil"></a>
	                    </td>
	                    <td>
	                        <a href="#" class="remover_wine" data-id="{{$wine->id}}"><li class="btn btn-sm btn-danger glyphicon glyphicon-remove"></li></a>
	                    </td>
	                </tr>
	                @endforeach
	            </tbody>
	        </table>
	    </div>

@endsection