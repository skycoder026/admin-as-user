<?php

function temp_auth_user()
{
    return session()->get('temp_user') ?? null;
}


function auth_user()
{
    $temp_user = temp_auth_user();

    if(request()->segment(1) == 'temp-user' && $temp_user) {
        return $temp_user;
    }

    return auth()->user();
}


function user_route($name)
{
    return route('temp_user.' . $name);
}


function user_url($path)
{
    return url("temp-user/$path");
}


function is_temp_user()
{
    return request()->segment(1) == 'temp-user';
}
