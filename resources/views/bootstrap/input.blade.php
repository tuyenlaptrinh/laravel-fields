@aware(['group' => false])
@if(!$group)
<div class="{!! $grid ? 'row ': '' !!}{!! ($margin ? 'mb-3': '').(!empty($rootClass) ? ' '.$rootClass: '') !!}">
@endif
    @if(!empty($label) && !$group)
        @if($grid)
            <div class="col-md-{!! 12 - $size !!}">
                <label for="{!! $id !!}">{!! $label !!}</label>
                @if(!empty($help))
                    <div style="font-size: 75%">{!! $help !!}</div>
                @endif
            </div>
        @else
            <label for="{!! $id !!}" class="form-label">{!! $label !!}</label>
        @endif
    @endif
    @if($grid)
        <div class="col-md-{!! $size !!}">
    @endif
    <input class="form-control {!! $className !!} @if($type =='color') form-control-color @endif @error($name) is-invalid @enderror"
           type="{!! $type !!}"
           name="{!! $name !!}"
           id="{!! $id !!}"
           placeholder="{!! $placeholder !!}"
           value="{!! $value !!}"
           {!! $required ? 'required':'' !!}
        {!! $attributes !!}
    />
    @if(!$group)
        @error($name)
        <div class="invalid-feedback">{!! $message !!}</div>
        @enderror
        @if(!$grid && !$errors->has($name) && !empty($help))
            <div style="font-size: 75%" class="mt-1">{!! $help !!}</div>
        @endif
    @endif
    @if($grid)
        </div>
    @endif
@if(!$group)
</div>
@endif
