<?php

namespace andyp\pagebuilder\hero_random\filters;

use andyp\pagebuilder\hero_random\layers\init;

class filter_module
{

    public function __construct()
    {
        add_filter('pagebuilder_hero_randomiser', [$this, 'filter_code'], 10, 1);
    }


    public function filter_code($organism)
    {
        if (empty($organism['enabled'])){ return; }
        if ($organism['acf_fc_layout'] != 'hero_randomiser'){ return; }

        $hero = new init;
        $hero->set_config($organism);
        $hero->run();

        return $hero->get_result();
    }

}