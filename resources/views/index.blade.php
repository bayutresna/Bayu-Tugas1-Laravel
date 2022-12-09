    @extends('parent')
    @section('title', 'Biodata User')
    @section('parent_content')
    @php
    $users = [
        [
            "nama" => "skadi",
            "foto" => "images/foto1.jpg",
            "bio" => "aku skadi",
            "active" => "true",
            "alamat" => "di bandung",
            "role" => "admin"
        ],
        [
            "nama" => "solo",
            "foto" => "images/foto2.jpg",
            "bio" => "aku solo",
            "active" => "false",
            "alamat" => "di subang",
            "role" => "user"
        ],
        [
            "nama" => "lala",
            "foto" => "images/foto3.jpg",
            "bio" => "aku lala",
            "active" => "true",
            "alamat" => "di sana",
            "role" => "admin"
        ],
        [
            "nama" => "lili",
            "foto" => "images/foto4.jpg",
            "bio" => "aku lili",
            "active" => "false",
            "alamat" => "di jakarta",
            "role" => "admin"
        ],
        [
            "nama" => "lulu",
            "foto" => "images/foto5.jpg",
            "bio" => "aku lulu",
            "active" => "false",
            "alamat" => "di lembang",
            "role" => "user"
        ],
        [
            "nama" => "kaka",
            "foto" => "images/foto6.jpg",
            "bio" => "aku kaka",
            "active" => "true",
            "alamat" => "di yogya",
            "role" => "user"
        ],
        [
            "nama" => "fulan",
            "foto" => "images/foto7.jpg",
            "bio" => "aku fulan",
            "active" => "true",
            "alamat" => "di maluku",
            "role" => "admin"
        ],
        [
            "nama" => "fulanah",
            "foto" => "images/foto8.jpg",
            "bio" => "aku fulanah",
            "active" => "true",
            "alamat" => "di makassar",
            "role" => "user"
        ],
        [
            "nama" => "asep",
            "foto" => "images/foto9.jpg",
            "bio" => "aku asep",
            "active" => "true",
            "alamat" => "di majalaya",
            "role" => "admin"
        ],
        [
            "nama" => "kuro",
            "foto" => "images/foto10.jpg",
            "bio" => "aku kuro",
            "active" => "true",
            "alamat" => "di surabaya",
            "role" => "user"
        ],
    ];

    $filter = [
        "active"=> "true",
        "role" => "admin"
    ]
    @endphp

    @parent

    @foreach($users as $u =>$user)
        @includeWhen($user['active'] === $filter['active'], 'components.cards',
        [
            'user' => $user,
            'icon'=> $user['role'] == 'user' ? '<ion-icon name="heart"></ion-icon>'
            : '<ion-icon name="paw-outline"></ion-icon>'
        ])

    @endforeach
    @endsection

