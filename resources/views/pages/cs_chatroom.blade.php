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
  <nav class="flex justify-between bg-[#FFD700] px-2">
    <div class="flex flex-row container">
      <a href="/dashboard" class="font-bold px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900"><img src="{{ asset('images/logoUnsoed.png') }}" class="w-12 h-12"></a>
      <a href="/team" class="font-bold px-3 py-2 my-auto text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">
        <p class="text-2xl">Tanya Unsoed Aja!</p>
      </a>
    </div>
    <div class="flex container justify-end">
      <a href="/adminLogout" class="flex flex-row bg-red-600 rounded-xl my-2 p-2">
        <button type="submit" class="">
          <p class="text-white">Logout</p>
        </button><img src="{{ asset('icon/logout.png') }}" class="w-8 h-8 ml-2">
      </a>
    </div>
  </nav>
  <div class="flex flex-row py-8 px-14 h-full">
    <div class="flex flex-col w-96 mr-3">
      <label class="relative block">
        <span class="sr-only">Search</span>
        <span class="absolute inset-y-0 left-0 flex items-center pl-2">
          <img src="{{ asset('icon/search.svg') }}" class="h-5 w-5">
        </span>
        <input class="placeholder:italic placeholder:text-slate-400 block bg-white w-full container border border-slate-300 rounded-3xl py-3 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="Cari Mahasiswa..." type="text" name="search" id="search" />
      </label>
      <div class="flex flex-col w-full h-full container border-2  bg-white rounded-3xl p-4 mt-3">
        <p class="text-2xl font-semibold">Mahasiswa</p>
        <ul id="resultsList" class=""></ul>


        <script>
          var contacts = <?php  ?> @json($user_data);

          function searchContacts(query) {
            query = query.toLowerCase();

            if (query.length === 0) {
              return contacts;
            }

            const matchingContacts = contacts.filter(contact => {
              const contactName = contact.username.toLowerCase();

              if (contactName.includes(query) || query.includes(contactName)) {
                return true;
              }

              const queryWords = query.split(' ');
              return queryWords.every(word => contactName.includes(word));
            });

            return matchingContacts;
          }

          function displayResults() {
            const searchInput = document.getElementById('search');
            const query = searchInput.value.trim().toLowerCase();
            const resultsList = document.getElementById('resultsList');
            resultsList.innerHTML = '';

            const matchingContacts = searchContacts(query);

            if (matchingContacts.length === 0) {
              resultsList.innerHTML = '<li>Tidak ada Mahasiswa yang ditemukan.</li>';
            } else {
              matchingContacts.forEach(contact => {
                const contactItemHTML = `
              <li class="contact-item">
              <a href="/customerService/${contact.id_user}" class="flex flex-row border-b-2 mt-2 pb-1">
          <div class="container rounded-full w-16"><img src="{{ asset('images/logoUnsoed.png') }}" class="w-12 h-12 "></div>
          <div class="container flex flex-col place-content-center ml-2">
            <p class="text-lg font-semibold text-left w-full">${contact.username}</p>
          </div>
          <div class="container rounded-full bg-white w-9 h-9 my-auto"><img src="{{ asset('images/logoUnsoed.png') }}"></div>
        </a>
              </li>
            `;
                resultsList.innerHTML += contactItemHTML;
              });
            }
          }

          const searchInput = document.getElementById('search');
          searchInput.addEventListener('input', displayResults);

          // Initial display of all contacts
          displayResults();
        </script>

      </div>

    </div>

    <div class="flex flex-col container border-2 w-full ml-6 bg-white rounded-3xl p-6 ">
      @if ($chatroom != 0)
      <div class="flex flex-row">
        <div class="container rounded-full bg-white w-20 h-20 "><img src="{{ asset('images/logoUnsoed.png') }}"></div>
        <div class="container flex flex-col place-content-center ml-2">
          <p class="text-lg font-semibold">{{$username}}</p>
          <p class="text-lg font-normal">Online</p>
        </div>
        <div class="container rounded-full bg-white w-20 h-20"><img src="{{ asset('icon/threedot.png') }}"></div>
      </div>
      <div class="flex flex-col-reverse container border-t h-full overflow-y-auto" id="chat">
        @foreach ($messages as $message)
        @if ($message->id_sender == "admin")
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
      @else
      <img src="{{ asset('images/logoUnsoed.png') }}" class="my-auto mx-auto h-full opacity-30">
      @endif
    </div>
  </div>

</body>

</html>