namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = ['dish_id', 'user_id', 'rating', 'comment'];

    public function dish()
    {
        return $this->belongsTo(Dish::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
