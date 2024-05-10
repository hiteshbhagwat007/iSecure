<?php require './partials/_dbcon.php';

session_start();

// Check if the user is logged in, and if not, redirect to the login page
if (!isset($_SESSION['login']) || $_SESSION['login'] !== true){
  header("Location: login.php");
  exit();
}

?>
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900">
<?php require 'partials/_nav.php'?>
<div class="flex flex-col justify-center items-center">
  <?php './login.php';?>
  
  <section class="text-gray-400 bg-gray-900 body-font mr-0 md:mr-20 ml-0 md:ml-20">
  <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 md:mb-0 mb-10">
      <img class="object-cover object-center rounded" alt="hero" src="./hero.svg">
    </div>
    <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-white"> Hi <?php echo $_SESSION['username']; ?>, welcome to our iSecure application.
      </h1>
      <p class="mb-8 leading-relaxed text-justify">Our secure system portal provides users with a trusted and reliable platform to access sensitive information and perform essential tasks with confidence. Through robust encryption protocols and stringent authentication measures, we prioritize the protection of user data and ensure the integrity of our platform. With a focus on cybersecurity best practices, our portal offers peace of mind to users, knowing that their information is safeguarded against unauthorized access and malicious threats. Whether accessing confidential documents, managing personal accounts, or conducting transactions, users can rely on our secure system portal to maintain the highest standards of security and confidentiality.</p>
      <div class="flex justify-center">
        <button class="inline-flex text-white bg-green-500 border-0 py-2 px-6 focus:outline-none hover:bg-green-600 rounded text-lg">Button</button>
        <button class="ml-4 inline-flex text-gray-400 bg-gray-800 border-0 py-2 px-6 focus:outline-none hover:bg-gray-700 hover:text-white rounded text-lg">Button</button>
      </div>
    </div>
  </div>
</section>
</div>
</body>
</html>