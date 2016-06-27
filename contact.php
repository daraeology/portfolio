<?php

  if (isset($_POST)) {

  $email = "daryazorin@gmail.com";
  mail($email, "email from portfolio site", json_encode($_POST), "From: ".$email);
  echo "1";

}

?>