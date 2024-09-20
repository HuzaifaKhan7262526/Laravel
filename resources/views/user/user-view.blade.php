<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>



<div class="relative overflow-x-auto py-8 px-20">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 ">
        <thead class="text-xs text-gray-700 uppercase bg-gray-300 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Phone
                </th>
                <th scope="col" class="px-6 py-3">
                    Address
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $huzaifa)


            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $huzaifa->id}}
                </th>
                <td class="px-6 py-4">
                    {{ $huzaifa->name}}
                </td>
                <td class="px-6 py-4">
                    {{ $huzaifa->email}}
                </td>
                <td class="px-6 py-4">
                    {{ $huzaifa->phone_number}}
                </td>
                <td class="px-6 py-4">
                    {{ $huzaifa->address}}
                </td>
                <td class="px-6 py-4 flex gap-2">
                    <a href="#">Edit</a>
                    <form action="">
                        <button type="submit" class="text-red-800">Delete</button>
                    </form>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
