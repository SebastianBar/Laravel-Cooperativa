<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sesion extends Model
{
    use SoftDeletes;

	protected $table = 'vfpsesion';
    protected $dates = ['fecha', 'fechach', 'fechafac', 'deleted_at'];
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'vfptable', 'tipo', 'numero', 'correl', 'va_ifrs', 'canbco',
    	'banco', 'cuenta', 'cheque', 'fecha', 'glosa',
    	'benefi', 'fechach', 'area', 'linea', 'codigo',
    	'tipdoc', 'fechafac', 'fac', 'corrfac', 'detalle1',
    	'detalle2', 'detalle3', 'detalle4', 'imp', 'debe',
    	'haber', 'estado',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'vfptable', 'created_at', 'updated_at', 'deleted',
    ];
}