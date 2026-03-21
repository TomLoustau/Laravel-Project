<div>

    @foreach ($voitures as $voiture)
        <tr>
            <td>{{ $voiture->modele }} <a href="{{ route('voitures.show', [$voiture->id] )}}">Voir</a><br></td>
        </tr>
    @endforeach
</div>
