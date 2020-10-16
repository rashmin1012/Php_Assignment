<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyBlog extends Model
{
    public function ins_record($date,$t,$desc,$img)
    {
        $this->achieve_date = $date;
        $this->title = $t;
        $this->descri_body = $desc;
        $this->image_name = $img;
        $this->save();
    }
}
