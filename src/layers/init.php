<?php

namespace andyp\pagebuilder\hero_random\layers;

class init
{

    private $config;
    
    private $result = [];

    public function set_config($config)
    {
        $this->config = $config;
    }

    
    public function get_result()
    {
        return $this->result;
    }


    public function run()
    {
        $this->random_selections();
        $this->set_luminance();
        $this->open_text_html_wrap();
        $this->generate_text();
        $this->generate_html();
        $this->close_text_html_wrap();
        $this->generate_image();
        $this->generate_svg();
        $this->generate_wrapper();
        $this->result_to_string();
    }

    private function random_selections()
    {
        $this->random_element('images');
        $this->random_element('svgs');
        $this->random_element('text');
        $this->random_element('colours');
    }

    private function random_element($array_name)
    {
        $random_key = array_rand($this->config[$array_name]);
        $this->config[$array_name] = $this->config[$array_name][$random_key];
    }

    private function set_luminance()
    {
        if ($this->config["colours"]["svg_luminance"]){
            $this->config["colours"]["svg_luminance"] = $this->config['svgs']["svg_light"];
        }
        if (!$this->config["colours"]["svg_luminance"]){
            $this->config["colours"]["svg_luminance"] = $this->config['svgs']["svg_dark"];
        }
        if ($this->config["colours"]["text_luminance"]){
            $this->config["colours"]["text_luminance"] = $this->config['text']["text_light"];
            $this->config["colours"]["text_luminance_class"] = $this->config['text']["text_light_class"];
            $this->config["colours"]["text_luminance_class_inv"] = $this->config['text']["text_dark_class"];
        }
        if (!$this->config["colours"]["text_luminance"]){
            $this->config["colours"]["text_luminance"] = $this->config['text']["text_dark"];
            $this->config["colours"]["text_luminance_class"] = $this->config['text']["text_dark_class"];
            $this->config["colours"]["text_luminance_class_inv"] = $this->config['text']["text_light_class"];
        }

    }


    private function generate_svg()
    {
        $svg = new svg;
        $svg->set_svg($this->config['svgs']['svg']);
        $svg->set_luminance($this->config["colours"]["svg_luminance"]);
        $svg->run();
        $this->result[] = $svg->get_result();
    }

    private function generate_image()
    {
        $img = new image;
        $img->set_image($this->config['images']['image']);
        $img->set_global($this->config['global_image_classes']);
        $img->set_class($this->config['images']['image_classes']);
        $img->run();
        $this->result[] = $img->get_result();
    }

    private function open_text_html_wrap()
    {
        $this->result[] = $this->config["html_text_wrapper_open"];
    }

    private function close_text_html_wrap()
    {
        $this->result[] = $this->config["html_text_wrapper_close"];
    }


    private function generate_text()
    {
        $text = new text;
        $text->set_text($this->config['text']);
        $text->set_wrapper_classes($this->config['text_wrapper_classes']);
        $text->set_luminance($this->config["colours"]["text_luminance"]);
        $text->run();
        $this->result[] = $text->get_result();
    }

    private function generate_html()
    {
        $html = new html;
        $html->set_html($this->config['html']);
        $html->set_text_luminance($this->config["colours"]["text_luminance"]);
        $html->set_text_luminance_class($this->config["colours"]["text_luminance_class"]);
        $html->set_text_luminance_class_inv($this->config["colours"]["text_luminance_class_inv"]);
        $html->set_svg_luminance($this->config["colours"]["svg_luminance"]);
        $html->set_background_colour($this->config['colours']['css_colour']);
        $html->run();
        $this->result[] = $html->get_result();
    }

    private function generate_wrapper()
    {
        $wrap = new wrapper;
        $wrap->set_class($this->config['wrapper_classes']);
        $wrap->set_colour($this->config['colours']['css_colour']);
        $wrap->set_result($this->result);
        $wrap->run();
        $this->result = $wrap->get_result();
    }


    
    private function result_to_string()
    {
        $result = $this->result;
        $this->result = '';

        foreach ($result as $line) {
            $this->result .= $line. PHP_EOL;
        }
    }

}