<?php
    namespace App\Components;

use App\Models\Menu;

    class MenusRecusive{
        private $html;
        /**
         * Class constructor.
         */
        public function __construct()
        {
            $this->html = "";
        }
        public function menuRecusiveAdd()
        {
            $data = Menu::where('parent_id', );
        }
    }
