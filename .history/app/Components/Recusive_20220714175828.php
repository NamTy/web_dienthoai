<?php
namespace App\Components;

class Recusive
{
    private $data;
    /**
     * Class constructor.
     */
    public function __construct($data)
    {
        $this->$data = $data;
    }
    public function categoryRecursive($id, $text = "")
    {
        $data = Category::all();
        foreach ($data as $value) {
            if ($value['parent_id'] === $id) {
                $this->htmlSelect .= "<option>" . $text . $value['category_name'] . "</option>";
                $this->categoryRecursive($value['category_id'], $text . '-');
            }
        }
        return $this->htmlSelect;
    }
}
