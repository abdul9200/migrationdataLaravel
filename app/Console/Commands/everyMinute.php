<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Category;
use App\Models\Book;
use App\Models\User;
use App\Models\Copie;
use App\Models\Suggestion;
use App\Models\Etudiant;
use App\Models\Reservation;
use Carbon\Carbon;

use Illuminate\Http\Request;

class everyMinute extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reservation:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'update lost copies ';

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
        echo "in func";
        $stale_posts = Reservation::all();

        foreach ($stale_posts as $post) {
            echo "in resa";

        if($post['updated_at']<Carbon::now()->subMinutes(20)->addHours(1) and $post["state"]=="validee"){
            $post->update(['state'=>'retenue']);
            $copie=Copie::find($post['copy_id']);
            $copie->update(['state'=>'perdu']);
            echo 'in test';


        }
        if($post['updated_at']<Carbon::now()->subMinutes(20)->addHours(1) and $post["state"]=="creee"){
            $post->update(['state'=>'retenue']);
            $copie=Copie::find($post['copy_id']);
            $copie->update(['state'=>'disponible']);
            echo 'in test';


        }


        }
    }
}
