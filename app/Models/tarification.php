<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tarification extends Model
{
    use HasFactory;
    protected $table="tarification";
    public function duree_location()
    {
        return $this->belongsTo(duree_location::class,"duree_location_id","id");
    }
    //quel est l'article lié à cette tarification
    public function article()
    {
        return $this->belongsTo(Article::class,"article_id","id");
    }
}
