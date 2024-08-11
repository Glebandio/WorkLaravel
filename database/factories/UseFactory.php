
namespace Database\Factories;

use App\Models\Use;
use Illuminate\Database\Eloquent\Factories\Factory;

class UseFactory extends Factory
{
    protected $model = Use::class;

    public function definition()
    {
        return [
            'thing_id' => \App\Models\Thing::factory(),
            'place_id' => \App\Models\Place::factory(),
            'user_id' => \App\Models\User::factory(),
            'amount' => $this->faker->numberBetween(1, 100),
        ];
    }
}
