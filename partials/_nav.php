<?php
if(isset($_SESSION['login']) && $_SESSION['login'] == true){
  $login = true;
}
else {
  $login = false;
}

echo '<header class="text-gray-400 bg-gray-900 body-font shadow-2xl shadow-green-500/50 sticky top-0">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a href="./index.php" class="flex title-font font-medium items-center text-white mb-4 md:mb-0">
      <img src="./isecure.png" class="h-10" alt="logo">
      <span class="ml-3 text-xl">iSecure</span>
    </a>
    <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
      <a href="./about.php" class="mr-5 hover:text-white">About</a>';
      if(!$login){
      echo '<a href="./login.php" class="mr-5 hover:text-white">Login</a>
      <a href="./signup.php" class="mr-5 hover:text-white">Signup</a>';
      }
      if($login){ 
      echo '<a href="./login.php" class="mr-5 hover:text-white">Logout</a>';
      }
      echo '</nav>
  </div>
</header>';

?>