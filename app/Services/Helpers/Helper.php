<?php

if (!function_exists('user')) {
    function user() {
        $user = \Auth::user();
        if (!$user) {
            throw new \Exception('User not found.');
        }

        return $user;
    }
}