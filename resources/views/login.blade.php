<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <div class="w-[1250px] shadow-lg mx-auto mt-20 p-10">
        <div class="w-[450px] mx-auto">
            <h1 class="text-4xl text-yellow-600 text-center font-bold">Login</h1>
            @if ($errors->any())
                <div class="w-[200px] p-2 bg-red-300 rounded-lg text-red-900 mt-10 text-center mx-auto">
                    <h1 class="text-red-700">
                        {{ $errors->first() }}
                    </h1>
                </div>
            @endif
            <form method="post" action="{{ route('login') }}" class="mt-4">
                @csrf
                <div class="flex justify-between mb-2 items-center">
                    <label for="username" class="font-bold text-slate-900">Username</label>
                    <input name="username" id="username" placeholder="username..." class="border rounded-md p-2 w-[350px]">
                </div>
                <div class="flex justify-between mb-2 items-center">
                    <label for="email" class="font-bold text-slate-900">email</label>
                    <input name="email" id="email" placeholder="email..." class="border rounded-md p-2 w-[350px]">
                </div>
                <div class="flex justify-between mb-2 items-center">
                    <label for="password" class="font-bold text-slate-900">Password</label>
                    <input name="password" id="password" placeholder="password.." class="border rounded-md p-2 w-[350px]">
                </div>
                <div class="flex justify-center">
                    <button type="submit" class="bg-cyan-600 mx-auto p-2 rounded-lg w-36 text-center mt-4 text-white">Login</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
