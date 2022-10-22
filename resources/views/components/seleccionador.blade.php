@props(['clase', 'InputUno', 'InputDos', 'InputTres', 'InputCuatro', 'InputCinco', 'InputSeis', 'boton'])

<div class="row">
    @csrf
    <div class="col-12 d-flex justify-content-end mt-3">
        <input size="4" class="border-3 b-i" type = "hidden" name="id" placeholder='Id' value="0"/>
    </div>
    @if (!empty($InputUno))
    <div class="{{$clase}}">
        {{$InputUno}}
    </div>
    @endif
    @if (!empty($InputDos))
    <div class="{{$clase}}">
        {{$InputDos}}
    </div>
    @endif
    @if (!empty($InputTres))
        <div class="{{$clase}}">
        {{$InputTres}}
    </div>
    @endif
    @if (!empty($InputCuatro))
        <div class="{{$clase}}">
        {{$InputCuatro}}
    </div>
    @endif
    @if (!empty($InputCinco))
        <div class="{{$clase}}">
        {{$InputCinco}}
    </div>
    @endif
    @if (!empty($InputSeis))
        <div class="{{$clase}}">
        {{$InputSeis}}
    </div>
    @endif
    
    
    
    
   
{{--     <div class="col-12 my-3 d-flex justify-content-center">
        <button type="submit" class="btn bt-r btn-info">{{$boton}}</button>
    </div> --}}
</div> 