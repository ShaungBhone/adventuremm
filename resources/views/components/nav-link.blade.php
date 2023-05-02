@props(['active'])

@php
  $classes = $active ?? false ? 'mk' : 'xl';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
  {{ $slot }}
</a>
