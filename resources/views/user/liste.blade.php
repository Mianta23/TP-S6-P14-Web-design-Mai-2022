<html>

<head>


</head>

<body>

@foreach($liste as $rows)

<a href="{{ url('/article') }}/{{Str::slug($rows->titre) }}-{{ $rows->idarticle }}-index.html">Article{{ $rows->idarticle }}</a>
<button><a href="{{ url('/Versupdate') }}/{{ $rows->idarticle }}">Modifier</a></button>
<button><a href="{{ url('/delete') }}/{{ $rows->idarticle }}">Supprimer</a></button>
@endforeach
</body>

</html>