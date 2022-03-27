<?php

namespace App\Console\Commands;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
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
        $category->name = 'My Products';
        $category->picture = '1.jpg';
        $category->save();

        $product = new Product();
        $product->category_id = $category->id;
        $product->name = "PRECAST CONCRETE PAVING & ROOFING TILES";
        $product->picture = "1.jpg";
        $product->description = "High quality paving tiles in a variety of colours, sizes, shapes and textures for a wide range of applications in urban as well as rural areas. The pavers can be supplied in fair or shot blast finish. Hydraulically pressed precast concrete Paving and roofing tiles manufactured and tested to BS 7263 specifications.";
        $product->save();

        // insrting sub images in database
        $subPhoto = new ProductImage();
        $subPhoto->product_id = $product->id;
        $subPhoto->image = "1_1.png";
        $subPhoto->save();

        $subPhoto = new ProductImage();
        $subPhoto->product_id = $product->id;
        $subPhoto->image = "1_2.png";
        $subPhoto->save();

        $subPhoto = new ProductImage();
        $subPhoto->product_id = $product->id;
        $subPhoto->image = "1_3.png";
        $subPhoto->save();


        $subPhoto = new ProductImage();
        $subPhoto->product_id = $product->id;
        $subPhoto->image = "1_4.png";
        $subPhoto->save();

        $subPhoto = new ProductImage();
        $subPhoto->product_id = $product->id;
        $subPhoto->image = "1_5.png";
        $subPhoto->save();

        $subPhoto = new ProductImage();
        $subPhoto->product_id = $product->id;
        $subPhoto->image = "1_6.png";
        $subPhoto->save();

        $subPhoto = new ProductImage();
        $subPhoto->product_id = $product->id;
        $subPhoto->image = "1_7.png";
        $subPhoto->save();

        $product = new Product();
        $product->category_id = $category->id;
        $product->name = "PRECAST CONCRETE CABLE COVER TILES";
        $product->picture = "2.jpg";
        $product->description = "Hydraulically pressed precast concrete cable tiles manufactured and tested to BS 2484 specifications.
        Inscription will be engraved on tiles according to the client requirements and standards.";
        $product->save();

        $subPhoto = new ProductImage();
        $subPhoto->product_id = $product->id;
        $subPhoto->image = "2_1.png";
        $subPhoto->save();

        $subPhoto = new ProductImage();
        $subPhoto->product_id = $product->id;
        $subPhoto->image = "2_2.png";
        $subPhoto->save();

        $product = new Product();
        $product->category_id = $category->id;
        $product->name = "PRECAST CONCRETE CABLE ROUTE & JOINT MARKERS";
        $product->picture = "3.jpg";
        $product->description = "Made from reinforced concrete.
        Road marking grade paints and coal tar epoxy will be applied on cable route and joint marker as per specifications and standards.";
        $product->save();


        $subPhoto = new ProductImage();
        $subPhoto->product_id = $product->id;
        $subPhoto->image = "3_1.png";
        $subPhoto->save();

        $subPhoto = new ProductImage();
        $subPhoto->product_id = $product->id;
        $subPhoto->image = "3_2.png";
        $subPhoto->save();

        $subPhoto = new ProductImage();
        $subPhoto->product_id = $product->id;
        $subPhoto->image = "3_3.png";
        $subPhoto->save();

        $subPhoto = new ProductImage();
        $subPhoto->product_id = $product->id;
        $subPhoto->image = "3_4.png";
        $subPhoto->save();

        $subPhoto = new ProductImage();
        $subPhoto->product_id = $product->id;
        $subPhoto->image = "3_5.png";
        $subPhoto->save();

        $product = new Product();
        $product->category_id = $category->id;
        $product->name = "PRECAST CONCRETE DUCT MARKERS";
        $product->picture = "4.jpg";
        $product->description = "Duct marker tiles are manufactured from concrete to provide identification of underground cable ducting systems.
        Made from concrete and reinforced with steel rods to minimize the risk of damage";
        $product->save();


        $subPhoto = new ProductImage();
        $subPhoto->product_id = $product->id;
        $subPhoto->image = "4_1.png";
        $subPhoto->save();

        $product = new Product();
        $product->category_id = $category->id;
        $product->name = "PRECAST CONCRETE WHEEL STOPPERS";
        $product->picture = "5.jpg";
        $product->description = "Wheel stops assist in creating an organized parking area while helping reduce the risk of damage to vehicles, landscaping and structures.";
        $product->save();

        $subPhoto = new ProductImage();
        $subPhoto->product_id = $product->id;
        $subPhoto->image = "5_1.png";
        $subPhoto->save();

        $product = new Product();
        $product->category_id = $category->id;
        $product->name = "PRECAST CONCRETE CLAUSTRA BLOCKS";
        $product->picture = "6.jpg";
        $product->description = "Blocks can be used for facing floors and walls, for decoration, for claustra work, for interlocking building systems, etc.";
        $product->save();

        $subPhoto = new ProductImage();
        $subPhoto->product_id = $product->id;
        $subPhoto->image = "6_1.png";
        $subPhoto->save();

        $product = new Product();
        $product->category_id = $category->id;
        $product->name = "PRECAST CONCRETE EARTH PIT";
        $product->picture = "7.jpg";
        $product->description = "Suitable for most types of earthing and lightening protection installations.
        The inspection pit protects the earth rod connection and makes it accessible for inspection.";
        $product->save();

        $subPhoto = new ProductImage();
        $subPhoto->product_id = $product->id;
        $subPhoto->image = "7_1.png";
        $subPhoto->save();

        return 0;
    }
}
