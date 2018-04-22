<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
  public function addPurchase($body)

{
  $this->purchases()->create(compact('product'));
  $this->purchases()->create(compact('fName'));
  $this->purchases()->create(compact('lName'));
  $this->purchases()->create(compact('address'));
  $this->purchases()->create(compact('city'));
  $this->purchases()->create(compact('state'));
  $this->purchases()->create(compact('zip'));
  $this->purchases()->create(compact('card'));
}
}
