<?php



?>
<!DOCTYPE HTML>
<head>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <script type="module" src="/main.js"></script>
    <form action="quizhandler.php" method="post">
        <h6>Hwat color is a duck?</h6>
        <input type="color" name="duck_color"/>
        <h6>Smash 1 duck?</h6>
        <input type="radio" name="smash_1" value="y"/><label>Yes</label>
        <input type="radio" name="smash_1" value="n"/><label>No</label>
        <h6>Smash 2 duck?</h6>
        <input type="radio" name="smash_2" value="y"/><label>Yes</label>
        <input type="radio" name="smash_2" value="n"/><label>No</label>
        <h6>Smash 3 duck?</h6>
        <input type="radio" name="smash_3" value="y"/><label>Yes</label>
        <input type="radio" name="smash_3" value="n"/><label>No</label>
        <h6>Which duck to smash?</h6>
        <select name="smash_age">
            <option value="youngest">young duck</option>
            <option value="middle">middle duck</option>
            <option value="oldest">older duck</option>
        </select>
        <h6>Which ducks do you smash?</h6>
        <input type="checkbox" name="smash_ducks[]" value="1"/><label>DOTUS(Duck Of The United States)</label>
        <input type="checkbox" name="smash_ducks[]" value="2"/><label>Le Duc(French)</label>
        <input type="checkbox" name="smash_ducks[]" value="3"/><label>Dunck(Donkey or Duck?)</label>
        <h6>How many ducks do you smash?</h6>
        <input type="number" name="smash_number"/>
        <h6>Should we add the duck to Smash(SSBU)</h6>
        <input type="radio" name="smash_game" value="y"/><label>Yes</label>
        <input type="radio" name="smash_game" value="n"/><label>No</label>
        <h6>How many smashers do you smash?</h6>
        <input type="range" name="smash_range" min="1" max="11" />
        <h6>Destroy your ducks?</h6>
        <input type="submit" value="yes" />
    </form>
</body>