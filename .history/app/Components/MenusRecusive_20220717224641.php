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

        public function menuRecusiveAdd($parent_id = 0, $subMack = "")
        {
            $data = Menu::where('parent_id',$parent_id )->get();
            foreach ($data as $value) {
                $this->html = '<option value="'.$value->id .'">'.$value->name.'</option>';
                $this->menuRecusiveAdd($value->id,$subMack."--");
            }

            return $this->html;
        }
    }
