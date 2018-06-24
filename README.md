# Projects folders listing
Nicely styled projects folders list with icon and option to open admin link if you are using CMS. 

I created this project as I could not find simple, modern and responsive project lister for localhost and server. That's why I created my own. What I also found is that I'm typing "/wp-admin/" a lot. That is covered with included "Login" link for each project in the projects list.

**Project include 2 folders:**
* One with login (for server) and one without login screen (for localhost)
* SCSS File with mobile and desktop brakepoint
* Generated CSS file
* CSS in index.php is pointed to github cdn.

## Project Screenshoots
![alt text](https://github.com/krstivoja/Projects-folders-listing/blob/master/Assets/Login.png "Login page")
![alt text](https://github.com/krstivoja/Projects-folders-listing/blob/master/Assets/Project.png "Projects page")
![alt text](https://github.com/krstivoja/Projects-folders-listing/blob/master/Assets/Project-hover.png "Projects page hover")


## Project password is "dev"
You can change it in index.php file on lines 7 and 32.

## How to use it?
Just paste index.php info localhost or server root

## How to change colors?
In style.scss I created 2 variables that you should change. 

$pri: #0070e0;
$base: #1b4269;

style.scss file you may find under assets folder. Entire theme is done with 2 colors and opacities. If you want to achive dark theme apply dark color to the body.
