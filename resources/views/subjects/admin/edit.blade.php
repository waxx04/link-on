{{-- /resources/views/subjects/admin/edit.blade.php --}}
@extends('layouts.master')

@section('title', "$subject->title")

@section('content')
<div class="container">
	<div class="top-link">
		<a href="{{ route('subjects.show', ['subjects' => $subject, 'course' => $course]) }}" class="btn btn-default btn-sm">Back</a>
		@if(!$course)
			<label class="label label-danger">Warning! no backreference found...</label>
		@endif
	</div>
	<div>
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-primary">
				<div class="panel-heading">Edit subject properties</div>
				<div class="panel-body">
					{!! Form::open(['method' => 'PATCH', 'route' => ['subjects.update', $course, $subject], 'class' => 'form-horizontal', ]) !!}
						@include('subjects/admin/partials/_form', ['submit_text' => 'Save Changes', 'edit_mode' => true])
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection