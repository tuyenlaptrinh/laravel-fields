@aware(['group' => false])
@if(!$group)
<div class="{!! ($margin ? 'mb-3': '').(!empty($rootClass) ? ' '.$rootClass: '') !!}">
@endif
    @if(!empty($label) && !$group)
        <label for="{!! $id !!}" class="form-label">{!! $label !!}</label>
    @endif
    <textarea {!! $attributes->merge(['class' => 'form-control' . ($type === 'color' ? ' form-control-color' : '').($className ? ' '.$className:'')])  !!}
        type="{!! $type !!}"
        name="{!! $name !!}"
        id="{!! $id !!}"
        placeholder="{!! $placeholder !!}"
        {!! $required ? 'required':'' !!}
        rows="{!! $rows !!}"
        {!! $cols > 0 ? 'cols="'.$cols.'"' : '' !!}
        {!! $attributes !!}
    >{!! $value !!}</textarea>
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
