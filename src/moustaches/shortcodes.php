<?php

namespace andyp\pagebuilder\rawcode\moustaches;

/**
 *  Matches [shortcodes]
 */
class shortcodes
{

    public function __construct()
    {
        add_filter('rawcode_moustaches', [$this, 'filter_code'], 10, 1);
    }
    
    public function filter_code($code)
    {
        $code = $this->match_shortcodes_with_content($code);
        $code = $this->match_single_shortcodes($code);

        return $code;
    }



    private function match_shortcodes_with_content($code)
    {
        preg_match_all('/(\[.*\])/', $code, $matches);

        foreach ($matches[0] as $key => $match)
        {
            $words = explode(' ', $match);
            $shortcode = str_replace('[','',$words[0]);
            $closing_word = strpos($matches[0][1+$key], $shortcode);

            // theres a closer [/tag] for the shortcode.
            if ($closing_word !== false){
                // match the tag and contents
                $regex = '/(\['.$shortcode.'[\s|\S]*\/'.$shortcode.'\])/';
                preg_match($regex, $code, $new_match);
                // run it
                $shortcode_result = do_shortcode($new_match[0]);
                // replace with new code.
                $code = str_replace($new_match, $shortcode_result, $code);
            }

        }

        return $code;
    }





    private function match_single_shortcodes($code)
    {
        preg_match_all('/(\[.*\])/', $code, $matches);

        foreach ($matches[0] as $match)
        {
            $shortcode_result = do_shortcode($match);

            if (empty($shortcode_result)){ continue; }
            
            $code = str_replace($match, $shortcode_result, $code);
        }

        return $code;
    }

}