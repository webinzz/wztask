<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="{{ asset('assets/icons.png') }}" type="image/x-icon">
  <title>WzTask</title>

  {{-- icon --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bellefair&family=Luckiest+Guy&family=Playfair+Display+SC:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

  @vite('resources/css/app.css')
  <style>
    *{
        font-family: "Poppins", serif;
        font-style: normal;
    }
    ::-webkit-scrollbar {
      background-color: transparent;
        width: 0px; 
    }
    ::-webkit-scrollbar-track {
    background: transparent; /* Warna latar belakang scrollbar */
}



    
  </style>
</head>
<body class="w-screen  h-screen  overflow-hidden">
  <div class="fixed w-full h-screen bg-gradient-to-br from-blue-400 to-pink-500 -z-20 left-0 top-0  "></div>

  <!-- Blue Circle -->
    {{ $slot }}

    <x-bottomnavi></x-bottomnavi>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>

</body>
</html>