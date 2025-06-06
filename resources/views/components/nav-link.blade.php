{{-- Main Navlink --}}
@props(['active' => false])

<a class="{{ $active ? 'text-yellow-400 font-bold transform scale-75 linear transition-transform underline underline-offset-8 decoration-2' : 'text-gray-200 hover:text-yellow-500 hover:font-semibold transition-all font-black' }} nav-link"
    aria-current="{{ $active ? 'page' : 'false' }}" {{ $attributes }}>
    {{ $slot }}
</a>
