<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Language extends Model
{
    public static function getAllLanguage(): array
    {
        return [
            ['id' => '1', 'title' => 'Japan', 'description' => 'Japan is an island country in East Asia, located in the Pacific Ocean off the northeast coast of the Asian mainland, comprising four main islands—Hokkaido, Honshu, Shikoku, and Kyushu—and thousands of smaller islands. '],
            ['id' => '2', 'title' => 'Filipino', 'description' => 'The Philippines, officially the Republic of the Philippines, is an archipelagic country in Southeast Asia, consisting of over 7,600 islands in the western Pacific Ocean and divided into three main geographical regions: Luzon, Visayas, and Mindanao.'],
            ['id' => '3', 'title' => 'Korea', 'description' => ' South Korea, officially the Republic of Korea, is a country in East Asia occupying the southern half of the Korean Peninsula, bordered by North Korea to the north, the Yellow Sea to the west, and the Sea of Japan to the east. '],
            ['id' => '4', 'title' => 'China', 'description' => ' China, officially the People’s Republic of China, is a country in East Asia with over 1.4 billion people—making it the world’s most populous nation—spanning nearly 9.6 million km² across diverse landscapes from mountains to plains.'],
            ['id' => '5', 'title' => 'Vietnam', 'description' => 'Vietnam, officially the Socialist Republic of Vietnam, is a country at the eastern edge of mainland Southeast Asia, stretching along an S-shaped coastline of about 1,650 km and home to over 100 million people.']

        ];
    }

    public static function findLanguage(int $id): array
    {
        $language =  Arr::first(static::getAllLanguage(), fn($language) => (int)$language['id'] === $id);

        if (!$language) {
            abort(404);
        }
        return $language;
    }
}
