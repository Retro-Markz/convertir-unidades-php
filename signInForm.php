<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>

    
</head>
<body>
    
<h1 class="text-center font-semibold text-6xl m-auto p-12">Wellcome</h1>

<form action="/"  class="flex flex-col w-96 gap-6 mx-auto form p-12 rounded-2xl mt-8">
        <div class="user ">
        <label for="">Enter your username</label>
        <input type="text" class="p-2 border rounded-lg w-full  " placeholder="@UserName">
        </div>

        <div class="password">
        <label for="">Enter your password</label>
        <input type="password" class="p-2 border rounded-lg w-full" placeholder="Password****">
        </div>

<button  class="py-2 px-12 font-bold rounded-lg bg-sky-500 text-white transition-all hover:bg-sky-700">Enter</button>

<small class="text-end"><a href="#">Forgot Password?</a></small>

<button class="flex gap-8 py-2 px-12 font-bold rounded-lg bg-white text-black truncate transition-all">
  <img src="./assests/google-icon.png" alt="google icon" width="24">  
Sign In with Google</button>
<button class=" py-2 px-12 font-bold rounded-lg bg-black text-white truncate transition-all">Register</button>
</form>
<script></script>
</body>
</html> 