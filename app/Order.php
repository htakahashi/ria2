
<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Order;
class Order extends Model
{
    protected $fillable = ['first', 'last', 'item', 'price', 'address', 'city', 'state', 'zip'];
}