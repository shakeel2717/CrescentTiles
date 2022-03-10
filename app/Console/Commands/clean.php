<?php

namespace App\Console\Commands;

use App\Models\Category;
use App\Models\Product;
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

        $product = new Product();
        $product->category_id = $category->id;
        $product->name = "The Standard Paving Stone";
        $product->picture = "1.jpg";
        $product->description = "The Uni Block® Interlocking Paver is a highly economical concrete paver with outstanding capability. Its denticulating form creates a force fitting connection between block to block. The result is an optimal distribution of traffic loads and an even relief of tension. This capacity of taking loads increases the durability of traffic surfaces laid with Uni Block® Interlocking Pavers. Standard Uni Block® Interlocking Pavers come with thickness of 6cm, 8cm and 10cm and with an edging design according to the new European norm for paving blocks. According to EN1338, pavers with a minimum chamfer of up to 2 mm are classified as edged. The possibility to lay the blocks by machine in a herringbone pattern additionally increases the load-bearing capacity of the surface (with an offset execution). In conjunction with the herringbone pattern is the block of choice for industrial surfaces which must bear high loads. Standard Uniblock pavings are manufactured in 6,8 and 10 cm thickness";
        $product->save();

        $product = new Product();
        $product->category_id = $category->id;
        $product->name = "The Heavy Duty Block For Machine Laying";
        $product->picture = "2.jpg";
        $product->description = "Haulage company yards, roads, car parks, but also factory buildings and warehouses: this is where Uni Coloc® Interlocking Pavers are employed. The Uni Coloc® Interlocking Paver makes it possible to lay an extremely solid anchor bond; moreover, since it can be laid by machine, it is highly economical. The Uni Coloc® Interlocking Paver is laid most economically using the Uni Hydraulic Clamp, which can be mounted to almost every construction machine, such as wheel loaders, small excavators, etc. The Uni Coloc® Interlocking Paver can also be economically laid using other standard paving machines. Surfaces with high traffic load-bearing capacity can be durably laid with the interlocking anchor bond paving system. Moreover, its mode of construction is extremely economical since the pavers can be laid quickly and safely by machine.";
        $product->save();

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
