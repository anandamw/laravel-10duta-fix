<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- <link rel="stylesheet" href="{{ asset('') }}assets_user/css/style.vote.css"> --}}
    <link rel="stylesheet" href="{{ asset('') }}assets_user/css/style.guest.css">
</head>

<body>

    <header>
        <h1>E-Voting</h1>


        <ul>
            <li><a href="/kandidat/daftar">Daftar Sebagai Duta</a></li>
            <li><a href="/register">Vote Kandidat</a></li>
            <li><a href="/#">Persyaratan Daftar Kandidat Duta Kampus</a></li>
        </ul>
    </header>

    <header class="container">

        <div class="card">
            <ul>
                @foreach ($data as $item)
                    {{-- <form action="/vote/create" method="POST">
                            @csrf --}}
                    <li>
                        <img src="{{ asset('foto_kandidats/' . $item->gambar) }}" width="200" class="card-image"
                            alt="">
                        <h1>{{ $item->nama }}</h1>
                        {{-- <h1>{{ $item->nama }}</h1> --}}

                        {{-- <input type="text" name="name" value="{{ Auth::user()->name }}"> --}}
                        {{-- <input type="text" name="kandidats_id" value="{{ $item->id }}"> --}}
                        {{-- <input type="text" name="tanggal" value="{{ now() }}"> --}}

                        {{-- <div class="list">
                                    <div class="btn close">Close</div>
                                    <button type="submit" class="btn vote">Vote</button>
                                </div> --}}
                    </li>
                    {{-- </form> --}}
                @endforeach

            </ul>
        </div>

    </header>



</body>

</html>
