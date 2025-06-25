<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LabelRecord extends Model
{
    protected $table = 'label_record_589';

    protected $fillable =   ['lableName','adress','city','country','establishedYear','ceo','contact','website','musicGenre','famousArtists','numberOfAlbums','revenue',]; 
}
