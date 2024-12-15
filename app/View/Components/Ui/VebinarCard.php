<?php

namespace App\View\Components\UI;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class VebinarCard extends Component
{
    public $title;
    public $description;
    public $author;
    public $speaker;
    public $startDate;
    public $endDate;

    public function __construct(
        $title = '', 
        $description = '',
        $author = '',
        $speaker = '',
        $startDate= '',
        $endDate = ''
        )
    {
       $this->title = $title;
       $this->description = $description;
       $this->author = $author;
       $this->speaker = $speaker;
       $this->startDate = $startDate;
       $this->endDate = $endDate;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.ui.vebinar-card');
    }
}
