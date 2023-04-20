<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
    </head>
    <body class="antialiased">
        <div class="relative flex justify-center items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            <div style="color: white;">
                <h1>To Do List</h1>

                @foreach ($listItems as $listItem)
                <div class="flex" style="align-items: center;">
                    <p>Item: {{ $listItem->name }}</p>

                        <form method="post" action="{{ route('markDone', $listItem->id) }}" accept-charset="UTF-8"> 
                            {{ csrf_field() }}
                        <button type="submit" style="max-height: 25px; margin-left: 20px;">Done</button>
                        </form>
                    </div>
                    @endforeach

                <form method="post" action="{{ route('saveItem') }}" accept-charset="UTF-8">
                    {{ csrf_field() }}

                    <label for="listItem">New Todo Item</label> </br>
                    <input type="text" name="listItem"> </br>
                    <button type="submit">Save Item</button>
                </form>
            </div>
        </div>
    </body>
</html>
