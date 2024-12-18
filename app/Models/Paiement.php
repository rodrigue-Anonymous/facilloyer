<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Paiement
 * 
 * @property int $id
 * @property int $locataire_id
 * @property int $bien_id
 * @property float $montant
 * @property Carbon $date
 * @property string $statut
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Bien $bien
 * @property Locataire $locataire
 *
 * @package App\Models
 */
class Paiement extends Model
{
	protected $table = 'paiements';

	protected $casts = [
		'locataire_id' => 'int',
		'bien_id' => 'int',
		'montant' => 'float',
		'date' => 'datetime'
	];

	protected $fillable = [
		'locataire_id',
		'bien_id',
		'montant',
		'date',
		'statut'
	];

	public function bien()
	{
		return $this->belongsTo(Bien::class);
	}

	public function locataire()
	{
		return $this->belongsTo(Locataire::class);
	}
}
