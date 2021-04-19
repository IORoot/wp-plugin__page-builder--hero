<?php

namespace andyp\pagebuilder\hero_random\layers;

class html
{

    private $html;
    private $html_instance;

    private $text_luminance;
    private $text_luminance_class;
    private $text_luminance_class_inv;
    private $svg_luminance;
    private $background_colour;

    private $result;

    public function set_html($html)
    {
        $this->html = $html;
    }

    public function set_text_luminance($text_luminance)
    {
        $this->text_luminance = $text_luminance;
    }

    public function set_text_luminance_class($text_luminance_class)
    {
        $this->text_luminance_class = $text_luminance_class;
    }

    public function set_text_luminance_class_inv($text_luminance_class_inv)
    {
        $this->text_luminance_class_inv = $text_luminance_class_inv;
    }

    public function set_svg_luminance($svg_luminance)
    {
        $this->svg_luminance = $svg_luminance;
    }

    public function set_background_colour($background_colour)
    {
        $this->background_colour = $background_colour;
    }

    
    public function get_result()
    {
        return $this->result;
    }


    public function run()
    {
        
        foreach($this->html as $this->html_key => $this->html_instance)
        {
            $this->remove_text_bug();
            $this->replace_moustaches();
            $this->array_to_string();
        }


    }


    private function remove_text_bug()
    {
        $this->text_luminance_class_inv = str_replace('text-', '', $this->text_luminance_class_inv);
    }


    private function replace_moustaches()
    {
        $layer = str_replace('{{text_luminance}}', $this->text_luminance, $this->html_instance['html_layer']);
        $layer = str_replace('{{text_luminance_class}}', $this->text_luminance_class, $layer);
        $layer = str_replace('{{text_luminance_class_inv}}', $this->text_luminance_class_inv, $layer);
        $layer = str_replace('{{svg_luminance}}', $this->svg_luminance, $layer);
        $layer = str_replace('{{background_colour}}', $this->background_colour, $layer);

        $this->html[$this->html_key]['html_layer'] = $layer;
    }

    
    private function array_to_string()
    {
        $this->result .= $this->html[$this->html_key]['html_layer'];
    }



}