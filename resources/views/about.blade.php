

{{-- @switch($name)
    @case('Dary')
        <p>Print Dary</p>
        @break
    @case('Gil')
        <p>Print Gili</p>
        @break
    @case('john')
        <p>Print john</p>
        @break
    @default
        <p>Print OK</p>
        
@endswitch --}}


@for ($i = 0; $i < 10; $i++)

<h2>"the number is {{ $i }}</h2>
    
@endfor
