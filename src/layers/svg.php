<?php

namespace andyp\pagebuilder\hero_random\layers;

class svg
{

    private $svg;

    private $luminance;

    private $result;

    public function set_svg($svg)
    {
        $this->svg = $svg;
    }

    public function set_luminance($luminance)
    {
        $this->luminance = $luminance;
    }

    
    public function get_result()
    {
        return $this->result;
    }


    public function run()
    {
        $this->result = '<div class="vector">';
        $this->result .= str_replace('#FFFFFF', $this->luminance, $this->svg);
        $this->result .= '</div>';
    }

}