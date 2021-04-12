<?php

namespace andyp\pagebuilder\hero_random\layers;

class wrapper
{

    private $result;

    private $class;

    private $colour;

    public function set_result($result)
    {
        $this->result = $result;
    }

    public function set_class($class)
    {
        $this->class = $class;
    }

    public function set_colour($colour)
    {
        $this->colour = $colour;
    }

    
    public function get_result()
    {
        return $this->result;
    }


    public function run()
    {
        $this->front();
        $this->back();
    }


    public function front()
    {
        $front = '<div class="'.$this->class.'" style="background-color:'.$this->colour.'" >';
        array_unshift($this->result, $front);
    }


    public function back()
    {
        $back = '</div>';
        $this->result[] = $back;
    }


}