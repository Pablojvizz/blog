<table class="table table-hover">
 @if(isset($noticias))
 	<thead>
 		<th>Titulo</th>
 		<th>Descripcion</th>
 		<th>Imagenes</th>
 		<th></th>
 	</thead>
 	<tbody>
 		@foreach($noticias as $n)
	 		<tr>
		 		<td>{{ $n->titulo }}</td>
		 		<td>{{ $n->descripcion }}</td>
		 		<td>
		 			<img src="imgNoticias/{{ $n->urlimg }}" class="img-responsive" alt="Responsive image" style="max-width: 100px">
		 		</td>
		 		<td>
		 			<a href="noticias/{{ $n->id }}/edit" class="btn btn-warning btn-xs">Modificar</a>
		 			<form action="{{ route('noticias.destroy', $n->id ) }}" method="POST">
		 				<input name="_method" type="hidden" value="DELETE">
  						{{ csrf_field() }}
  						<input type="submit" value="Eliminar" class="btn btn-danger btn-xs">
		 			</form>
		 			
		 		</td>	
	 		</tr>
 		@endforeach
 	</tbody>
 @endif	
</table>