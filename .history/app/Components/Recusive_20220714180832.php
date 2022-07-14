<?php
namespace App\Components;

use App\Models\Category;

class Recusive
{
    private $data;
    private $htmlSelect= "";
    /**
     * Class constructor.
     */
    public function __construct($data)
    {
        $this->$data = $data;
    }
    public function categoryRecursive($id=0, $text = "")
    {

        foreach ($this->data as $value) {
            if ($value['parent_id'] === $id) {
                $this->htmlSelect .= "<option>" . $text . $value['category_name'] . "</option>";
                $this->categoryRecursive($value['category_id'], $text . '-');
            }
        }
        return $this->htmlSelect;
    }
}
