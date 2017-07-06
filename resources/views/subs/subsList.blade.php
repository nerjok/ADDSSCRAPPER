@extends('layouts.app')

<!-- here is user sbscription list -->
@section('content')
<br>


{{-- var_dump($mySubs) --}}
{{-- $mySubs->myAdds[0]->id --}}
 {{-- $mySubs->name --}}
 @if($mySubs->myAdds != null)
<table class="table">
    <thead>
        <th>#</th>
        <th>{{ __('Subscribed')}}</th>
        <th>{{ __('Subscription url')}}</th>
        <th>{{ __('Actions') }}</th>
    </thead>
    <tbody>
@foreach($mySubs->myAdds as $sub)
{{-- var_dump($sub) --}}
<tr>
    <td>*</td>
    <td>{{$sub->created_at}}</td>
    <td>{{ str_limit($sub->subscription, 50)}}</td>
    <td><a href="delete/{{$sub->id}}">{{ __('Unsubscribe') }}</a></td>
</tr>


@endforeach
</tbody>
</table>
@endif
@endsection