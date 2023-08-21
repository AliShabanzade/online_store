<?php

namespace App\Console\Commands;

use Artisan;

use Illuminate\Console\Command;
use Illuminate\Support\Facades;
use Illuminate\Support\Facades\File;

class Bot extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:bot {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->argument('name');
       Artisan::call("make:provider RepositoryProvider");
       Artisan::call("make:model $name -m");
       Artisan::call("make:request ".$name."Request");
       Artisan::call("make:resource ".$name."Resource");
       Artisan::call("make:controller App/Controllers/Api/V1/".$name."Controller --api --model=".$name);
       Artisan::call("make:seeder ".$name."Seeder");
       Artisan::call("make:factory ".$name."Factory");
       Artisan::call("make:policy ".$name."Policy");
       //service
       //repository
        $content_repository = file_get_contents(__DIR__ . '/stub/repository.php.stub');
        $content_repository = str_replace('{{model}}', $name, $content_repository);
        $content_repository_interface = file_get_contents(__DIR__ . '/stub/repositoryInterface.php.stub');
        $content_repository_interface = str_replace( '{{model}}', $name, $content_repository_interface);
        $path = base_path('app/Repositories/' . $name);
        if(!is_dir($path)){
            //0775 is read and write permission code
            mkdir($path , 0775);
        }

        if(!file_exists($path . '/' . $name . 'Repository.php')){
            File::put($path . '/' . $name . 'Repository.php', $content_repository);
        }

        if(!file_exists($path . '/' . $name . 'RepositoryInterface.php')){
            File::put($path . '/' . $name . 'RepositoryInterface.php', $content_repository_interface);
        }

    }

}
