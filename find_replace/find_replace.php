<link href="css/styles.css" rel="stylesheet">

<?php
    ini_set('error_reporting','E_ALL');
    echo "<header>Find and Replace</header>";
    if(isset($_POST['user_input']) && !empty($_POST['user_input'])){
        $user_input = $_POST['user_input'];
        $search = $_POST['searchfor'];
        $replace = $_POST['replacewith'];
        $new_userinput = strtolower($user_input);
        if(!empty($user_input) && !empty($search) && !empty($replace)){
            $new_str = str_ireplace($search,$replace,$new_userinput);
        }
        else{
            $flag = 'Please fill in all fields.';
        }
    }
?>

<!doctype html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>find and replace</title>
    </head>
    <body>
        <br>
        <div class="form_cls">
            <form action="find_replace.php" method="POST">
                <div class="first_division">
                    <textarea class="center" name="user_input" rows="2" cols="70"></textarea><br><br>
                </div>
                <div class="second_division">    
                    <div class="second_division1">
                        Search for: <input type="text" name="searchfor">
                    </div>
                    <div class="second_division2">
                        Replace with: <input type="text" name="replacewith">
                    </div>
                    <div class="second_division3">
                    <button class="button" style="vertical-align:middle" ><span>submit </span></button>
                        
                    </div>
                </div>
                <div class="third_division">
                    <p style="text-align:center;font-family:Roboto;color:#FFFFFF;">
                        output
                    </p>
                    <br><p><?php echo $flag ?></p>
                    <p>
                        <br><br><?php echo $new_str; ?>
                    </p>
                </div>
            </form>
        <div>
        <footer>
            <p>made with <span style = "color: red;">❤️</span> by <strong><a style="text-decoration:none;" class="link" href="https://virus-attack.github.io/my-website/">SURYA TEJA ACHANTA</a><strong> 2018. All Rights Reserved</p>
        </footer>
    </body>
</html>
