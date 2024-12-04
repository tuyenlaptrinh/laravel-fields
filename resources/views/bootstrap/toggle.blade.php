@aware(['group' => false])
@if(!$group)
    <div class="{!! $grid ? 'row align-items-center ':'' !!}{!! ($margin ? 'mb-3': '').(!empty($rootClass) ? ' '.$rootClass: '') !!}">
        @endif
        @if(!$group)
            @if($grid)
                <div class="col-md-{!! 12 - $size !!}">
                    @endif
                    @if(!empty($label))
                        <label class="form-label{!! !empty($help) ? ' mb-0' : '' !!}">{!! $label !!}</label>
                    @endif
                    @if(!empty($help))
                        <div style="font-size: 75%" class="mb-2">{!! $help !!}</div>
                    @endif
                    @if($grid)
                </div>
            @endif
        @endif
        @if($grid)
            <div class="col-md-{!! $size !!}">
                @endif
                <div class="form-check form-switch">
                    <input
                        value="1"
                        class="form-check-input {!! $className !!}"
                        type="checkbox"
                        role="switch"
                        id="{!! $id !!}"
                        name="{!! $name !!}"
                        {!! $required ? 'required':'' !!}
                        {!! !empty($value) ? ' checked':'' !!}
                    />
                </div>
                @if(!$group)
                    @error($name)
                    <div class="invalid-feedback d-block">{!! $message !!}</div>
                    @enderror
                @endif
                @if($grid)
            </div>
        @endif
        @if(!$group)
    </div>
@endif
