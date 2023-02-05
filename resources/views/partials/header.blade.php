<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Application</title>
    @vite('resources/css/app.css')
</head>
<body class="h-[100vh] w-[100vw] flex items-center justify-center bg-blue-100">
    <main class="flex items-center justify-center">
        <div class="max-w-xl w-full bg-slate-900 rounded-xl px-3">
            <header class="">
                <div class="flex justify-between items-center px-5 p-5">
                    <h1 class="text-slate-100 text-xl font-bold">To Do List</h1>
                    <ul class="flex space-x-5">
                        <li class="text-slate-100 border-b-2 p-1 border-red-600 cursor-pointer">Home</li>
                        <li class="text-slate-100 border-b-2 p-1 border-red-600 cursor-pointer">About</li>
                        <li class="text-slate-100 border-b-2 p-1 border-red-600 cursor-pointer">Action</li>
                    </ul>
                </div>
            </header>