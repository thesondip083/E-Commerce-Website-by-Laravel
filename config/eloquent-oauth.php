<?php

use App\User;

return [
    'model' => User::class,
    'table' => 'oauth_identities',
    'providers' => [
        'facebook' => [
            'client_id' => '12345678',
            'client_secret' => 'y0ur53cr374ppk3y',
            'redirect_uri' => 'https://example.com/your/facebook/redirect',
            'scope' => [],
        ],
        'google' => [
            'client_id' => '422987265728-ijg32hkg94i1vgu800e7ml5n53qd7h6u.apps.googleusercontent.com',
            'client_secret' => 'JBgpu2XpnkfFU9XEbb7Rpz22',
            'redirect_uri' => 'http://localhost:8000/google/redirect',
            'scope' => [],
        ],
        'github' => [
            'client_id' => 'fe7af6919d19b3c0e602',
            'client_secret' => '3da3ea84fed4eb92c6d2bfeafdcc055500566915',
            'redirect_uri' => 'http://localhost:8000/github/redirect',
            'scope' => [],
        ],
        'linkedin' => [
            'client_id' => '81scntcvhrf1nj',
            'client_secret' => '9QBqhN6k1oV3Hxiw',
            'redirect_uri' => 'http://localhost:8000/linkedin/redirect',
            'scope' => [],
        ],
        'instagram' => [
            'client_id' => '12345678',
            'client_secret' => 'y0ur53cr374ppk3y',
            'redirect_uri' => 'https://example.com/your/instagram/redirect',
            'scope' => [],
        ],
        'soundcloud' => [
            'client_id' => '12345678',
            'client_secret' => 'y0ur53cr374ppk3y',
            'redirect_uri' => 'https://example.com/your/soundcloud/redirect',
            'scope' => [],
        ],
    ],
];
