<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;

    // fillable array
    protected $fillable = ['title', 'description','thumb', 'price', 'series', 'sale_date', 'type'];

    // (EROORE) per disabilitare l'aggiornamento delle colonne 'updated_at' e 'created_at'
    public $timestamps = false;
}

// Le colonne 'updated_at' e 'created_at' sono colonne che vengono comunemente utilizzate in Laravel
// per tenere traccia della data e dell'ora in cui un record è stato creato o aggiornato nel database.
// Ecco cosa rappresentano:

// 'CREATED_AT': Questa colonna registra la data e l'ora in cui un record è stato creato per la prima
// volta nel database. Quando viene creato un nuovo record, questa colonna viene automaticamente popolata
// con la data e l'ora correnti.

// 'UPDATED_AT':  Questa colonna registra la data e l'ora dell'ultima modifica apportata a un record
// nel database. Quando un record esistente viene modificato e salvato di nuovo nel database, questa
// colonna viene automaticamente aggiornata con la data e l'ora correnti.

// Queste colonne sono utili per tenere traccia delle modifiche ai record e per eseguire query che richiedono
// informazioni sul momento in cui i record sono stati creati o aggiornati. Tuttavia, possono essere
// disabilitate o personalizzate a seconda delle esigenze specifiche dell'applicazione.
