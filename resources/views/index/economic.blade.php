@extends('layouts.app')

@section('content')
<div class="container-fluid bg-3 text-center">



@foreach ($conte as $entr)
   {{--var_dump($entr['title']['nodeValue'])--}}
<p><b>
<a href="http://ekonomika.lt{{$entr['href']}}">
{{$entr['title']}}</a></b><br>

{{$entr['description']}}</p>

@endforeach
</div>
@endsection