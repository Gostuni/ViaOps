<!DOCTYPE html>
<html lang="en" class="w-screen h-screen font-sans font-medium text-lg" data-theme="default">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite(['resources/css/app.css'])
</head>

<body class="w-full h-full bg-page-bg">

    <main class="w-full h-full">

        <div class="w-full h-full min-w-3xs flex flex-row justify-center items-center overflow-y-auto overflow-x-hidden">
            <form method="POST" action="{{ url('/') }}">
                @csrf

                <x-layouts.auth.split-card>
                    <div class="w-md max-w-md flex flex-col w-full mx-auto gap-4 items-center">
                        <x-user-input name="username" placeholder="Username" />
                        <x-user-input name="password" placeholder="Password" type="password" />
                        <x-dynamic-button content="Login" type="submit" class="bg-bttn-bg" />
                    </div>
                </x-layouts.auth.split-card>
            </form>
        </div>

    </main>

</body>

</html>