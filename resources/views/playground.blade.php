<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playground</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-neutral-100 h-screen flex items-center justify-center">
{{--     <x-layouts.auth.card>
        <div class="flex flex-col gap-4 w-full max-w-md items-center">
            <x-user-input name="username" placeholder="Username" />
            <x-user-input name="password" placeholder="Password" type="password" />
            <x-dynamic-button content="Login" />
        </div>
    </x-layouts.auth.card> --}}

    <x-layouts.auth.cardtest>
        <x-user-input name="username" placeholder="Username" />
    </x-layouts.auth.cardtest>
</body>

</html>