<?php

namespace App\Controllers;

use App\Models\User;

class PostController
{
    public function single()
    {
        global $request;
        $user = new User(2);
////       $result = $user->remove();
        $user->name = 'Zahra';
        $user->email = 'Zahra@7learn.com';
        $user->password = 'ZahraPasss';
        var_dump($user->save()->name);
        $slug = $request->get_route_param('slug');
        echo "slug: $slug";
    }
    public function comment()
    {
        global $request;

        $slug = $request->get_route_param('slug');
        $cid = $request->get_route_param('cid');
        echo "slug: $slug<br> comment_id: $cid";
    }
}
