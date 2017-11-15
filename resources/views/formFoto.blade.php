@extends('estructura_base')
@section('titulo', 'subida de foto')
@section('content')
	<form method="post" enctype="multipart/form-data">
		{{csrf_field()}}
		<input type="file" name="avatar" value="">
		<button type="submit" name="button">Subir!</button>
	</form>
@endsection
