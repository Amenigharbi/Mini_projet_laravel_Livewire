<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    //a un type donné
    public function type()
    {
        return $this->belongsTo(TypeArticle::class,"type_articles_id","id");
    }
    //plusieurs tarifications pour un article
    public function tarifications()
    {
        return $this->hasMany(tarification::class);
    }
    //peut avoir plusieurs locations
    public function locations()
    {
        return $this->belongsToMany(Location::class,"article_location","article_id","location_id");
    }
    // un article a des proprietes
    public function proprietes()
    {
        return $this->belongsToMany(PropreteArticle::class,"article_propriete","article_id","propriete_article_id");
    }
}
