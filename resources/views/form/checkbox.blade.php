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
        $class = $class ?? '';
        $class .= $bool ? ' is-info': '';
    @endphp

    <label for="{{$id}}" class="button {{$class}}">
        <span>{{$label}}</span>
        {!! Form::checkbox($name, $val, $bool, ['id' => $id]) !!}
    </label>

@endforeach