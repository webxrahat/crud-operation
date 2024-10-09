<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Crud Operation</title>
</head>

<body>
    <header>
        <section class="w-[1280px] bg-red-200 mx-auto rounded ">
            <div class="flex p-8 justify-between items-center">
                <div>
                    <h2 class="font-bold text-xl">All Users</h2>
                </div>
                <div>
                    <button type="button" class="text-lg bg-red-500 px-8 py-2 rounded text-white">Add User</button>
                </div>
            </div>
        </section>
    </header>
    <main>
        <section>
            <div>
                <table>
                    <thead>
                        <tr>
                            <th>Full Name</th>
                            <th>Phone Numbar</th>
                            <th>Email</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </section>
    </main>
</body>

</html>