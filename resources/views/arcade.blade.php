@extends('layouts.default')

@section('title', 'Product Owner | Arcade')
@section('pagetitle', 'Borne d\'arcade')

@section('content')
    <section class="py-10">
        <div class="container">
            <div class="mb-10">
                Tout est parti d’un magazine qui trainait sur une table au boulot, et hop pourquoi pas nous lancer dans la réalisation d’une borne. Ah oui ! Mais d’en avoir une à la maison ce serait encore mieux.
            </div>
            <div class="">
                Pour mon arcade perso, j’étais d’abord partie sur l’idée d’acheter un kit bartop prêt à monter. Cependant ceux de base, permettant de recevoir un écran jusqu’à 19", me paraissent insuffisamment larges pour jouer à deux. Quant aux versions XXL, les différents tarifs sont rédhibitoires.  Je pèse le pour et le contre, j’évalue les budgets selon les modèles et le matériel que j’aimerais intégrer. Puis se rappellent à moi mes années de bricolage, et quoi de plus challengeant que de faire tout moi-même ! Le défi est lancé.
            </div>
        </div>
    </section>

    <section class="bg-gray-light-nine py-10">
        <div class="container">
            <h3 class="my-10 text-2xl font-accent font-semibold text-turquoise">This is it!</h3>
            <div class="grid grid-flow-row grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach($arcadeList['final'] as $arcade)
                <div class="shadow-lg mb-4">
                    <img class="rounded-md" src="images/arcade/final/{{ $arcade }}" alt="arcade">
                </div>      
                @endforeach
            </div>
        </div>
    </section>
@stop
