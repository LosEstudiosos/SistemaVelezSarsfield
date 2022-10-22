<div>
    <select name="Tipo Usuario" class="form-select" id="">
        <option selected disabled>{{ $slot }}</option>
        
    @foreach ($asignatura as $item)
{{--             @if ($select=='asignatura')
            <option value="1">{{$item->asignatura}}</option>              
        @endif
        @if ($select=='curso')
            <option value="1">{{$item->anio}}{{$item->division}}</option>
        @endif --}}
        @switch($select)
            @case('asignatura')
                <option value="1">{{$item->asignatura}}</option>
                @break
            @case('curso')
                <option value="1">{{$item->anio}}{{$item->division}}</option>
                @break
            @case('instancias')
                <option value="1">{{$item->instancia}}</option>
            @break
            
            @default
                
        @endswitch
    @endforeach
    </select>
</div>