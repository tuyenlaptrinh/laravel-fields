<?php
namespace Tuyenlaptrinh\LaravelFields\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Group extends Component
{
    public string $className;
    public string $help;
    public string $id;
    public bool $margin;
    public bool $group;

    public function __construct(
        string $className = '',
        string $help = '',
        string $id = '',
        bool $margin = true,
        bool $group = true
    )
    {
        $this->className = $className;
        $this->help = $help;
        $this->margin = $margin;
        $this->id = $id;
        $this->group = $group;
    }

    public function render(): View|Closure|string
    {
        return view('laravel-fields::'.config('fields.library','bootstrap').'.group');
    }
}
