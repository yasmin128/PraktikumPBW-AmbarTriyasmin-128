<?php
session_start();
if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}
?>

<!-- Kalo mau coba login -->
<!-- username: yasmin -->
<!-- password: 12345 -->

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./src/output.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <title>Dashboard</title>

    <!-- Icons -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    />

    <style>
      * {
        font-family: "Poppins", sans-serif;
      }

      body {
        overflow: hidden;
      }
    </style>
  </head>

  <body class="bg-[#f4f4f4] p-2 text-[12px]">
    <!-- CONTAINER -->
    <div class="flex gap-3 h-[98vh]">
      <!-- SIDEBAR -->
      <aside
        class="w-47.5 bg-linear-to-b from-[#8ba67b] to-[#9bb38d] rounded-[20px] px-4 py-5 flex flex-col justify-between text-white"
      >
        <div>
          <!-- LOGO -->
          <h1 class="text-[23px] font-bold text-center mb-10">Study Tracker</h1>

          <!-- MENU -->
          <div class="space-y-2">
            <a
              href="#"
              class="rounded-xl px-4 py-3 flex items-center gap-3 hover:bg-white/10 duration-300 cursor-pointer"
            >
              <i class="fa-solid fa-table-cells-large text-xs"></i>
              <span>Dashboard</span>
            </a>

            <a
              href="#"
              class="rounded-xl px-4 py-3 flex items-center gap-3 hover:bg-white/10 duration-300 cursor-pointer"
            >
              <i class="fa-regular fa-user text-xs"></i>
              <span>Profile</span>
            </a>

            <a
              href="#"
              class="rounded-xl px-4 py-3 flex items-center gap-3 hover:bg-white/10 duration-300 cursor-pointer"
            >
              <i class="fa-solid fa-gear text-xs"></i>
              <span>Settings</span>
            </a>
          </div>
        </div>

        <!-- LOGOUT -->
        <a
          href="logout.php"
          class="rounded-xl px-4 py-3 flex items-center gap-3 hover:bg-white/10 duration-300 cursor-pointer"
        >
          <i class="fa-solid fa-right-from-bracket text-xs"></i>
          <span>Logout</span>
        </a>
      </aside>

      <!-- MAIN -->
      <main class="flex-1 bg-[#fafafa] rounded-[20px] p-5 overflow-y-auto">
        <!-- TOPBAR -->
        <div class="flex justify-between items-center mb-6">
          <!-- WELCOME -->
          <div class="mb-6">
            <p class="text-gray-500 mb-1">Hallo.</p>

            <h1 class="text-[34px] font-semibold leading-tight mb-2">
              Welcome, <?= $_SESSION['username']; ?>!
            </h1>

            <p class="text-gray-500 text-xs">Let's make today productive.</p>
          </div>
          <!-- RIGHT -->
          <div class="flex items-center gap-4 -translate-y-6">
            <i class="fa-regular fa-bell text-base"></i>

            <div
              class="w-9 h-9 rounded-full bg-[#8ba67b] flex items-center justify-center text-white text-xs font-medium"
            >
              Y
            </div>
          </div>
        </div>

        <!-- CONTENT -->
        <div class="grid grid-cols-[2fr_0.9fr] gap-4">
          <!-- LEFT -->
          <div>
            <!-- STATS -->
            <div class="grid grid-cols-3 gap-3 mb-4">
              <!-- CARD -->
              <div class="bg-white rounded-2xl p-4 shadow-sm">
                <div
                  class="w-10 h-10 rounded-full bg-[#edf3e8] flex items-center justify-center text-[#7c9a6d] mb-3"
                >
                  <i class="fa-regular fa-clipboard text-sm"></i>
                </div>

                <p class="text-gray-500 text-xs">Total Tasks</p>

                <h2 class="text-[28px] font-semibold">2</h2>

                <span class="text-[10px] text-gray-400"> All time </span>
              </div>

              <!-- CARD -->
              <div class="bg-white rounded-2xl p-4 shadow-sm">
                <div
                  class="w-10 h-10 rounded-full bg-[#edf3e8] flex items-center justify-center text-[#7c9a6d] mb-3"
                >
                  <i class="fa-regular fa-circle-check text-sm"></i>
                </div>

                <p class="text-gray-500 text-xs">Completed</p>

                <h2 class="text-[28px] font-semibold">8</h2>

                <span class="text-[10px] text-gray-400"> This week </span>
              </div>

              <!-- CARD -->
              <div class="bg-white rounded-2xl p-4 shadow-sm">
                <div
                  class="w-10 h-10 rounded-full bg-[#edf3e8] flex items-center justify-center text-[#7c9a6d] mb-3"
                >
                  <i class="fa-regular fa-hourglass-half text-sm"></i>
                </div>

                <p class="text-gray-500 text-xs">Pending</p>

                <h2 class="text-[28px] font-semibold">4</h2>

                <span class="text-[10px] text-gray-400"> This week </span>
              </div>
            </div>

            <!-- TASK -->
            <div class="bg-white rounded-2xl p-5 shadow-sm">
              <!-- HEADER -->
              <div class="flex justify-between items-center mb-5">
                <h2 class="text-[22px] font-semibold">My Tasks</h2>

                <button
                  class="bg-[#8ba67b] hover:opacity-90 duration-300 text-white px-4 h-9.5 rounded-xl text-xs"
                >
                  <i class="fa-solid fa-plus mr-1"></i>
                  Add Task
                </button>
              </div>

              <!-- TABS -->
              <div class="flex gap-6 text-gray-400 text-xs font-medium mb-5">
                <span class="text-[#7c9a6d] border-b-2 border-[#7c9a6d] pb-1">
                  All
                </span>

                <span>Pending</span>
                <span>Completed</span>
              </div>

              <!-- LIST -->
              <div class="space-y-3">
                <!-- ITEM -->
                <div
                  class="bg-[#fafafa] rounded-xl px-4 py-3 flex justify-between items-center"
                >
                  <div class="flex items-center gap-3">
                    <div
                      class="w-4 h-4 rounded-full bg-[#7c9a6d] flex items-center justify-center text-white text-[8px]"
                    >
                      <i class="fa-solid fa-check"></i>
                    </div>

                    <span class="line-through text-gray-400 font-medium">
                      Database Quiz
                    </span>

                    <span
                      class="bg-[#edf3e8] text-[#6f8c62] px-2 py-1 rounded-md text-[10px]"
                    >
                      Database
                    </span>
                  </div>

                  <span class="text-[10px] text-gray-400"> May 22, 2024 </span>
                </div>

                <!-- ITEM -->
                <div
                  class="bg-[#fafafa] rounded-xl px-4 py-3 flex justify-between items-center"
                >
                  <div class="flex items-center gap-3">
                    <div
                      class="w-4 h-4 rounded-full border-2 border-gray-300"
                    ></div>

                    <span class="font-medium"> Prepare Presentation </span>

                    <span
                      class="bg-[#edf3e8] text-[#6f8c62] px-2 py-1 rounded-md text-[10px]"
                    >
                      Presentation
                    </span>
                  </div>

                  <span class="text-[10px] text-gray-400"> May 27, 2024 </span>
                </div>
              </div>
            </div>
          </div>

          <!-- RIGHT -->
          <div class="space-y-3 mt-1.25">
            <!-- QUOTE 1 -->
            <div
              class="bg-linear-to-br from-[#8ba67b] to-[#a9be9d] rounded-2xl p-4 text-white relative overflow-hidden"
            >
              <i
                class="fa-solid fa-quote-left absolute text-[55px] opacity-10 top-3 right-3"
              ></i>

              <p class="text-[10px] opacity-80 mb-2">Today's Quote</p>

              <h2 class="text-[17px] leading-relaxed font-semibold">
                “Success doesn’t come from what you do occasionally, but what
                you do consistently.”
              </h2>

              <div class="mt-3">
                <p class="text-xs font-medium">— Marie Forleo</p>
              </div>
            </div>

            <!-- QUOTE 2 -->
            <div
              class="bg-white rounded-2xl p-4 shadow-sm relative overflow-hidden border border-gray-100"
            >
              <i
                class="fa-solid fa-star absolute text-[55px] text-[#8ba67b]/10 top-3 right-3"
              ></i>

              <p class="text-[10px] text-gray-400 mb-2">Daily Motivation</p>

              <h2
                class="text-[17px] leading-relaxed font-semibold text-gray-800"
              >
                “Small progress is still progress. Keep moving forward no matter
                how slow.”
              </h2>

              <div class="mt-3">
                <p class="text-xs font-medium text-gray-700">
                  — Study Reminder
                </p>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </body>
</html>
