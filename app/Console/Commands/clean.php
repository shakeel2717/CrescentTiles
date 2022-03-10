<?php

namespace App\Console\Commands;

use App\Models\Category;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class clean extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:clean';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Artisan::call('migrate:fresh');
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('view:clear');
        Artisan::call('route:clear');

        // create categories
        $category = new Category();
        $category->name = 'Paving Stones';
        $category->picture = 'prod.jpg';
        $category->save();

        $category = new Category();
        $category->name = 'Surface Treatment';
        $category->picture = 'prod.jpg';
        $category->save();

        $category = new Category();
        $category->name = 'Paving Tiles';
        $category->picture = 'prod.jpg';
        $category->save();

        $category = new Category();
        $category->name = 'Planters';
        $category->picture = 'prod.jpg';
        $category->save();

        $category = new Category();
        $category->name = 'Building Blocks';
        $category->picture = 'prod.jpg';
        $category->save();

        $category = new Category();
        $category->name = "Wall Blocks";
        $category->picture = 'prod.jpg';
        $category->save();

        $category = new Category();
        $category->name = "Retaining Wall System";
        $category->picture = 'prod.jpg';
        $category->save();

        $category = new Category();
        $category->name = "Kerbstones";
        $category->picture = 'prod.jpg';
        $category->save();






        return 0;
    }
}
