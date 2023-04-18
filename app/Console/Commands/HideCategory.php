<?php

namespace App\Console\Commands;

use App\Models\Category;
use Illuminate\Console\Command;

class HideCategory extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:hide-category {id*}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Hide category(set active to false)';

    /**
     * Execute the console command.
     */
    public function handle(Category $category): void
    {
        $category->where('id',$this->argument('id'))->update(['active'=>false]);
        echo implode(',',$this->argument('id')).' were updated';
    }
}
