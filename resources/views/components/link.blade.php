@php
    $classes = "text-sm text-gray-600 hover:text-rose-900"
@endphp

    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
    <a {{$attributes->merge(['class' => $classes]) }}> <!--Une todos los atributos que le pases dentro de ese enlace, en este claso el href-->
        {{ $slot }}
    </a>