@php
    
    $currentRoute = Route::currentRouteName();

    if ($currentRoute === 'auto') {
    }
@endphp

<img src="{{ asset('images/' . $imgFile) }}">
