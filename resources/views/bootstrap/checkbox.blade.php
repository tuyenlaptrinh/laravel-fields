@aware(['group' => false])
@if(!$group)
    <div class="{!! $grid ? 'row ':'' !!}{!! ($margin ? 'mb-3': '').(!empty($rootClass) ? ' '.$rootClass: '') !!}">
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
                @if(is_array($options) && count($options))
                    <div class="{!! $inline ? 'd-flex align-items-center' : '' !!}">
                        @foreach($options as $key=>$option)
                            <div class="form-check{!! $inline ? ' form-check-inline' : '' !!}">
                                <input class="form-check-input"
                                       type="checkbox"
                                       name="{!! $name !!}[]"
                                       id="{!! $id !!}-{!! $key !!}"
                                       value="{!! $key !!}"
                                    {!! $required ? 'required':'' !!}
                                    {!! (is_array($value) && in_array($key,$value)) || $value == $key ? 'checked':'' !!}
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
                @endif
                @if($grid)
            </div>
        @endif
        @if(!$group)
    </div>
@endif
