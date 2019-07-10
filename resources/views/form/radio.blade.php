{{--
    items
    name
    checked
    class　// option
--}}

@foreach ($items as $label => $val)

    @php
        $id = $name . $loop->iteration;
        $bool = ($checked == $val);
    @endphp

    <label for="{{$id}}" class="button {{$class ?? ''}}">
        <span>{{$label}}</span>
        {!! Form::radio($name, $val, $bool, ['class' => 'd-no', 'id' => $id]) !!}
    </label>

@endforeach