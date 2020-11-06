@extends('layouts.master')
@section('title', 'Vincent van Gogh')

@section('header')
<h1>Vincent van Gogh</h1>
@stop

@section('navbar')
@parent
@stop

@section('content')

<div class="clearfix">
<img style="float:right;" src="\images\van.jpg" hspace="5" vspace="5" width=250px/>Vincent van Gogh, uno de los grandes mártires del arte, conocido por su inestabilidad psicológica y no haber vendido más que un único cuadro en su vida pese a su fervor por lel acto de pintar. Su éxito comercial llega años después de su muerte, siendo en la actualidad uno de los pintores más famosos y artistas más cotizados del mundo. Encarnación del artista torturado e incomprendido, Van Gogh no llegó a vender más que uno de aquellos centenares de cuadros suyos que actualmente alcanzan desorbitadas cotizaciones en las subastas. El reconocimiento de su obra no empezó hasta un año después de su muerte, a raíz de una exposición retrospectiva organizada por el Salón de los Independientes; en nuestros días, Van Gogh es considerado unánimemente uno de los grandes genios de la pintura moderna. Su producción ejerció una influencia decisiva en todo el arte del siglo XX, especialmente en el fauvismo y el expresionismo; y tras más de un siglo de experimentos artísticos, la pincelada tosca y atormentada del artista holandés, alimentada por el vigor de su pasión interior, conserva toda su fascinante fuerza expresiva.
</div>
<h2>Pintura Favorita</h2>
<center><img src="\images\estrella.jpg" alt="La noche estrellada" width=600px></center>

@stop

@section('footer')
@parent
@stop