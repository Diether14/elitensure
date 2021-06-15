<?php
namespace App\Controllers;

use App\Repositories\ProfileRepository;
use CodeIgniter\API\ResponseTrait;

class ProfilesController extends BaseController
{
    use ResponseTrait;
    protected $profiles;

    public function __construct()
    {
        $this->profiles = new ProfileRepository();
    }

    public function getAll() {
        try {
            $response = $this->profiles->get();
            return $this->respond($response, 200);
        } catch (\Exception $e) {
            echo $e->getMessage(); die();
            return $this->fail('Something went wrong. Please try again later', 500);
        }
    }
}