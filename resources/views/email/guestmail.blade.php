<html>
<head>
<style>
body {

    backgound:gray;
}
</style>
</head>
<body>
<h2>Naujausių skelbimų prenumerata</h2>

<p>Sveiki, dienos skelbimų prenumerata.</p>


@if ($conte != null)
   <table>
 @foreach ($conte as $entr)
        
         
              <tr> <td> <b><a href="{{ $entr['href'] }}">{{ $entr['title'] }}</a></b>

                {{ $entr['description'] }}</td><tr>
           


        @endforeach

</table>
@else
Deja, šiandien naujų skelbimų nėra.
@endif
Sekmės paieškose,<br>
{{ config('app.name') }}
</body>
</html>