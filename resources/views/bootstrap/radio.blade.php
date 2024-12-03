@aware(['group' => false])
@if(!$group)
<div class="{!! ($margin ? 'mb-3': '').(!empty($rootClass) ? ' '.$rootClass: '') !!}">
@endif
    @if(!empty($label) && !$group)
        <label class="form-label">{!! $label !!}</label>
    @endif
    @if(is_array($options) && count($options))
        <div class="d-flex align-items-center">
        @foreach($options as $key=>$option)
            <div class="form-check form-check-inline">
                <input class="form-check-input"
                       type="radio"
                       name="{!! $name !!}"
                       id="{!! $id !!}-{!! $key !!}"
                       value="{!! $key !!}"
                       {!! $value == $key ? 'checked':'' !!}
                    {!! $required ? 'required':'' !!}
                />
                <label class="form-check-label" for="{!! $id !!}-{!! $key !!}">{!! $option !!}</label>
            </div>
        @endforeach
        </div>
    @endif
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
