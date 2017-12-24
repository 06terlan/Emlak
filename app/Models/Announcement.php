<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Library\MyClass;

class Announcement extends Model
{
    //not deleted datas
    public static function realPost()
    {
    	return self::where('deleted' , 0)->orderBy('created_at', 'desc');
    }

    public static function isLinkExist($link)
    {
        return self::where('link', '=', $link)->count() > 0 ? true : false;
    }

    public function getShortContent()
    {
        return mb_strimwidth($this->content, 0, 100, "...");
    }

    public function getAnnouncementType()
    {
        return isset(MyClass::$announcementTypes[$this->type]) ? MyClass::$announcementTypes[$this->type] : "-";
    }
}
