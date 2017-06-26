@extends('layouts.app')

@section('content')
<div class="container-fluid bg-3 text-center">

{{-- var_dump($content) --}}
aaa
{{-- var_dump($contentt) --}}

@foreach ($contentt as $entr)
   {{--var_dump($entr['title']['nodeValue'])--}}
<p>
<a href="{{ $entr['href'] }}">{{ $entr['title'] }}</a><br>

{{ $entr['description'] }}</p>

@endforeach

</div>
@endsection