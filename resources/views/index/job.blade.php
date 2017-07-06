@extends('layouts.app')

@section('content')
<div class="container-fluid bg-3 text-center">


@if($link != null)

<a href="{{ $link }}">{{ $link}}</a>
<br>
{{ __('Do you wish to subscribe these adds?')}}

<form method="POST" action="subSave">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
  <div class="form-group">
    <label for="exampleInputEmail1">{{ __('Enter email')}}</label>
    <input type="hidden" name="subscription" value="{{ $link }}">
   <!-- <input type="email" class="form-control" name="email" id="addUrl" placeholder="{{-- __('Enter email')--}}" value="{{-- old('email') --}}"> -->
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>



        @if($conte != null)
        @foreach ($conte as $entr)
        
            <p>
                <b><a href="{{ $entr['href'] }}">{{ $entr['title']}}</a></b><br>

                {{ $entr['description']}}
            </p>


        @endforeach
        @endif
@else

<p>{{ __('Unavailable page')}} </p>

@endif
</div>
@endsection