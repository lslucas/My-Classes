<?php

  require_once 'class.password.php';

    #call the classs
   $pass = new Password;

      #password defined by user
      $password = 'your password';

      #record crypt pass in var
      $pass_crypt = $pass->hash($password);

      print "The string <b>{$password}</b> now is <b>{$pass_crypt}</b>";
      print "<br/>Using ".$pass->used;


      /*
       *Change the salt
       */

      #record crypt pass in var
      $pass_crypt = $pass->hash($password, 'mcrypt', 'new salt');

      print "<p>";
      print "Changed the salt. The string <b>{$password}</b> now is <b>{$pass_crypt}</b>";
      print "<br/>Using ".$pass->used;
      print "</p>";

      /*
       *Using md5
       */

      #record crypt pass in var
      $pass_crypt = $pass->hash($password, 'md5');

      print "<p>";
      print "The string <b>{$password}</b> now is <b>{$pass_crypt}</b>";
      print "<br/>Using ".$pass->used;
      print "</p>";

