<?php

namespace andyp\pagebuilder\hero_random\layers;

class image
{

    private $image;

    private $global;
    private $class;

    private $result;


    public function set_image($image)
    {
        $this->image = $image;
    }

    public function set_global($global)
    {
        $this->global = $global;
    }

    public function set_class($class)
    {
        $this->class = $class;
    }

    
    public function get_result()
    {
        return $this->result;
    }


    public function run()
    {
        $this->build_image();
    }

    private function build_image()
    {
        $img = '<div class="bitmap">';
            $img .= '<picture>';
                $img .= '<img ';
                $img .= 'class="'.$this->global.' '.$this->class.'" ';
                $img .= 'src="'.$this->image['url'].'" ';
                $img .= 'alt="Hero Image" ';
                $img .= 'title="'.$this->image['title'].'" ';
                $img .= 'width="'.$this->image['width'].'" ';
                $img .= 'height="'.$this->image['height'].'" ';
                $img .= '/>';
            $img .= '</picture>';
        $img .= '</div>';

        $this->result = $img;
    }

}