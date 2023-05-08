<html>

<head>


</head>

<body>

<p>Article : Article{{ $fiche->idarticle }}</p>
<p>Titre : {{ $fiche->titre }}</p>
<p>Resume : {{ $fiche->resumer }}</p>
Contenu : {{ $fiche->contenu }}
<img lass="w-50 h-50 img-fluid" alt="rover" src="{{ $fiche->img }}">
</html>