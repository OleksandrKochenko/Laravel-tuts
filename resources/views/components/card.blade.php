<!-- declare highlight variable and set it default value - false -->
@props(['highlight'=>false])

<div @class(['highlight'=>$highlight, 'card'])>
    {{ $slot }}
    <a href="{{ $attributes->get('href') }}" class="btn">View Details</a>
    <!-- <a {{ $attributes}} class="btn">View Details</a>  // adds all attributes, shorter syntex when only 1 attribute included or all attributes pass to one element-->
</div>
