@extends('layouts.app')

@section('content')





<div class="container">
<div class="container-fluid bg-3 text-center">
        {{-- var_dump($homepage->channel->item) --}}
        <div class="row equal-cols">
                        @foreach($homepage->channel->item as $article)
                            <div class="col-xs-4">
                                <div class="content">
                                        <div class="panel panel-default">
                                        <div class="panel-body">
                                                
                                                            {{-- var_dump($article) --}}

                                        
                                    <b><a href="{{ $article->link }}">{{ $article->title }}</a></b>
                                    {!! $article->description !!}
                                    {{-- $article->pubDate --}}


                        </div></div></div></div>
                        @endforeach
            </div>

</div>
</div>


@endsection