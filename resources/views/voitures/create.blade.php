
<h1>Ajouter une voiture</h1>

<form method="POST" action="{{ route('voitures.store', [$id]) }}">
    @csrf

    <label for="modele">Modèle :</label>
    <input type="text" name="modele" id="modele" required><br>

    <label for="nb_place">Nombre de places :</label>
    <input type="number" name="nb_place" id="nb_place" required><br>

    <button type="submit">Ajouter la voiture</button>
</form>

