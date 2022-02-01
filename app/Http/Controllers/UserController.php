<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transformers\UserTransformer;
use Modules\Access\Entities\V1\User;

class UserController extends Controller
{
    public function user()
    {
        $users = User::paginate();
        $data = fractal()
        ->collection($users)
        ->transformWith(new UserTransformer())
        ->includeCharacters()
        ->toArray();
        return response()->json($data, 200);
    }
}
