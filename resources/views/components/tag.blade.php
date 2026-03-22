@props(['size'=>'small',
'name'=>' '
])

@php
    $classes= '';
    if($size=='small')
    {
        $classes = 'bg-white/10 py-1 px-2 rounded-lg self-center hover:bg-white/25 transition-colors duration-300  text-xs';
    }
    if($size =='large')
    {
        $classes = 'bg-white/10 py-1 px-2 rounded-lg self-center hover:bg-white/25 transition-colors duration-300  text-sm';
    }
@endphp

{{-- review this after filling the tags and jobs --}}
 <a href="/tags/{{ strtolower($name) }}" class="{{ $classes }}">{{ $name }}</a>
