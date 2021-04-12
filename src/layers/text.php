<?php

namespace andyp\pagebuilder\hero_random\layers;

class text
{

    private $text;
    
    private $luminance;

    private $wrapper_classes;

    private $result;

    public function set_text($text)
    {
        $this->text = $text;
    }

    public function set_luminance($luminance)
    {
        $this->luminance = $luminance;
    }

    public function set_wrapper_classes($wrapper_classes)
    {
        $this->wrapper_classes = $wrapper_classes;
    }

    
    public function get_result()
    {
        return $this->result;
    }


    public function run()
    {
        $txt = '<div class="'.$this->wrapper_classes.'" style="color:'.$this->luminance.';">';
            $txt .= '<h2 class="'.$this->text['title_classes'].'" style="text-indent: -0.06em;">'.$this->text['title'].'</h2>';
            $txt .= '<h3 class="'.$this->text['subtitle_classes'].'">'.$this->text['subtitle'].'</h3>';
        $txt .= '</div>';

        $this->result = $txt;
    }

}