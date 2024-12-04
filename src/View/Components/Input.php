<?php
namespace Tuyenlaptrinh\LaravelFields\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    public string $name;
    public string $label;
    public string $placeholder;
    public string $type;
    public bool $required;
    public bool $margin;
    public string $className;
    public string $id;
    public $value;
    public string $default;
    public string $help;
    public bool $multiple;
    public string $rootClass;
    public bool $grid;
    public string $size;

    public function __construct(
        string $name = '',
        string $label = '',
        string $type = 'text',
        bool $required = false,
        bool $margin = true,
        string $className = '',
        string $id = '',
        $value = '',
        string $placeholder = '',
        string $help = '',
        string $default = '',
        bool $multiple = false,
        string $rootClass = '',
        bool $grid = false,
        string $size = '9',
    )
    {
        $this->name = $name;
        $this->label = $label;
        $this->type = $type;
        $this->required = $required;
        $this->className = $className;
        $this->id = empty($id) ? 'field'.uniqid() : $id;
        $this->value = old($this->name,(empty($value) ? $default : $value));
        $this->placeholder = $placeholder;
        $this->help = $help;
        $this->default = $default;
        $this->margin = $margin;
        $this->multiple = $multiple;
        $this->rootClass = $rootClass;
        $this->grid = $grid;
        $this->size = !empty($label) ? $size : '12';

    }

    public function render(): View|Closure|string
    {
        return view('laravel-fields::'.config('fields.library','bootstrap').'.input');
    }
}
