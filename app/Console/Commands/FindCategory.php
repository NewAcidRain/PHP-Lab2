<?php

namespace App\Console\Commands;

use App\Models\Product;
use Illuminate\Console\Command;

class FindCategory extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:find-category {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Find category by product id';

    /**
     * Execute the console command.
     */
    public function handle(Product $product):void
    {
        echo $product->find($this->argument('id'))->category->symbolic_code;
    }
}
