<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class GallerySeeder extends Seeder
{
    public function run(): void
    {
        $demoImages = [
            'gallery-section.jpg',
            'h2-background04.jpg',
            'h3-cleaning-01.jpg',
            'cleaning.png',
            'decore.png',
            'banner-1.jpg',
            'service-1.jpg',
            'service-2.jpg',
            'service-3.jpg',
            'service-4.jpeg',
            'service-5.jpg',
            'service-6.jpg',
            'service-7.jpg',
        ];

        foreach ($demoImages as $index => $image) {
            $gallery = Gallery::create([
                'title' => 'Демо зображення '.($index + 1),
                'description' => 'Опис для демо зображення '.($index + 1),
                'alt' => 'Демо зображення '.($index + 1),
                'meta_title' => 'Демо зображення '.($index + 1),
                'sort_order' => $index,
                'is_visible_on_slideshow' => true,
            ]);

            $path = resource_path('images/'.$image);
            if (File::exists($path)) {
                $gallery->addMedia($path)
                    ->preservingOriginal()
                    ->toMediaCollection('gallery');
            }
        }
    }
}
