<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Product;

class ProductHeader2 extends Component
{
    public $category;

    /**
     * Create a new component instance.
     *
     * @param string $category
     * @return void
     */
    public function __construct($category)
    {
        $this->category = $category;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.product-header2');
    }
}
