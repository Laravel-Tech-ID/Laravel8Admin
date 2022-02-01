<?php

namespace App\Transformers;

use Modules\Access\Entities\V1\User;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract
{
    public function transform(User $user){
        return [
            'name' => $user->name,
            'email' => $user->email,
            // 'registered' => $user->created_at->diffForHumans()
        ];
    }
}