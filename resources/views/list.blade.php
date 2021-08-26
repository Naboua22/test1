@extends('base')
@section('section')

<h1>Liste des entrées</h1>

@php
    $data = request()->session()->all();
@endphp

<table>
    <head>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>E-Mail</th>
            <th>Téléphone</th>
            <th>Date de naissance</th>
            <th>Nationalité</th>
            <th>Prffession</th>
        </tr>
    </head>
    <tbody>
        <tr>
            <td>@php
                echo($data[$i]['firstname']);
            @endphp</td>
            <td>@php
                echo($data[$i]['lastname']);
            @endphp</td>
            <td>@php
                echo($data[$i]['email']);
            @endphp</td>
            <td>@php
                echo($data[$i]['phone']);
            @endphp</td>
            <td>@php
                echo($data[$i]['date']);
            @endphp</td>
            <td>@php
                echo($data[$i]['nati']);
            @endphp</td>
            <td>@php
                echo($data[$i]['profession']);
            @endphp</td>
        </tr>
    </tbody>
</table>

<a href="{{ route('getForm') }}">Inscription</a>