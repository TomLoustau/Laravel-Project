@extends('layouts.base')
<div>
@section('zone2')

    @include('partials.headerIndex')
    @if(session('error'))
        <p>Erreur : {{ session('error') }}</p>
        @endif
    <table>
        <thead>
            <th>Prenom</th>
            <th>Nom</th>
            <th>Email</th>
        </thead>
        <tbody>
        @foreach($employes as $employe)
            <tr>
                <td>{{ $employe->prenom }} | </td>
                <td>{{ $employe->nom }} |</td>
                <td>{{ $employe->email }} | </td>
                <td><a href="{{ route('employe.show', [$employe->id]) }}">voir</a><br></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @endsection
</div>
