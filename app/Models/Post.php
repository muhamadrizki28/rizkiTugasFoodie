<?php

    namespace App\Models;
    use Illuminate\Support\Facades\File;

    class Post{
        public static function find($detail){
            $filepath = resource_path("posts/{$detail}.blade.php");

            if(!file_exists($filepath)){
                return redirect('/');
                // dd($filepath);
            }

            // $contents = cache()->remember("post.$detail",now()->addHour(2),function() use($filepath){
            //     // dump($filepath);
            //     return file_get_contents($filepath);
            // }); 
            $contents = file_get_contents($filepath);


            return $contents;

        }
    }
?>