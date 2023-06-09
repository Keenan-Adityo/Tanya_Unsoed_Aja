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
          <div class="container bg-[#AFD3E2] p-4"><img src="{{ asset('icon/chatIcon.png') }}" class="mx-auto"></div>
        </a>
      </div>
      <div class="container">
        <a href="/settings">
          <div class="container p-4"><img src="{{ asset('icon/settings.png') }}" class="mx-auto"></div>
        </a>
        <a href="/">
          <div class="container p-4"><img src="{{ asset('icon/logout.png') }}" class="mx-auto"></div>
        </a>
      </div>
    </div>
    <div class="flex flex-col container border-2 w-full ml-6 bg-white rounded-3xl p-6 ">
      <div class="flex flex-row">
        <div class="container rounded-full bg-white w-20 h-20 "><img src="{{ asset('images/logoUnsoed.png') }}"></div>
        <div class="container flex flex-col place-content-center ml-2">
          <p class="text-lg font-semibold">Tanya Unsoed Aja</p>
          <p class="text-lg font-normal">Online</p>
        </div>
        <div class="container rounded-full bg-white w-20 h-20"><img src="{{ asset('icon/threedot.png') }}"></div>
      </div>
      <div class="flex flex-col-reverse container border-t h-full overflow-y-auto" id="chat">
        @foreach ($messages as $message)
        @if ($message->id_sender != "admin")
        <div class="max-w-fit1 py-1 px-3 my-1 rounded-l-3xl rounded-tr-3xl rounded-br-sm bg-[#FFD700] place-self-end">
          <p class="text-xl text-white">{{$message->content}}</p>
        </div>
        @else
        <div class="max-w-fit py-1 px-3 my-1 rounded-r-3xl rounded-tl-3xl roundedn-bl-sm bg-[#F6F1F1] my-2">
          <p class="text-xl">{{$message->content}}</p>
        </div>
        @endif
        @endforeach

      </div>
      <form action="" method="post" class="container flex flex-row mt-2">
        @csrf
        <input type="text" name="message" id="message" class="w-full border-2 rounded-lg h-12 px-2">
        <button type="submit" class="bg-[#19A7CE] rounded-lg p-2 ml-4"><img src="{{ asset('icon/send.png') }}" class="h-6 w-9 mx-auto"></button>
      </form>
    </div>
  </div>

</body>

</html>