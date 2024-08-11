use App\Models\Thing;
use Illuminate\Database\Eloquent\Factories\Factory;

class ThingFactory extends Factory
{
    protected $model = Thing::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->sentence,
            'warranty' => $this->faker->date(),
            'master_id' => \App\Models\User::factory(),
        ];
    }
}
