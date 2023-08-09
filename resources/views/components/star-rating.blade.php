@if ($rating)
    @for ($i = 0; $i <= 5; $i++)
        {
            {{ $i <= round($rating) ? '*' : 'x'}}
        } 
    @endfor

@else
    No reting yet
@endif