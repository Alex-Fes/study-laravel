<?php

namespace App\View\Components\Ui;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{

    public $value;
    public $id;
    public $name;
    public $label;
    public $placeholder;
    public $type;

    /**
     * Create a new component instance.
     */
    public function __construct(
        $value,
        $id = '',
        $label = '',
        $name = '',
        $placeholder = '',
        $type = 'text'
    ) {
        $this->value = $value;
        $this->id = $id;
        $this->label = $label;
        $this->name = $name;
        $this->placeholder = $placeholder;
        $this->type = $type;
    }

    public function onChange() {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.ui.input');
    }
}
