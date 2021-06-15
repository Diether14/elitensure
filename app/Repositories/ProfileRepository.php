<?php 

namespace App\Repositories;

use App\Models\Profile;
use Fluent\Repository\Eloquent\BaseRepository;

class ProfileRepository extends BaseRepository
{


    public function entity()
    {
        return new Profile();
    }

    // public function getAll() {
    //     try {
    //         $profiles = $this->get();
    //         return $profiles;
            
    //     } catch (\Throwable $th) {
    //         throw new \Exception($th);
    //     }
    // }
}