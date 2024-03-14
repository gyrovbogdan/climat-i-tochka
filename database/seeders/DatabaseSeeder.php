<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Conditioner;
use App\Models\ConditionerModel;
use App\Models\Service;
use App\Models\AdditionalService;
use App\Models\Contact;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Conditioner::factory()->has(ConditionerModel::factory()->count(4))->count(30)->create();

        $promo_model = ConditionerModel::first();
        $promo_model->is_promotional = true;
        $promo_model->save();

        $services = [
            "Кондиционер, сплит-система (7, 9) до 3 кВт" => "4 000 руб.",
            "Кондиционер, сплит-система (12) до 4 кВт" => "4 500 руб.",
            "Кондиционер, сплит-система (18) до 6 кВт" => "4 500 руб.",
            "Кондиционер, сплит-система (24 и выше) от 6 кВт" => "от 5 500 руб.",
        ];

        $additionalServices = [
            "Штроба по бетону" => "500 руб./м",
            "Штроба в ракушке, газобетон" => "350 руб./м",
            "Пробивка дополнительного отверстия в стене (2-го и более)" => "500 руб.",
            "Демонтаж/монтаж стеклопакета" => "500 руб.",
            "Демонтаж внутреннего/наружного блока" => "1500 руб./шт",
            "Монтаж внутреннего/наружного блока" => "2000 руб.",
            "Демонтаж кондиционера (07, 09, 12)" => "3000 руб.",
            "Демонтаж кондиционера (18, 24)" => "от 3500 руб.",
            "Дополнительный метр трассы (1/4, 3/8)" => "1500 руб.",
            "Заправка (дозаправка) фрионом (R22, R410, R32) за 100 грамм" => "650 руб.",
            "Монтаж декоративного короба" => "450 руб./п.м",
        ];
        function createServices($model, $services)
        {
            foreach ($services as $serviceName => $price)
                $model::create(['name' => $serviceName, 'price' => $price]);
        }

        createServices(Service::class, $services);
        createServices(AdditionalService::class, $additionalServices);

        $promo_service = AdditionalService::first();
        $promo_service->is_promotional = true;
        $promo_service->save();


        Contact::create(['name' => 'phone', 'data' => '+7 (978) 123-45-67']);
        Contact::create(['name' => 'vk', 'data' => 'https://vk.com/название_группы']);
        Contact::create(['name' => 'whatsApp', 'data' => 'https://wa.me/номер_телефона']);
        Contact::create(['name' => 'telegram', 'data' => 'https://telegram.me/имя_пользователя']);


        User::create(['name' => 'admin', 'password' => 'admin']);
    }
}
