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
        <section class="w-[1280px] mx-auto bg-gray-200 rounded mt-10">
            <div class="p-8 ">
                <table class="table-auto">
                    <thead>
                        <tr class="grid grid-cols-5 gap-8 justify-between">
                            <th>Full Name</th>
                            <th>Phone Numbar</th>
                            <th>Email</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <!-- <tbody>
                        <tr>
                            <td>The Sliding Mr. Bones (Next Stop, Pottersville)</td>
                            <td>Malcolm Lockyer</td>
                            <td>1961</td>
                            <td>1961</td>
                            <td>1961</td>
                        </tr>
                        <tr>
                            <td>Witchy Woman</td>
                            <td>The Eagles</td>
                            <td>1972</td>
                            <td>1972</td>
                            <td>1972</td>
                        </tr>
                        <tr>
                            <td>Shining Star</td>
                            <td>Earth, Wind, and Fire</td>
                            <td>1975</td>
                            <td>1975</td>
                            <td>1975</td>
                        </tr>
                    </tbody> -->
                </table>
            </div>
        </section>
    </main>
</body>

</html>