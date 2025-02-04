<?php

  setcookie("fruits","apple",time() + (86400));
  setcookie("color","red", time() + (86400));

  echo "<br>";
  
  if(isset($_COOKIE['fruits']))
  {
    echo "current cookie is =" .$_COOKIE['fruits'];
  }
  else
  {
    echo "Cookie is not exist";
  }

  echo "<br>";

  if(isset($_COOKIE['color']))
  {
    echo "current fruit color is =" .$_COOKIE['color'];
  }
  else
  {
    echo "color is not exist";
  }

  echo "<br>";

  print_r($_COOKIE);
?>



<!-- 👉When a user visits a website, information about that user
  is stored in the browser, which is called a cookie. User 
  information such as when the user logged in or logged out of 
  the website, where the user logged in to the website, all this
   information is stored in the browser with the help of cookies
    and is not stored on the server.
    
👉 syntax and parameters :-
cookie(name, value ,expire , path , domain, secure , httponly)

here name is mandotory and cookie and othe key is optional

👉name :- store the user name i cookie
👉expire :- The data contained in the cookie is not permanent, 
            it expires after a certain period of time, such as 1 week
             or 1 month. If the user does not visit the website after
            this period, then that data will disappear from the 
            cookie as per the time limit.
👉path :- Paths are used to access information on a website.
👉domain :- If the cookie is set by YouTube, we cannot access that 
            cookie on our website, it can only be accessed by YouTube.
👉secure :- That means we have 2 types of protocols 1)http 2)https 
            means it will work only on https, not on HTTP-->

