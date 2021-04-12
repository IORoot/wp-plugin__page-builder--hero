<?php

namespace andyp\pagebuilder\rawcode\moustaches;

/**
 *  Matches <?php ?>
 */
class php
{

    public function __construct()
    {
        add_filter('rawcode_moustaches', [$this, 'filter_code'], 20, 1);
    }
    
    public function filter_code($code)
    {

        preg_match_all('/<\?php(.*)\?>/', $code, $matches);

        foreach ($matches[1] as $match)
        {
            $shortcode_result = eval($match);

            if (empty($shortcode_result)){ continue; }
            
            $code = str_replace('<?php' . $match . '?>', $shortcode_result, $code);
        }

        return $code;

    }

}