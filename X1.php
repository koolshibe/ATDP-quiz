<?php

include_once 'header.html';

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
            <h6>What is your name?</h6>
            <input type="text" name="name" required/>        
            <h6>What is your age?</h6>
            <input type="number" name="age" required/>        
            <h6>What is your email?</h6>
            <input type="email" name="email" required/>        
            <h6>What is your social security number?</h6>
            <input type="text" name="ssn" required/>    
            <h6>What is your pet's name?</h6>
            <input type="text" name="pet" required/>     
            <h6>What is your favoirte number?</h6>
            <input type="number" name="favorite" required/>    
        </div>
        <div>
            <h6>Hwat color is a duck?</h6>
            <input type="color" name="duck_color"/>        
        </div>
        <div>
            <h6>Smash 1 duck?</h6>
            <input type="radio" name="smash_1" value="y" required/><label>Yes</label>
            <input type="radio" name="smash_1" value="n" required/><label>No</label>
            
        </div>
        <div>
            <h6>Smash 2 duck?</h6>
            <input type="radio" name="smash_2" value="y" required/><label>Yes</label>
            <input type="radio" name="smash_2" value="n" required/><label>No</label>
            
        </div>
        <div>
            <h6>Smash 3 duck?</h6>
            <input type="radio" name="smash_3" value="y" required/><label>Yes</label>
            <input type="radio" name="smash_3" value="n" required/><label>No</label>
            
        </div>
        <div>
            <h6>Which duck to smash?</h6>
            <select name="smash_age" required>
                <option value="youngest">young duck</option>
                <option value="middle">middle duck</option>
                <option value="oldest">older duck</option>
            </select>
            
        </div>
        <div>
            <h6>Which ducks do you smash?</h6>
            <input type="checkbox" name="smash_ducks[]" value="1" required/><label>DOTUS(Duck Of The United States)</label>
            <input type="checkbox" name="smash_ducks[]" value="2" required/><label>Le Duc(French)</label>
            <input type="checkbox" name="smash_ducks[]" value="3" required/><label>Dunck(Donkey or Duck?)</label>
            
        </div>
        <div>
            <h6>How many ducks do you smash?</h6>
            <input type="number" name="smash_number" required/>
            
        </div>
        <div>
            <h6>Should we add the duck to Smash(SSBU)</h6>
            <input type="radio" name="smash_game" value="y" required/><label>Yes</label>
            <input type="radio" name="smash_game" value="n" required/><label>No</label>
            
        </div>
        <div>
            <h6>How many smashers do you smash?</h6>
            <input type="range" name="smash_range" min="1" max="11" required />
            
        </div>
        <div>
            <h6>Destroy your ducks?</h6>
            <input type="submit" value="yes" />
        </div>
    </form>
    <div id="progress">
        <div id="back" class="button"><</div>
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
        <div id="next" class="button">></div>
    </div>
</body>