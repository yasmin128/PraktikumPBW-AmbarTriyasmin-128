<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./src/output.css" />
    <title>Login</title>
  </head>

  <body
    class="bg-[#f4f7f2] min-h-screen flex items-center justify-center px-4 relative overflow-hidden"
  >
    <!-- bg -->
    <div
      class="absolute -top-25 -left-25 w-72 h-72 bg-[#dfe9db] rounded-full blur-3xl opacity-40"
    ></div>

    <div
      class="absolute -bottom-25 -right-25 w-72 h-72 bg-[#dfe9db] rounded-full blur-3xl opacity-40"
    ></div>

    <!-- card -->
    <div
      class="relative bg-white w-full max-w-sm rounded-4xl shadow-xl px-8 py-9"
    >
      <!-- judul -->
      <h1 class="text-4xl font-bold text-center text-[#27452f] mb-2">Login</h1>

      <p class="text-center text-[#748076] text-sm mb-8">
        Welcome back! Please login to continue.
      </p>
      <?php if (isset($_GET['message'])) : ?>
        <div class="bg-red-100 text-red-600 p-3 rounded-xl text-sm mb-5 text-center">
          <?= $_GET['message']; ?>
        </div>
      <?php endif; ?>

      <!-- form -->
      <form action="proses_login.php" method="POST" class="space-y-5">
        <!-- email -->
        <div>
          <label class="block text-sm font-medium text-[#27452f] mb-2">
            Username
          </label>

          <input
            type="text"
            name="username"
            placeholder="Enter your username"
            required
            class="w-full p-3 rounded-2xl border border-[#dbe7d8] bg-[#f9fcf8] text-sm outline-none focus:ring-2 focus:ring-[#7ca27b] transition"
          />
        </div>

        <!-- password -->
        <div>
          <label class="block text-sm font-medium text-[#27452f] mb-2">
            Password
          </label>

          <input
            type="password"
            name="password"
            placeholder="Enter your password"
            required
            class="w-full p-3 rounded-2xl border border-[#dbe7d8] bg-[#f9fcf8] text-sm outline-none focus:ring-2 focus:ring-[#7ca27b] transition"
          />
        </div>

        <!-- button -->
        <button
          class="w-full bg-[#5f8b63] hover:bg-[#4f7653] text-white py-3 rounded-2xl font-semibold transition duration-300 shadow-md"
        >
          Login
        </button>
      </form>

      <!-- help -->
      <p class="text-center text-sm text-[#748076] mt-6">
        Need help?

        <a href="https://github.com/yasmin128" class="text-[#5f8b63] font-semibold hover:underline">
          Contact admin
        </a>
      </p>
    </div>
  </body>
</html>
