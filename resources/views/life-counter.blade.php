    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Life Counter</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
@import url('https://fonts.googleapis.com/css2?family=Prompt:wght@300&family=Source+Sans+Pro:wght@200&display=swap');
</style>
</head>
       

    <body>
        <div class="header">
        <h1>Magic: The Gathering</h1>
        <h1>Life Counter</h1>
        </div>
        <form method="POST" action="/life-counter">
            @csrf
            <label for="player1_life">Player 1:</label>
            <input type="number" name="player1_life" value="{{ $player1_life ?? 20 }}">

            <label for="player2_life">Player 2:</label>
            <input type="number" name="player2_life" value="{{ $player2_life ?? 20 }}">

            <button type="submit">Update Life Totals</button>
        </form>

        <h2>Life Totals</h2>
        <p>Player 1: {{ $player1_life ?? 20 }}</p>
        <p>Player 2: {{ $player2_life ?? 20 }}</p>
    </body>
</html>
