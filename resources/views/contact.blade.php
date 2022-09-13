@extends('layouts.app')

@section('title-block')
    <?php echo 'contacts'?>
@endsection

@section('content')

    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error  }}</li>
            @endforeach
        </ul>
    </div>
    @endif

<form action="{{ route('contact-form-url') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="name">Имя</label>
        <input type="text" name="name" id="name">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary" />
    </div>
</form>
@endsection



@section('aside')
    @parent
    <p>Дополнит текст</p>
@endsection
