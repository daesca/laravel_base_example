<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Repository\UserRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class GetAllController extends Controller
{

    private UserRepository $userRepository;

    public function __construct(UserRepository $repository)
    {
        $this->userRepository = $repository;
    }

    public function __invoke(Request $request)
    {
     return response()->json(
            $this->userRepository->allUserShow(), 
        200, 
        );
    }
}
