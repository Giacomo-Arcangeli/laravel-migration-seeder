<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    use HasFactory;

    public function getDetails(){
        return $this->azienda . ' / ' . $this->stazione_di_partenza . ' / ' . $this->stazione_di_arrivo . ' / ' . $this->orario_di_partenza . ' / ' . $this->orario_di_arrivo . ' / ' . $this->codice_treno . ' / ' . $this->numero_carrozze . ' / ' . $this->in_orario . ' / ' . $this->cancellato;
    }
}
