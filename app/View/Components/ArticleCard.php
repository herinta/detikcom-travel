<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ArticleCard extends Component
{
    /**
     * Create a new component instance.
     */
    public $image;
    public $title;
    public $time;

     public function __construct($image, $title, $time)
    {
        $this->image = $image;
        $this->title = $title;
        $this->time = $time;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.article-card');
    }
}
