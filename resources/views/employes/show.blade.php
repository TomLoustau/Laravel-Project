
@include('partials.header')

<h3>Profil Employé</h3>

@include('partials.tableProfile')

<h3>Activité</h3>
<h3>Statut : {{ $statut }}</h3>

<h3>Voitures</h3>
<form action="{{ route('employes.verifier', [$employe->id]) }}" method="GET">
    <input type="text" name="modele" value="">
    <button type="submit">Verifier</button>
</form>

@if(session('resultat'))
    <div>{{ session('resultat') }}</div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        <h1 style="color : red">{{ session('error') }}</h1>
    </div>
@endif

@include('partials.voitures')

@include('partials.footerIndex')

