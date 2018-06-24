<?php
    session_start();

        if(isset($_POST['submit_pass']) && $_POST['pass'])
            {
                $pass=$_POST['pass'];
                    if($pass=="ccdev")
                        {
                            $_SESSION['password']=$pass;
                         }
                    else
                        {
                            $error="Incorrect Password";
                    }
                }

        if(isset($_POST['page_logout']))
            
            {
                unset($_SESSION['password']);
        }
?>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/krstivoja/Projects-folders-listing/a231b9d4/Assets/style.css">
</head>

<body>
<?php   
    if($_SESSION['password']=="dev") {   
 
        if ($handle = opendir('.')) {
            while (false !== ($file = readdir($handle))) {
                if (is_dir($file)) {
                    if ($file=='.'||$file=='..') continue;

                        $thelist .= '<li>
                                        <span>
                                            <span class="icon folder">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M464 128H272l-64-64H48C21.49 64 0 85.49 0 112v288c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V176c0-26.51-21.49-48-48-48z"/></svg>
                                                </span>
                                                <span class="icon folder-open">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M572.694 292.093L500.27 416.248A63.997 63.997 0 0 1 444.989 448H45.025c-18.523 0-30.064-20.093-20.731-36.093l72.424-124.155A64 64 0 0 1 152 256h399.964c18.523 0 30.064 20.093 20.73 36.093zM152 224h328v-48c0-26.51-21.49-48-48-48H272l-64-64H48C21.49 64 0 85.49 0 112v278.046l69.077-118.418C86.214 242.25 117.989 224 152 224z"/></svg>
                                            </span>
                                            
                    				    <a target="_blank" class="dir" href="'.$file.'">'.$file.'</a>
                                        </span>

                    				    <a target="_blank" class="admin" href="'.$file.'/wp-admin/">Login</a>
                    			     </li>';
                }
        }
        
        closedir($handle);
    }
?>

<div class="list-wrap">
    <div class="list-title">
        <h2>Projects list</h2>
    </div>

    <ul class="list-dir">
        <?php echo $thelist; ?>
    </ul>

    <form method="post" action="" id="logout_form">
        <input class="button" type="submit" name="page_logout" value="Logout">
    </form>
</div>

<?php   }   
    else    {   ?>


 <div class="form-wrap">
 	<form method="post" action="" id="login_form">
		<h1>LOGIN</h1>
		<div class="input-wrap">
			<input class="field" type="user" name="pass" placeholder="Enter password">
			<input class="button" type="submit" name="submit_pass" value="Login">
		</div>
		<p><font style="color:red;"><?php echo $error;?></font></p>
        <p> This is optional information text. If you need more information about project owner folow <a style="word-break: " href="https://github.com/krstivoja/Projects-folders-listing">this link.</a></p>
 	</form>
</div> 

<?php   }   ?>


</body>
</html>