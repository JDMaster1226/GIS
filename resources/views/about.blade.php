@extends('layouts.index')

@section('header')

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('/img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>About Me</h1>
                        <hr class="small">
                        <span class="subheading">This is what I do.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

@stop

@section('content')

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

            <h2 class="section-heading">Misión</h2>
                <p>{{Voyager::setting('mision')}}</p>

                <h2 class="section-heading">Visión</h2>
                <p>{{Voyager::setting('vision')}}</p>

                <h2 class="section-heading">Objetivo General</h2>
                <p>Desarrollar líneas de investigación que contribuyan a la generación de nuevo conocimiento, con el fin de dar solución a problemas y fenómenos que se presentan en la sociedad a través de técnicas, procedimientos, y resultados investigativos de alto impacto.</p>

                <h2 class="section-heading">Objetivos Específicos</h2>
                <p>Realizar investigación sobre nuevos tópicos de software, profundizando en cada uno de ellos, para conocer sus orígenes y proponer algunos aspectos nuevos o innovadores, que permitan realizar las actividades deuna manera eficiente y adecuada al medio.</p>
                <p>Obtener resultados útiles y fomentar la transmisión de nuevos hallazgos de cada una de laslíneas de investigación (aplicaciones informáticas, manuales, libros, artículos, ponencias, conferencias), a través de publicaciones y participación en eventos de carácter científico, que sirvan de consulta y soporte para la generación denuevo conocimiento.</p>
                <p>Estudiar, estructurar, aplicar y/o proponer metodologías pedagógicas orientadas a la enseñanza de la informática, que permitan fortalecer las competencias de los profesionales de TI, y fomentarla generación deproyectos y empresas debase tecnológica.</p>
            </div>
        </div>
    </div>


@stop
