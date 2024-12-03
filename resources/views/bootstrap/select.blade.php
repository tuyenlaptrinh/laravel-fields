@aware(['group' => false])
@if(!$group)
<div class="{!! ($margin ? 'mb-3': '').(!empty($rootClass) ? ' '.$rootClass: '') !!}">
@endif
    @if(!empty($label) && !$group)
        <label class="form-label" for="{!! $id !!}">{!! $label !!}</label>
    @endif
    <select
        class="form-select @error($name) is-invalid @enderror"
        {!! $attributes !!}
        name="{!! $name !!}{!! $multiple ? '[]':'' !!}"
        {!! $multiple ? 'multiple':''!!}
        id="{!! $id !!}"
        {!! $attributes !!}
    >
        @if(!empty($placeholder))
            <option value="">{!! $placeholder !!}</option>
        @endif
        @if(is_array($options) && count($options))
            @foreach($options as $key=>$option)
                <option value="{!! $key !!}"{!! $key == $value ? ' selected':'' !!}>{!! $option !!}</option>
            @endforeach
        @endif
    </select>
    @if(!$group)
        @error($name)
        <div class="invalid-feedback">{!! $message !!}</div>
        @enderror
        @if(!$errors->has($name) && !empty($help))
            <div style="font-size: 75%" class="mt-1">{!! $help !!}</div>
        @endif
    @endif
@if(!$group)
</div>
@endif
