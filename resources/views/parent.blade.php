<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
      theme: {
        container: {
            center: true,
            screens: {
              xl: '1440px',
            },

            extend: {
                colors: {
                    clifford: '#da373d',
            }
            }
        }
        }
    }
  </script>

    <title>@yield('title','ini judul')</title>
</head>
<body>
    <h1 class="">COBA COBA</h1>

    <div class="container flex flex-wrap gap-[30px] ">
        @yield('parent_content')
    </div>


</body>
</html>
