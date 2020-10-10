<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class AddProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Пельмени',
                'calories' => 20,
                'squirrels' => 20,
                'fats' => 20,
                'carbohydrates' => 20,
                'portion' => 100,
                'meal' => [
                    [
                        'name' => 'Обед',
                        'value' => 'dinner',
                    ],
                    [
                        'name' => 'Ужин',
                        'value' => 'supper',
                    ],
                    [
                        'name' => 'Завтрак',
                        'value' => 'breakfast',
                    ],
                    [
                        'name' => 'Перекус',
                        'value' => 'snack',
                    ],
                ],
            ],
            [
                'name' => 'Перловка',
                'calories' => 122,
                'squirrels' => 2.2,
                'fats' => 0.44,
                'carbohydrates' => 28,
                'portion' => 200,
                'meal' => [
                    [
                        'name' => 'Завтрак',
                        'value' => 'breakfast',
                    ],
                ],
            ],
            [
                'name' => 'Рис',
                'calories' => 139,
                'squirrels' => 3.3,
                'fats' => 0.42,
                'carbohydrates' => 29.5,
                'portion' => 200,
                'meal' => [
                    [
                        'name' => 'Обед',
                        'value' => 'dinner',
                    ],
                    [
                        'name' => 'Ужин',
                        'value' => 'supper',
                    ],
                    [
                        'name' => 'Завтрак',
                        'value' => 'breakfast',
                    ],
                ],
            ],
            [
                'name' => 'Овсянная каша',
                'calories' => 88,
                'squirrels' => 3,
                'fats' => 1.7,
                'carbohydrates' => 15,
                'portion' => 100,
                'meal' => [
                    [
                        'name' => 'Завтрак',
                        'value' => 'breakfast',
                    ],
                ],
            ],
            [
                'name' => 'Омлет',
                'calories' => 100,
                'squirrels' => 7.2,
                'fats' => 6.9,
                'carbohydrates' => 2.4,
                'portion' => 100,
                'meal' => [
                    [
                        'name' => 'Завтрак',
                        'value' => 'breakfast',
                    ],
                    [
                        'name' => 'Перекус',
                        'value' => 'snack',
                    ],
                ],
            ],
            [
                'name' => 'Пельмени',
                'calories' => 20,
                'squirrels' => 20,
                'fats' => 20,
                'carbohydrates' => 20,
                'portion' => 100,
                'meal' => [
                    [
                        'name' => 'Обед',
                        'value' => 'dinner',
                    ],
                    [
                        'name' => 'Ужин',
                        'value' => 'supper',
                    ],
                    [
                        'name' => 'Завтрак',
                        'value' => 'breakfast',
                    ],
                    [
                        'name' => 'Перекус',
                        'value' => 'snack',
                    ],
                ],
            ],
            [
                'name' => 'Макароны',
                'calories' => 103,
                'squirrels' => 3.77,
                'fats' => 0.6,
                'carbohydrates' => 20.04,
                'portion' => 300,
                'meal' => [
                    [
                        'name' => 'Обед',
                        'value' => 'dinner',
                    ],
                    [
                        'name' => 'Ужин',
                        'value' => 'supper',
                    ],
                    [
                        'name' => 'Завтрак',
                        'value' => 'breakfast',
                    ],
                ],
            ],
            [
                'name' => 'Жареная картошка',
                'calories' => 185,
                'squirrels' => 2.17,
                'fats' => 9.6,
                'carbohydrates' => 23.4,
                'portion' => 200,
                'meal' => [
                    [
                        'name' => 'Ужин',
                        'value' => 'supper',
                    ],
                    [
                        'name' => 'Завтрак',
                        'value' => 'breakfast',
                    ],
                ],
            ],
            [
                'name' => 'Картофельное пюре',
                'calories' => 100,
                'squirrels' => 1.8,
                'fats' => 3.54,
                'carbohydrates' => 15.72,
                'portion' => 100,
                'meal' => [
                    [
                        'name' => 'Обед',
                        'value' => 'dinner',
                    ],
                    [
                        'name' => 'Ужин',
                        'value' => 'supper',
                    ],
                ],
            ],
            [
                'name' => 'Пельмени',
                'calories' => 124,
                'squirrels' => 3.3,
                'fats' => 3.21,
                'carbohydrates' => 20.22,
                'portion' => 200,
                'meal' => [
                    [
                        'name' => 'Обед',
                        'value' => 'dinner',
                    ],
                ],
            ],
            [
                'name' => 'Вареники с вишней',
                'calories' => 214,
                'squirrels' => 6.93,
                'fats' => 3.4,
                'carbohydrates' => 38.3,
                'portion' => 200,
                'meal' => [
                    [
                        'name' => 'Обед',
                        'value' => 'dinner',
                    ],
                ],
            ],
            [
                'name' => 'Вареники с картошкой',
                'calories' => 185,
                'squirrels' => 4,
                'fats' => 5.1,
                'carbohydrates' => 30.3,
                'portion' => 200,
                'meal' => [
                    [
                        'name' => 'Обед',
                        'value' => 'dinner',
                    ],
                ],
            ],
            [
                'name' => 'Салат Селедка под шубой',
                'calories' => 195,
                'squirrels' => 5.18,
                'fats' => 16.2,
                'carbohydrates' => 7.43,
                'portion' => 100,
                'meal' => [
                    [
                        'name' => 'Ужин',
                        'value' => 'supper',
                    ],
                ],
            ],
            [
                'name' => 'Салат Крабовый',
                'calories' => 146,
                'squirrels' => 9.68,
                'fats' => 7.89,
                'carbohydrates' => 9.7,
                'portion' => 100,
                'meal' => [
                    [
                        'name' => 'Ужин',
                        'value' => 'supper',
                    ],
                ],
            ],
            [
                'name' => 'Салат из помидоров и огурцов',
                'calories' => 84,
                'squirrels' => 0.53,
                'fats' => 7.3,
                'carbohydrates' => 4.1,
                'portion' => 100,
                'meal' => [
                    [
                        'name' => 'Обед',
                        'value' => 'dinner',
                    ],
                    [
                        'name' => 'Ужин',
                        'value' => 'supper',
                    ],
                    [
                        'name' => 'Завтрак',
                        'value' => 'breakfast',
                    ],
                    [
                        'name' => 'Перекус',
                        'value' => 'snack',
                    ],
                ],
            ],
            [
                'name' => 'Печенье',
                'calories' => 502,
                'squirrels' => 6.1,
                'fats' => 24.1,
                'carbohydrates' => 64.5,
                'portion' => 40,
                'meal' => [
                    [
                        'name' => 'Завтрак',
                        'value' => 'breakfast',
                    ],
                    [
                        'name' => 'Перекус',
                        'value' => 'snack',
                    ],
                ],
            ],
            [
                'name' => 'Молочный шоколад',
                'calories' => 535,
                'squirrels' => 7.65,
                'fats' => 30,
                'carbohydrates' => 59.4,
                'portion' => 100,
                'meal' => [
                    [
                        'name' => 'Завтрак',
                        'value' => 'breakfast',
                    ],
                    [
                        'name' => 'Перекус',
                        'value' => 'snack',
                    ],
                ],
                [
                    'name' => 'Яблоко',
                    'calories' => 52,
                    'squirrels' => 0.26,
                    'fats' => 0.17,
                    'carbohydrates' => 13.81,
                    'portion' => 170,
                    'meal' => [
                        [
                            'name' => 'Перекус',
                            'value' => 'snack',
                        ],
                    ],
                ],
                [
                    'name' => 'Банан',
                    'calories' => 89,
                    'squirrels' => 1.09,
                    'fats' => 0.33,
                    'carbohydrates' => 22,
                    'portion' => 140,
                    'meal' => [
                        [
                            'name' => 'Перекус',
                            'value' => 'snack',
                        ],
                    ],
                ],
                [
                    'name' => 'Компот',
                    'calories' => 56,
                    'squirrels' => 0.56,
                    'fats' => 0.17,
                    'carbohydrates' => 14.17,
                    'portion' => 200,
                    'meal' => [
                        [
                            'name' => 'Обед',
                            'value' => 'dinner',
                        ],
                        [
                            'name' => 'Перекус',
                            'value' => 'snack',
                        ],
                    ],
                ],
            ],
            [
                'name' => 'Чай',
                'calories' => 1,
                'squirrels' => 0,
                'fats' => 0,
                'carbohydrates' => 0.3,
                'portion' => 250,
                'meal' => [
                    [
                        'name' => 'Обед',
                        'value' => 'dinner',
                    ],
                    [
                        'name' => 'Ужин',
                        'value' => 'supper',
                    ],
                    [
                        'name' => 'Завтрак',
                        'value' => 'breakfast',
                    ],
                    [
                        'name' => 'Перекус',
                        'value' => 'snack',
                    ],
                ],
            ],
            [
                'name' => 'Кофе',
                'calories' => 1,
                'squirrels' => 0.12,
                'fats' => 0.02,
                'carbohydrates' => 0.04,
                'portion' => 200,
                'meal' => [
                    [
                        'name' => 'Завтрак',
                        'value' => 'breakfast',
                    ],
                    [
                        'name' => 'Перекус',
                        'value' => 'snack',
                    ],
                ],
            ],
            [
                'name' => 'Борщ',
                'calories' => 32,
                'squirrels' => 1.37,
                'fats' => 1.64,
                'carbohydrates' => 3.37,
                'portion' => 250,
                'meal' => [
                    [
                        'name' => 'Обед',
                        'value' => 'dinner',
                    ],
                ],
            ],
            [
                'name' => 'Солянка',
                'calories' => 65,
                'squirrels' => 4.55,
                'fats' => 3.73,
                'carbohydrates' => 3.28,
                'portion' => 250,
                'meal' => [
                    [
                        'name' => 'Обед',
                        'value' => 'dinner',
                    ],
                ],
            ],
            [
                'name' => 'Котлета',
                'calories' => 245,
                'squirrels' => 15.28,
                'fats' => 14.05,
                'carbohydrates' => 13.35,
                'portion' => 100,
                'meal' => [
                    [
                        'name' => 'Обед',
                        'value' => 'dinner',
                    ],
                    [
                        'name' => 'Ужин',
                        'value' => 'supper',
                    ],
                ],
            ],
            [
                'name' => 'Жареная рыба',
                'calories' => 126,
                'squirrels' => 21.94,
                'fats' => 3.44,
                'carbohydrates' => 0.33,
                'portion' => 85,
                'meal' => [
                    [
                        'name' => 'Обед',
                        'value' => 'dinner',
                    ],
                    [
                        'name' => 'Ужин',
                        'value' => 'supper',
                    ],
                ],
            ],
        ];
        foreach ($products as $product) {
            Product::create([
                'name' => $product['name'],
                'calories' => $product['calories'],
                'squirrels' => $product['squirrels'],
                'fats' => $product['fats'],
                'carbohydrates' => $product['carbohydrates'],
                'portion' => $product['portion'],
                'meal' => json_encode($product['meal']),
            ]);
        }
    }
}
