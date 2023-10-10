<?php

namespace App\View\Components;

use MisterSimon\DaisyComponents\Components\Card;

class AppCard extends Card
{
    public function __construct(
        public $compact = true,
        public $bordered = true,
        public $imgEnd = null,
        public $imgFull = null,
        public $imgSide = null
    ) {
        parent::__construct(
            $compact,
            $bordered,
            $imgEnd,
            $imgFull,
            $imgSide
        );

        $this->defaultAttributes['class'] .= ' shadow-xl';
    }
}
