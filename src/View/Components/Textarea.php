<?php
namespace Tuyenlaptrinh\LaravelFields\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Textarea extends Component
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
    public int $rows;
    public int $cols;

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
        int $rows = 5,
        int $cols = 0,
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
        $this->rows = $rows;
        $this->cols = $cols;

    }

    public function render(): View|Closure|string
    {
        return view('laravel-fields::'.config('fields.library','bootstrap').'.textarea');
    }
}
