<div>
    <select name="{{ $Datos }}" class="form-select" id="">
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
                <option value=" {{$item->id}} ">{{$item->asignatura}}</option>
            @break
            @case('curso')
                <option value="{{$item->id}}">{{$item->anio}}{{$item->division}}</option>
            @break
            @case('instancias')
                <option value="{{$item->id}}">{{$item->instancia}}</option>
            @break
            @case('cicloLectivo')
                <option value="{{$item->id}}">{{$item->anio}}</option>
            @break
            
            @default
                
        @endswitch
    @endforeach
    </select>
</div>