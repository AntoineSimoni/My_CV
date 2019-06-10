@extends('layouts.app')

@section('content')

    <div id="lisere"></div> 
            <div id="cv">
                <div id="debut">
                    <img id="image" src="../img/Moi.jpg" alt="moi" title="moi">
                    <h1>SIMONI Antoine</h1>
                </div>
                <div class="texte">
                    <h2>Mon expérience</h2>
                    <h3>Projet</h3>
                    @foreach ($experiences as $e)
                        <b>{{$e->annee}}</b>
                        {{$e->text}}
                        @guest
                        @elseif(Auth::user()->email == "antoine.simoni@ynov.com")
                            <a href="/delete-e/{{$e->id}}">Supprimer</a>
                        @endguest
                        <br /><br />
                    @endforeach
                    @guest
                    @elseif(Auth::user()->email == "antoine.simoni@ynov.com")
                        <form method="POST" action="{{ route('creerExp') }}">
                                @csrf
                            <input id="text" name="text" type="text" placeholder="experience" />
                            <input id="annee" name="annee" type="annee" placeholder="date" />
                            <button type="submit">Submit</button>
                        </form>
                    @endguest
                </div>
                <div class="texte">
                    <h2>Mes compétences</h2>
                    @foreach ($competences as $c)
                        {{$c->text}}
                        @guest
                        @elseif(Auth::user()->email == "antoine.simoni@ynov.com")
                            <a href="/delete-c/{{$c->id}}">Supprimer</a>
                        @endguest
                        <br /><br />
                    @endforeach
                    @guest
                    @elseif(Auth::user()->email == "antoine.simoni@ynov.com")
                        <form method="POST" action="{{ route('creerCom') }}">
                                @csrf
                            <input id="text" name="text" type="text" placeholder="experience" />
                            <button type="submit">Submit</button>
                        </form>
                    @endguest
                </div>
                <div class="texte">
                    <h2>Ma formation</h2>
                    @foreach ($formation as $f)
                        {{$f->text}}
                        @guest
                        @elseif(Auth::user()->email == "antoine.simoni@ynov.com")
                            <a href="/delete-f/{{$f->id}}">Supprimer</a>
                        @endguest
                        <br /><br />
                    @endforeach
                    @guest
                    @elseif(Auth::user()->email == "antoine.simoni@ynov.com")
                        <form method="POST" action="{{ route('creerFor') }}">
                                @csrf
                            <input id="text" name="text" type="text" placeholder="experience" />
                            <button type="submit">Submit</button>
                        </form>
                    @endguest
                </div>
                <div class ="solo">
                    <h2>Me concernant</h2>
                    <p>Né le 30/11/2000 à Bruges(33)</p>
                    <p>Permis de conduire : En cours</p>
                    <p>Loisirs : Informatique, Voyages</p>
                </div>
                <div class="solo">
                    <h2>Me contacter</h2>
                    <p>Tel : +33 6 17 37 34 11</p>
                    <p>Adresse Mail : antoine.simoni@ynov.com</p>
                </div>
            </div>


@endsection