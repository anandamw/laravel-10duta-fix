<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vote</title>
    <link rel="stylesheet" href="{{ asset('') }}assets_user/css/style.vote.css">
</head>

<body>


    <div class="container">
        <div class="card">
            <ul>
                @foreach ($data as $item)
                    <form action="/vote/create" method="POST">
                        @csrf
                        <li>
                            <img src="{{ asset('foto_kandidats/' . $item->gambar) }}" class="card-image" alt="">
                            <h1>{{ $item->nama }}</h1>

                            <input type="hidden" name="name" value="{{ Auth::user()->name }}">
                            <input type="hidden" name="kandidats_id" value="{{ $item->id }}">
                            {{-- <input type="text" name="tanggal" value="{{ now() }}"> --}}

                            <div class="list">
                                <div class="btn close">Close</div>
                                <button type="submit" class="btn vote">Vote</button>
                            </div>
                        </li>
                    </form>
                @endforeach

            </ul>
        </div>
    </div>



</body>

</html>
