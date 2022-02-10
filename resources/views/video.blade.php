@extends('layouts.main')

@section('container')
{{-- <div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" src="{{ $video->link }}" allowfullscreen></iframe>
</div> --}}
<div class="container-video">
    <iframe class="responsive-iframe" src="{{ $video->link }}"></iframe>
</div>
<div class="container text-center m-5">
    <a href="/videos" class="btn btn-danger">Back to List</a>
</div>
@endsection
