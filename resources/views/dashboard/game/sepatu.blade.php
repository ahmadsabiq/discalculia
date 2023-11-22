<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unity WebGL Game</title>
</head>
<body>
    @extends('layouts.app')

    @section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Play Game</div>

                        <div class="card-body">
                            <!-- Embed Unity WebGL game here -->
                            <iframe src="{{ asset('games/your-unity-game/index.html') }}" width="100%" height="600px"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</body>
</html>
