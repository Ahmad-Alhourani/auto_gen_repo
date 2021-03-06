<?php

  namespace App\Models;

    use Illuminate\Database\Eloquent\Model;
    use App\Models\Traits\Attribute\GemSightingAttribute;
    use App\Models\Auth\User;
    use Illuminate\Support\Collection;
    use Sofa\Eloquence\Eloquence;
    use Sofa\Eloquence\Metable;
    use Illuminate\Database\Eloquent\SoftDeletes;

    class GemSighting extends Model{
        use GemSightingAttribute, Eloquence, Metable, SoftDeletes ;

        

        /**
        * The attributes that are mass assignable.
        *
        * @var array
        */

        protected $fillable = [ 
            "gem_id",
            "player_id",
            "founded_at",
            "lat",
            "lng",
        ];
        
        public $timestamps = false;


        /**
        * Get the key name for route model binding.
        *
        * @return string
        */
        public function getRouteKeyName()
        {
           return 'id';
        }
                
        /* ************************ RELATIONS ************************ */
        

        

        

         
        
           /**
        * Get  the Gem that owns the GemSighting.
        * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
        */
        public function gem() {
            return $this->belongsTo(Gem::class);
        }
        
           /**
        * Get  the Player that owns the GemSighting.
        * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
        */
        public function player() {
            return $this->belongsTo(Player::class);
        }
        

        

    }