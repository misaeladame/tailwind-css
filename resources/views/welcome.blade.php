<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind</title>
    <link rel="stylesheet" href="{{url(mix('css/app.css'))}}">
    <style>
        .imagen {
            background-image: url("{{asset('img/atardecer.jpg')}}");
            height: 500px;
            width: 500px;
            margin-left: auto;
            margin-right: auto;
        }

        .imagen-2 {
            background-image: url("{{asset('img/atardecer.jpg')}}");
            height: 400px;
            width: 900px;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body>
    {{-- <div class="container mx-auto"> --}}
    <div class="container">
        <h1 class="font-sans text-5xl text-blue-700 font-bold text-center mb-4">Tailwind</h1>
        <hr>
        <h2 class="font-sans text-4xl text-blue-500 font-bold text-center mb-5">¿Cómo funciona la grid de Tailwind?</h2>

        <div class="grid grid-cols-4 gap-4 mb-16">
            <div class="bg-blue-200">A</div>
            <div class="bg-blue-300">B</div>
            <div class="bg-blue-400">C</div>
            <div class="bg-blue-500">D</div>
            <div class="bg-blue-600">E</div>
            <div class="bg-blue-700">F</div>
        </div>
        <div class="grid grid-cols-4 gap-x-4 mb-16">
            <div class="bg-blue-200">A</div>
            <div class="bg-blue-300">B</div>
            <div class="bg-blue-400">C</div>
            <div class="bg-blue-500">D</div>
            <div class="bg-blue-600">E</div>
            <div class="bg-blue-700">F</div>
        </div>
        <div class="grid grid-cols-4 gap-y-4 mb-16">
            <div class="bg-blue-200">A</div>
            <div class="bg-blue-300">B</div>
            <div class="bg-blue-400">C</div>
            <div class="bg-blue-500">D</div>
            <div class="bg-blue-600">E</div>
            <div class="bg-blue-700">F</div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mb-16">
            <div class="bg-blue-200">A</div>
            <div class="bg-blue-300">B</div>
            <div class="bg-blue-400">C</div>
            <div class="bg-blue-500">D</div>
            <div class="bg-blue-600">E</div>
            <div class="bg-blue-700">F</div>
        </div>

        <div class="grid grid-cols-12 gap-4 mb-16">
            <div class="bg-blue-200">A</div>
            <div class="bg-blue-300">B</div>
            <div class="bg-blue-400">C</div>
            <div class="bg-blue-500">D</div>
            <div class="bg-blue-600">E</div>
            <div class="bg-blue-700">F</div>
            <div class="bg-blue-200">A</div>
            <div class="bg-blue-300">B</div>
            <div class="bg-blue-400">C</div>
            <div class="bg-blue-500">D</div>
            <div class="bg-blue-600">E</div>
            <div class="bg-blue-700">F</div>
        </div>

        <div class="grid grid-cols-16 gap-4 mb-16">
            <div class="bg-blue-200">A</div>
            <div class="bg-blue-300">B</div>
            <div class="bg-blue-400">C</div>
            <div class="bg-blue-500">D</div>
            <div class="bg-blue-600">E</div>
            <div class="bg-blue-700">F</div>
            <div class="bg-blue-200">A</div>
            <div class="bg-blue-300">B</div>
            <div class="bg-blue-400">C</div>
            <div class="bg-blue-500">D</div>
            <div class="bg-blue-600">E</div>
            <div class="bg-blue-700">F</div>
            <div class="bg-blue-200">A</div>
            <div class="bg-blue-300">B</div>
            <div class="bg-blue-400">C</div>
            <div class="bg-blue-500">D</div>
        </div>

        <div class="grid grid-cols-4 gap-4 mb-16">
            <div class="bg-blue-200 col-span-2">A</div>
            <div class="bg-blue-300">B</div>
            <div class="bg-blue-400">C</div>
            <div class="bg-blue-500">D</div>
            <div class="bg-blue-600">E</div>
        </div>

        <div class="grid grid-cols-4 gap-4 mb-16">
            <div class="bg-blue-200 col-span-4">A</div>
            <div class="bg-blue-300">B</div>
            <div class="bg-blue-400">C</div>
            <div class="bg-blue-500">D</div>
            <div class="bg-blue-600">E</div>
        </div>

        <div class="grid grid-cols-4 gap-4 mb-16">
            <div class="bg-blue-200 sm:col-span-2 md:col-span-3 lg:col-span-4">A</div>
            <div class="bg-blue-300">B</div>
            <div class="bg-blue-400">C</div>
            <div class="bg-blue-500">D</div>
            <div class="bg-blue-600">E</div>
        </div>

        <div class="grid grid-cols-4 gap-4 mb-16">
            <div class="bg-blue-200 col-span-2 col-start-2">A</div>
            <div class="bg-blue-300 col-start-1">B</div>
            <div class="bg-blue-400">C</div>
            <div class="bg-blue-500">D</div>
            <div class="bg-blue-600">E</div>
        </div>

        <div class="grid grid-cols-4 gap-4 mb-16">
            <div class="bg-blue-200">A</div>
            <div class="bg-blue-300 col-start-4">B</div>
            <div class="bg-blue-400">C</div>
            <div class="bg-blue-500">D</div>
            <div class="bg-blue-600">E</div>
        </div>

        <div class="grid grid-cols-4 grid-rows-2 gap-4 mb-16">
            <div class="bg-blue-200">A</div>
            <div class="bg-blue-300">B</div>
            <div class="bg-blue-400 col-span-2 row-span-2">C</div>
            <div class="bg-blue-500">D</div>
            <div class="bg-blue-600">E</div>
        </div>

        <div class="grid grid-flow-col mb-16">
            <div class="bg-blue-100">1</div>
            <div class="bg-blue-200">2</div>
            <div class="bg-blue-300">3</div>
            <div class="bg-blue-400">4</div>
            <div class="bg-blue-500">5</div>
            <div class="bg-blue-600">6</div>
            <div class="bg-blue-700">7</div>
            <div class="bg-blue-800">8</div>
            <div class="bg-blue-900">9</div>
        </div>

        <div class="grid grid-flow-col grid-rows-3 mb-16">
            <div class="bg-blue-100">1</div>
            <div class="bg-blue-200">2</div>
            <div class="bg-blue-300">3</div>
            <div class="bg-blue-400">4</div>
            <div class="bg-blue-500">5</div>
            <div class="bg-blue-600">6</div>
            <div class="bg-blue-700">7</div>
            <div class="bg-blue-800">8</div>
            <div class="bg-blue-900">9</div>
        </div>

        <div class="grid grid-flow-col grid-cols-4 grid-rows-3 mb-16">
            <div class="bg-blue-100">1</div>
            <div class="bg-blue-200">2</div>
            <div class="bg-blue-300">3</div>
            <div class="bg-blue-400">4</div>
            <div class="bg-blue-500">5</div>
            <div class="bg-blue-600">6</div>
            <div class="bg-blue-700">7</div>
            <div class="bg-blue-800">8</div>
            <div class="bg-blue-900">9</div>
        </div>

        <hr>
        <h2 class="font-sans text-4xl text-blue-500 font-bold text-center mb-5">Tipografías en Tailwind</h2>

        <h2 class="font-sans text-3xl font-bold mb-4">Este es un título de prueba</h2>
        <p class="font-serif leading-tight mb-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum nesciunt quod adipisci neque eaque architecto ab a exercitationem deleniti tenetur. Adipisci ea sint, dicta autem ipsa nam corporis in praesentium!</p>
        <ul>
            <li class="font-mono text-sm italic">Elemento #01</li>
            <li class="font-mono text-sm italic">Elemento #02</li>
            <li class="font-mono text-sm italic">Elemento #03</li>
        </ul>
        <br>
        <p class="font-mont font-hairline">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut debitis a rem qui omnis, nostrum atque, tempora amet dolor cumque sequi nobis dolores. Dolores laudantium facere incidunt. Earum, eos! At!</p>
        <p class="font-mont font-light">Aliquid, eligendi quod, temporibus, obcaecati doloremque inventore voluptate harum vero unde ullam accusamus? Repellat, quae quasi neque sit eaque dolorum odit est quis nemo natus. Quo similique aperiam doloremque illum.</p>
        <p class="font-mont font-semibold">Sunt eos inventore, quisquam magnam id aut dolorem, repellat beatae voluptatibus non praesentium sed nihil accusamus, nemo rerum autem odit perspiciatis. Sit laudantium ut distinctio obcaecati nesciunt nemo quam fugit!</p>
        <p class="font-mont font-black">Autem mollitia eveniet, officia reiciendis esse sapiente, tempore corrupti rem officiis culpa optio doloribus, delectus nisi minus ad maiores qui. Explicabo aliquid in animi optio beatae laudantium id aliquam quasi?</p>
        <br>
        <br>
        <p class="tracking-widest">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit similique dicta debitis error laudantium vel esse tempora facere incidunt autem quis sit a, ipsam molestias tenetur alias commodi mollitia suscipit.</p>
        <p class="tracking-tighter">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit similique dicta debitis error laudantium vel esse tempora facere incidunt autem quis sit a, ipsam molestias tenetur alias commodi mollitia suscipit.</p>
        <br>
        <ul class="list-disc">
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, eos incidunt? Similique perspiciatis, unde expedita quisquam iusto ipsam animi dicta excepturi consectetur quasi! Mollitia odio voluptas alias voluptates debitis rem.</li>
            <li>Quo cum quis ipsa perferendis dolorum maiores voluptatum earum molestiae, ea, quaerat consequatur eum tenetur! Obcaecati eos blanditiis sit, numquam reiciendis alias architecto, tempora consequuntur sed expedita, totam porro repellendus.</li>
            <li>Sapiente ducimus iste excepturi perspiciatis ullam natus omnis! Saepe corporis facere vel blanditiis earum dicta, libero facilis. Vitae voluptatum id quibusdam eligendi dicta quod, voluptate a deserunt provident asperiores quos.</li>
            <li>Nemo a ut veniam eaque necessitatibus, quas commodi repudiandae fugiat, voluptatum totam quaerat accusantium nobis quidem eum! Sunt ullam veritatis veniam, ipsum, explicabo reiciendis reprehenderit similique sed ipsa eveniet consectetur.</li>
            <li>Neque et voluptatem est dolor ipsam, nostrum, tempora expedita molestias laborum soluta tempore nulla sint laudantium eligendi aliquid a iste veniam officiis vel. Vel sunt ex eveniet ratione consequuntur similique.</li>
        </ul>
        <br>
        <h2 class="text-xl font-bold text-left md:text-center lg:text-right underline uppercase">Este es el título</h2>

        <p class="text-red-700 hover:text-blue-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo odio commodi ipsa molestiae nam eum natus hic, similique at dolorum eligendi distinctio blanditiis quia harum doloremque error cum, illum et.</p>

        <p class="text-red-700 hover:text-opacity-75">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo odio commodi ipsa molestiae nam eum natus hic, similique at dolorum eligendi distinctio blanditiis quia harum doloremque error cum, illum et.</p>

        <ul class="list-decimal md:list-disc list-inside">
            <li class="line-through">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, eos incidunt? Similique perspiciatis, unde expedita quisquam iusto ipsam animi dicta excepturi consectetur quasi! Mollitia odio voluptas alias voluptates debitis rem.</li>
            <li>Quo cum quis ipsa perferendis dolorum maiores voluptatum earum molestiae, ea, quaerat consequatur eum tenetur! Obcaecati eos blanditiis sit, numquam reiciendis alias architecto, tempora consequuntur sed expedita, totam porro repellendus.</li>
            <li>Sapiente ducimus iste excepturi perspiciatis ullam natus omnis! Saepe corporis facere vel blanditiis earum dicta, libero facilis. Vitae voluptatum id quibusdam eligendi dicta quod, voluptate a deserunt provident asperiores quos.</li>
            <li>Nemo a ut veniam eaque necessitatibus, quas commodi repudiandae fugiat, voluptatum totam quaerat accusantium nobis quidem eum! Sunt ullam veritatis veniam, ipsum, explicabo reiciendis reprehenderit similique sed ipsa eveniet consectetur.</li>
            <li class="lowercase">Neque et voluptatem est dolor ipsam, nostrum, tempora expedita molestias laborum soluta tempore nulla sint laudantium eligendi aliquid a iste veniam officiis vel. Vel sunt ex eveniet ratione consequuntur similique.</li>
        </ul>

        <p class="capitalize">josé misael adame sandoval</p>
        <hr>
        <h2 class="font-sans text-4xl text-blue-500 font-bold text-center mb-5">Background en Tailwind</h2>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam quasi quidem accusamus eaque dicta nobis ab, odit dolores a quas laboriosam nostrum doloremque dolorum illo architecto iusto consectetur voluptatum natus.</p>
        <div class="imagen bg-contain bg-no-repeat border-8 border-blue-600 mb-16"></div>

        <div class="imagen bg-cover bg-center border-8 border-blue-600 mb-16"></div>

        <div class="imagen bg-cover bg-right border-8 border-blue-600 mb-16"></div>

        <div class="imagen bg-cover bg-center border-8 border-blue-600 border-dashed bg-clip-padding mb-16"></div>

        <div class="imagen bg-cover bg-center border-8 border-blue-600 border-dashed bg-clip-content p-4 mb-16"></div>

        <div class="imagen-2 bg-fixed"></div>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum, similique dicta delectus quae nulla tempore eum voluptate rem labore qui! Dolor tempore quae recusandae, commodi voluptate sequi voluptas quidem nam.</p>
        <p>Totam laboriosam eveniet nesciunt ab, fugiat modi obcaecati quibusdam quae quaerat tempora voluptas, perspiciatis architecto eos. Itaque totam praesentium omnis qui quia, fuga aliquam dignissimos! Et nam mollitia sint quasi!</p>
        <p>Qui ex odit distinctio similique. Dolore labore fugit corrupti? Laudantium tempora eius quo minima quaerat ullam optio nobis exercitationem dolorum vero. Commodi laborum explicabo optio quae tenetur laboriosam fuga provident!</p>
        <p>Consequuntur eius iusto nam illum ad harum ipsa! Hic veritatis atque et deserunt corporis soluta sapiente ut, libero dolor ipsa, id laboriosam harum reprehenderit rem molestiae consequuntur, voluptas officia nulla!</p>
        <p>Rem consequuntur neque repudiandae error saepe aliquid, sint quia, et voluptas quod iste quibusdam. Molestias magni cupiditate fugiat sit enim earum possimus laboriosam ullam, ipsum doloremque reprehenderit, necessitatibus ratione sunt?</p>
        <p>Porro optio ut commodi facere a possimus voluptatem facilis dignissimos similique aliquid tempora at delectus neque aliquam amet harum, fugiat quia! Molestias nemo autem quam dolore, molestiae nisi praesentium omnis.</p>
        <p>Modi expedita animi provident! Eum sunt quidem mollitia deserunt neque repudiandae quod, ab minus aut, veritatis doloremque fuga saepe doloribus ea laborum quam iste vitae cumque, dolor iure. Voluptatibus, itaque!</p>
        <p>Magni libero maxime dolores fuga! Nobis accusamus quas deserunt quo provident delectus aperiam vero inventore, soluta debitis necessitatibus quod voluptate. Doloremque, illo officiis! A porro voluptate perspiciatis repellendus alias. Consectetur!</p>
        <p>Voluptas voluptatibus veritatis, ullam ipsam quasi id corporis. Tempore, incidunt error? Rerum, minima perspiciatis. Inventore ea expedita doloribus porro ut illum aperiam at ad odit non a, sed, aliquam eos!</p>
        <p>Velit itaque dolore animi, iste sunt quos, veniam cumque incidunt ratione corrupti tenetur iusto ad porro consequuntur iure. Asperiores natus, molestiae rem doloremque quibusdam a facere illo eos libero quaerat!</p>

        <div class="bg-blue-700 h-12 bg-opacity-50 mt-16">

        </div>

        <div class="bg-gradient-to-r from-blue-500 via-green-600 to-yellow-400 text-center font-extrabold text-5xl mt-16">
            Hola mundo
        </div>

        <div class="bg-gradient-to-r from-blue-500 via-green-600 to-yellow-400 text-center font-extrabold text-5xl bg-clip-text text-transparent mt-16 mb-16">
            Hola mundo
        </div>

        <hr>
        <h2 class="font-sans text-4xl text-blue-500 font-bold text-center mb-5">Bordes en Tailwind</h2>

        <div class="w-64 h-64 bg-gray-300 border-8 border-blue-800 mb-16">
        </div>

        <div class="w-64 h-64 bg-gray-300 border-l-8 border-blue-800 mb-16">
        </div>

        <div class="w-64 h-64 bg-gray-300 border-t-8 border-blue-800 mb-16">
        </div>

        <div class="w-64 h-64 bg-gray-300 border-r-8 border-blue-800 mb-16">
        </div>

        <div class="w-64 h-64 bg-gray-300 border-b-8 border-blue-800 mb-16">
        </div>

        <div class="w-64 h-64 bg-gray-300 border-b-8 border-blue-800 hover:border-green-500 mb-16">
        </div>

        <div class="w-64 h-64 bg-gray-300 border-b-8 border-blue-800 hover:border-opacity-75 mb-16">
        </div>

        <div class="w-64 h-64 bg-gray-300 border-b-8 border-blue-800 hover:border-opacity-25 mb-16">
        </div>

        <div class="w-64 h-64 bg-gray-300 border-8 border-blue-800 border-dashed mb-16">
        </div>

        <div class="w-64 h-64 bg-gray-300 border-8 border-blue-800 border-dotted mb-16">
        </div>

        <div class="w-64 h-64 bg-gray-300 border-8 border-blue-800 border-double mb-16">
        </div>

        <div class="w-64 h-64 bg-gray-300 border-8 border-blue-800 rounded mb-16">
        </div>

        <div class="w-64 h-64 bg-gray-300 border-8 border-blue-800 rounded-sm mb-16">
        </div>

        <div class="w-64 h-64 bg-gray-300 border-8 border-blue-800 rounded-md mb-16">
        </div>

        <div class="w-64 h-64 bg-gray-300 border-8 border-blue-800 rounded-lg mb-16">
        </div>

        <div class="w-64 h-64 bg-gray-300 border-8 border-blue-800 rounded-full mb-16">
        </div>

        <div class="w-32 h-64 bg-gray-300 border-8 border-blue-800 rounded-full mb-16">
        </div>

        <div class="w-64 h-32 bg-gray-300 border-8 border-blue-800 rounded-full">
        </div>

        <p class="border-b border-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam fuga magni error. A dignissimos odit deleniti nobis atque minus enim, rem blanditiis. Nobis nam iure commodi hic accusamus laudantium rem?</p>
        <p class="border-b border-gray-600">Culpa illo fugit officia rem, quas aliquid ea explicabo omnis dicta architecto facere cumque tempore ab nobis excepturi eos ratione necessitatibus quam. Laboriosam voluptates optio accusamus. Consequatur illum fuga fugiat.</p>
        <p class="border-b border-gray-600">Repudiandae quo dignissimos neque. Dignissimos cumque reiciendis accusantium necessitatibus nam odio facere atque sequi? Aspernatur est, magnam unde commodi, cum repudiandae nam dolorem voluptatem rem voluptates, minima corporis iure illum.</p>
        <p class="border-b border-gray-600">Aliquam dolorum officiis repudiandae quam quis eaque omnis, tenetur earum quas nam repellendus dolores! Repudiandae sapiente rem iusto blanditiis praesentium architecto eligendi recusandae nostrum sequi reprehenderit, cumque voluptates maxime eum?</p>
        <p>Repudiandae alias vero corporis voluptate ab reprehenderit, saepe sit deserunt fuga, maiores repellendus dicta incidunt aut nisi in cum iste labore, repellat fugiat quibusdam suscipit ad? Repellat exercitationem eligendi maxime.</p>


        <div class="divide-y-8 divide-gray-600 divide-dashed mt-16">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam fuga magni error. A dignissimos odit deleniti nobis atque minus enim, rem blanditiis. Nobis nam iure commodi hic accusamus laudantium rem?</p>
            <p>Culpa illo fugit officia rem, quas aliquid ea explicabo omnis dicta architecto facere cumque tempore ab nobis excepturi eos ratione necessitatibus quam. Laboriosam voluptates optio accusamus. Consequatur illum fuga fugiat.</p>
            <p>Repudiandae quo dignissimos neque. Dignissimos cumque reiciendis accusantium necessitatibus nam odio facere atque sequi? Aspernatur est, magnam unde commodi, cum repudiandae nam dolorem voluptatem rem voluptates, minima corporis iure illum.</p>
            <p>Aliquam dolorum officiis repudiandae quam quis eaque omnis, tenetur earum quas nam repellendus dolores! Repudiandae sapiente rem iusto blanditiis praesentium architecto eligendi recusandae nostrum sequi reprehenderit, cumque voluptates maxime eum?</p>
            <p>Repudiandae alias vero corporis voluptate ab reprehenderit, saepe sit deserunt fuga, maiores repellendus dicta incidunt aut nisi in cum iste labore, repellat fugiat quibusdam suscipit ad? Repellat exercitationem eligendi maxime.</p>
        </div>

        <nav class="divide-x-2 divide-blue-600 mb-10">
            <a href="">Link1</a>
            <a href="">Link2</a>
            <a href="">Link3</a>
            <a href="">Link4</a>
            <a href="">Link5</a>
        </nav>

        <hr>
        <h2 class="font-sans text-4xl text-blue-500 font-bold text-center mb-5">Tablas en Tailwind</h2>

        <table class="mb-16">
            <thead>
                <tr>
                    <th class="border border-gray-400 px-4 py-2 text-gray-800">País</th>
                    <th class="border border-gray-400 px-4 py-2 text-gray-800">Ciudad</th>
                </tr>
            </thead>

            <tbody>
                <tr class="bg-gray-200">
                    <td class="border border-gray-400 px-4 py-2">México</td>
                    <td class="border border-gray-400 px-4 py-2">Torreón</td>
                </tr>
                <tr>
                    <td class="border border-gray-400 px-4 py-2">Brasil</td>
                    <td class="border border-gray-400 px-4 py-2">Lages</td>
                </tr>
                <tr class="bg-gray-200">
                    <td class="border border-gray-400 px-4 py-2">Ecuador</td>
                    <td class="border border-gray-400 px-4 py-2">Guayaquil</td>
                </tr>
            </tbody>
        </table>




        <table class="table">
            <thead>
                <tr>
                    <th>País</th>
                    <th>Ciudad</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>México</td>
                    <td>Torreón</td>
                </tr>
                <tr>
                    <td>Brasil</td>
                    <td>Lages</td>
                </tr>
                <tr>
                    <td>Ecuador</td>
                    <td>Guayaquil</td>
                </tr>
            </tbody>
        </table>

        <table class="table w-full">
            <thead>
                <tr>
                    <th>País</th>
                    <th>Ciudad</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>México</td>
                    <td>Torreón</td>
                </tr>
                <tr>
                    <td>Brasil</td>
                    <td>Lages</td>
                </tr>
                <tr>
                    <td>Ecuador</td>
                    <td>Guayaquil</td>
                </tr>
            </tbody>
        </table>

        <table class="table w-full border-separate">
            <thead>
                <tr>
                    <th>País</th>
                    <th>Ciudad</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>México</td>
                    <td>Torreón</td>
                </tr>
                <tr>
                    <td>Brasil</td>
                    <td>Lages</td>
                </tr>
                <tr>
                    <td>Ecuador</td>
                    <td>Guayaquil</td>
                </tr>
            </tbody>
        </table>

        <table class="table w-full border-separate lg:border-collapse">
            <thead>
                <tr>
                    <th>País</th>
                    <th>Ciudad</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>México</td>
                    <td>Torreón</td>
                </tr>
                <tr>
                    <td>Brasil</td>
                    <td>Lages</td>
                </tr>
                <tr>
                    <td>Ecuador</td>
                    <td>Guayaquil</td>
                </tr>
            </tbody>
        </table>

        <table class="table w-full border-separate lg:border-collapse">
            <thead>
                <tr>
                    <th>País</th>
                    <th>Ciudad</th>
                    <th>Descripción</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>México</td>
                    <td>Torreón</td>
                    <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium, eum officia! Vel ea officia omnis accusantium. Illum obcaecati quidem blanditiis corporis repudiandae. Vitae tempora quo tempore nobis aperiam? Labore, obcaecati.</td>
                </tr>
                <tr>
                    <td>Brasil</td>
                    <td>Lages</td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur dicta eius natus ipsa officia ullam a commodi quasi quibusdam deleniti iusto laborum, impedit distinctio suscipit esse cupiditate? Cupiditate, perferendis ex.</td>
                </tr>
                <tr>
                    <td>Ecuador</td>
                    <td>Guayaquil</td>
                    <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis voluptatibus maxime earum laboriosam quos veniam aspernatur consequatur, necessitatibus temporibus ut illum, dolorum architecto fugit, doloremque commodi ea. Nulla, ratione nisi.</td>
                </tr>
            </tbody>
        </table>

        <table class="table w-full border-separate lg:border-collapse table-fixed">
            <thead>
                <tr>
                    <th class="w-1/4">País</th>
                    <th class="w-1/4">Ciudad</th>
                    <th class="w-1/2">Descripción</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>México</td>
                    <td>Torreón</td>
                    <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium, eum officia! Vel ea officia omnis accusantium. Illum obcaecati quidem blanditiis corporis repudiandae. Vitae tempora quo tempore nobis aperiam? Labore, obcaecati.</td>
                </tr>
                <tr>
                    <td>Brasil</td>
                    <td>Lages</td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur dicta eius natus ipsa officia ullam a commodi quasi quibusdam deleniti iusto laborum, impedit distinctio suscipit esse cupiditate? Cupiditate, perferendis ex.</td>
                </tr>
                <tr>
                    <td>Ecuador</td>
                    <td>Guayaquil</td>
                    <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis voluptatibus maxime earum laboriosam quos veniam aspernatur consequatur, necessitatibus temporibus ut illum, dolorum architecto fugit, doloremque commodi ea. Nulla, ratione nisi.</td>
                </tr>
            </tbody>
        </table>

        <hr>
        <h2 class="font-sans text-4xl text-blue-500 font-bold text-center mb-5">Sizes (width y height)</h2>

        <div class="bg-blue-600 h-64 mb-16">
            <div class="bg-red-600 h-32">

            </div>

        </div>

        <div class="bg-blue-600 h-64 mb-16">
            <div class="bg-red-600 h-full">

            </div>

        </div>

        <div class="bg-blue-600 h-64 mb-16">
            <div class="bg-red-600 h-full w-64">

            </div>

        </div>

        <div class="bg-blue-600 h-64 mb-16">
            <div class="bg-red-600 h-full w-2/5">

            </div>

        </div>

        <div class="bg-blue-600 h-64 mb-16">
            <div class="bg-red-600 h-full w-3/5">

            </div>

        </div>

        <div class="bg-blue-600 h-64 mb-16">
            <div class="bg-red-600 h-full w-full md:w-3/4 lg:w-2/4">

            </div>

        </div>

        <div class="bg-blue-600 h-64 mb-16">
            <div class="bg-red-600 h-full w-full max-w-5xl">

            </div>

        </div>

        <div class="bg-blue-600 h-64 mb-16">
            <div class="bg-red-600 h-full w-full max-w-3xl">

            </div>

        </div>

        <div class="bg-black w-64 h-screen mb-16">

        </div>

        <div class="bg-green-600 h-32 mb-16"></div>

        <div class="bg-green-600 h-32 w-screen mb-16"></div>

    </div>
</body>
</html>
