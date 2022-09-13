@extends('layouts.app')

@section('title-block')
    <?php echo 'messages'?>
@endsection

@section('content')
    @foreach($data as $el)
        {{$el->name}}
    @endforeach
@endsection
