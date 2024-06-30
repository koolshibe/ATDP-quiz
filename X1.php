<?php



?>
<!DOCTYPE HTML>
<head>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script type="module" src="script.js" defer></script>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <form action="quizhandler.php" method="post">
        <div>
            <h6>Hwat color is a duck?</h6>
            <input type="color" name="duck_color"/>
            <div>Next</div>
        </div>
        <div>
            <h6>Smash 1 duck?</h6>
            <input type="radio" name="smash_1" value="y"/><label>Yes</label>
            <input type="radio" name="smash_1" value="n"/><label>No</label>
            <div>Next</div>
        </div>
        <div>
            <h6>Smash 2 duck?</h6>
            <input type="radio" name="smash_2" value="y"/><label>Yes</label>
            <input type="radio" name="smash_2" value="n"/><label>No</label>
            <div>Next</div>
        </div>
        <div>
            <h6>Smash 3 duck?</h6>
            <input type="radio" name="smash_3" value="y"/><label>Yes</label>
            <input type="radio" name="smash_3" value="n"/><label>No</label>
            <div>Next</div>
        </div>
        <div>
            <h6>Which duck to smash?</h6>
            <select name="smash_age">
                <option value="youngest">young duck</option>
                <option value="middle">middle duck</option>
                <option value="oldest">older duck</option>
            </select>
            <div>Next</div>
        </div>
        <div>
            <h6>Which ducks do you smash?</h6>
            <input type="checkbox" name="smash_ducks[]" value="1"/><label>DOTUS(Duck Of The United States)</label>
            <input type="checkbox" name="smash_ducks[]" value="2"/><label>Le Duc(French)</label>
            <input type="checkbox" name="smash_ducks[]" value="3"/><label>Dunck(Donkey or Duck?)</label>
            <div>Next</div>
        </div>
        <div>
            <h6>How many ducks do you smash?</h6>
            <input type="number" name="smash_number"/>
            <div>Next</div>
        </div>
        <div>
            <h6>Should we add the duck to Smash(SSBU)</h6>
            <input type="radio" name="smash_game" value="y"/><label>Yes</label>
            <input type="radio" name="smash_game" value="n"/><label>No</label>
            <div>Next</div>
        </div>
        <div>
            <h6>How many smashers do you smash?</h6>
            <input type="range" name="smash_range" min="1" max="11" />
            <div>Next</div>
        </div>
        <div>
            <h6>Destroy your ducks?</h6>
            <input type="submit" value="yes" />
        </div>
    </form>
    <div id="progress">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
    </div>
</body>