<?php

namespace Modules\Addresses\Entities;

use Illuminate\Database\Eloquent\Model;

use Modules\Clients\Entities\Client;

class Address extends Model
{
    protected $fillable = [
    	'address1',
    	'address2',
    	'postalCode',
    	'city',
    	'province',
    	'countryCode'
    ];

    public function clients()
    {
    	return $this->morphedByMany(Client::class, 'addressable');
    }
}
