<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SISTA</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
</head>

<body class="hero bg-[#F6F1F1]">
  <div class="flex flex-row p-14 h-full">
    <div class="flex flex-col container border-2 w-28 bg-[#FFD700] rounded-3xl drop-shadow justify-between">
      <div class="container">
        <div class="container rounded-full bg-white w-20 h-20 my-5 mx-auto"><img src="{{ asset('images/logoUnsoed.png') }}"></div>
        <a href="/chatroom">
          <div class="container p-4"><img src="{{ asset('icon/chatIcon.png') }}" class="mx-auto"></div>
        </a>
      </div>
      <div class="container">
        <a href="/settings">
          <div class="container bg-[#AFD3E2] p-4"><img src="{{ asset('icon/settings.png') }}" class="mx-auto"></div>
        </a>
        <a href="">
          <div class="container p-4"><img src="{{ asset('icon/logout.png') }}" class="mx-auto"></div>
        </a>
      </div>
    </div>
    <div class="flex flex-col container border-2 w-full ml-6 bg-white rounded-3xl p-6">
      <p class="text-4xl font-bold">Pengaturan</p>
      <a href="/" class="border-2 bg-red-600 rounded-xl my-2 p-2 max-w-min">
        <button type="submit" class="">
          <p class="text-white">Keluar</p>
        </button>
      </a>
    </div>
  </div>

</body>

</html>