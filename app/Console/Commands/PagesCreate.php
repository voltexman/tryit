<?php

namespace App\Console\Commands;

use App\Models\Page;
use Illuminate\Console\Command;

class PagesCreate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pages:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Додавання необхідних сторінок';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Page::insert([
            ['name' => 'main', 'title' => '', 'label' => 'Головна', 'description' => '', 'robots' => '', 'content' => ''],
            ['name' => 'services', 'title' => '', 'label' => 'Послуги', 'description' => '', 'robots' => '', 'content' => ''],
            ['name' => 'products', 'title' => '', 'label' => 'Товари', 'description' => '', 'robots' => '', 'content' => ''],
            ['name' => 'gallery', 'title' => '', 'label' => 'Галерея', 'description' => '', 'robots' => '', 'content' => ''],
            ['name' => 'feedbacks', 'title' => '', 'label' => 'Зворотній зв`язок', 'description' => '', 'robots' => '', 'content' => ''],
            ['name' => 'privacy-policy', 'title' => '', 'label' => 'Політика конфіденційності', 'description' => '', 'robots' => '', 'content' => ''],
        ]);

        $this->info('Сторінки успішно створені');
    }
}
