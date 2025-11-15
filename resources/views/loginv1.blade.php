<!DOCTYPE html>
<html lang="en" class="w-screen h-screen">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite(['resources/css/app.css'])
</head>

<body class="w-full h-full bg-gneutral-100">

    <main class="w-full h-full flex flex-col md:flex-row">

        <div class="w-full md:w-2/3 h-1/2 md:h-full bg-[url('images/Login_Background.svg')]
                    bg-no-repeat bg-cover bg-center">
        </div>

        <div class="w-full md:w-1/3 h-1/2 md:h-full min-w-3xs md:flex md:flex-col md:justify-center">
            <form method="POST" action="{{ url('/') }}">
                @csrf

                <x-layouts.auth.split-card>
                    <div class="flex flex-col w-full mx-auto gap-4 items-center">
                        <x-user-input name="username" placeholder="Username" />
                        <x-user-input name="password" placeholder="Password" type="password" />
                        <x-dynamic-button content="Login" type="submit"/>
                    </div>
                </x-layouts.auth.split-card>
            </form>
        </div>

    </main>

</body>

</html>