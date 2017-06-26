@extends('layouts.app')
<!-- Here is a forms wher users adds their subscription wishes, 
we validating, checking if available -->

@section('content')
<div class="container-fluid bg-3 text-center">


<form method="POST" action="work">
                        {{ csrf_field() }}

  <div class="form-group">
    <label for="exampleInputEmail1">{{ __('Enter subscription url')}}</label>
    <input type="text" class="form-control" name="addUrl" id="addUrl" placeholder="{{ __('Enter subscription url')}}" value="{{old('addUrl')}}">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</div>
@endsection