<?php

namespace App\View\Components;

use Illuminate\View\Component;

class sliderItem extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public string $image_url;
    public string $sub_heading;
    public string $short_description;
    public string $post_url;

    /**
     * Create the component instance.
     * 
     * @param string $image_url
     * @param string $sub_heading
     * @param string $short_description
     * @param string $post_url
     */

    public function __construct($image_url, $sub_heading, $short_description, $post_url)
    {
        $this->image_url = $image_url;
        $this->sub_heading = $sub_heading;
        $this->short_description = $short_description;
        $this->post_url =$post_url;
        }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.slider-item');
    }
}
