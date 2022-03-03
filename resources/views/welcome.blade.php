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

    <nav class="bg-blue-300 h-16 fixed inset-x-0 z-50">
      LAYOUT FOOTER
    </nav>

    {{-- <aside class="w-64 bg-gray-800 fixed inset-y-0">

    </aside> --}}

    {{-- <div class="container mx-auto"> --}}
    <div class="container pt-16">
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

        <hr>
        <h2 class="font-sans text-4xl text-blue-500 font-bold text-center mb-5">Layout</h2>
        <div class="bg-gray-300 w-64 h-32 p-8 border-8 border-gray-500 mb-16">
            <div class="bg-gray-500 h-full w-full">

            </div>
        </div>

        <div class="bg-gray-300 w-64 h-32 p-8 border-8 border-gray-500 box-content mb-16">
            <div class="bg-gray-500 h-full w-full">

            </div>
        </div>

        <div class="bg-gray-400 text-gray-700 text-center px-4 py-2 block">1</div>
        <div class="bg-gray-400 text-gray-700 text-center px-4 py-2 my-2 block">2</div>
        <div class="bg-gray-400 text-gray-700 text-center px-4 py-2 block mb-16">3</div>

        <div class="container bg-blue-700">

            <div class="bg-gray-400 text-gray-700 text-center px-4 py-2 inline">1</div>
            <div class="bg-gray-400 text-gray-700 text-center px-4 py-2 my-2 inline">2</div>
            <div class="bg-gray-400 text-gray-700 text-center px-4 py-2 inline">3</div>



        </div>

        <br>
        <br>

        <div class="container mt-4 bg-blue-600">
            <div class="bg-gray-400 text-gray-700 text-center px-4 py-2 inline-block">1</div>
            <div class="bg-gray-400 text-gray-700 text-center px-4 py-2 my-2 inline-block">2</div>
            <div class="bg-gray-400 text-gray-700 text-center px-4 py-2 inline-block">3</div>
        </div>

        <br>
        <br>

        <div class="container mt-4 bg-blue-600">
            <div class="bg-gray-400 text-gray-700 text-center px-4 py-2 inline-block">1</div>
            <div class="bg-gray-400 text-gray-700 text-center px-4 py-2 my-2 inline-block">2</div>
            <div class="bg-gray-400 text-gray-700 text-center px-4 py-2 inline-block  hidden">3</div>
        </div>

        <br>
        <br>

        <div class="container mt-4 bg-blue-600">
            <div class="bg-gray-400 text-gray-700 text-center px-4 py-2 inline-block">1</div>
            <div class="bg-gray-400 text-gray-700 text-center px-4 py-2 my-2 inline-block">2</div>
            <div class="bg-gray-400 text-gray-700 text-center px-4 py-2 inline-block  lg:hidden">3</div>
        </div>

        <br>
        <br>

        <img class="float-left" style="width: 35%; height: 35%;" src="https://images.pexels.com/photos/372042/pexels-photo-372042.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Café">


        <p class="mb-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem temporibus at odio, in accusantium quo tenetur ullam eos corrupti quis aliquam, consequatur magnam iste, voluptate numquam quas neque voluptatibus iusto.</p>
        <p class="mb-5">Velit a possimus dolores voluptate iste facere amet? Totam, culpa, rem iure, ratione officiis voluptatibus tempora neque commodi exercitationem autem velit harum numquam. Animi aspernatur iure provident officiis eveniet ad.</p>
        <p class="mb-5">Minus repudiandae doloremque voluptas atque, dolorum molestias animi quod laudantium enim distinctio aut nisi ex facere. Laboriosam porro expedita, tempore quisquam obcaecati perspiciatis iure dolorum animi optio quo saepe ullam.</p>
        <p class="mb-5">Nemo assumenda porro quo ex sunt. Illum neque voluptates quae eos obcaecati vel repellendus, enim amet quibusdam odit explicabo animi beatae ad eius, blanditiis, aliquam mollitia quam! Dolores, voluptatem beatae.</p>
        <p class="mb-5">Hic, aperiam voluptatum vitae mollitia quo nulla fugiat veritatis! Error at velit, esse aliquam iste nam. Saepe explicabo accusamus laborum libero vero, magnam ab dicta beatae inventore quos id quo?</p>
        <p class="mb-5">Nemo assumenda porro quo ex sunt. Illum neque voluptates quae eos obcaecati vel repellendus, enim amet quibusdam odit explicabo animi beatae ad eius, blanditiis, aliquam mollitia quam! Dolores, voluptatem beatae.</p>
        <p class="mb-5">Hic, aperiam voluptatum vitae mollitia quo nulla fugiat veritatis! Error at velit, esse aliquam iste nam. Saepe explicabo accusamus laborum libero vero, magnam ab dicta beatae inventore quos id quo?</p>
        <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo a sed obcaecati, ratione at nisi necessitatibus, molestiae placeat rerum, facilis porro fuga praesentium ipsam doloribus atque vel consequatur accusamus. Tenetur.</p>
        <p class="mb-5">Laudantium, quod expedita? Tenetur incidunt, saepe sint autem sapiente praesentium quod in, ipsum nostrum minus earum? Impedit fuga recusandae eveniet soluta maxime cum accusamus numquam qui porro, quaerat, non in.</p>

        <br>
        <br>
        <br>
        <br>

        <img class="float-right" style="width: 35%; height: 35%;" src="https://images.pexels.com/photos/372042/pexels-photo-372042.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Café">

        <p class="mb-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem temporibus at odio, in accusantium quo tenetur ullam eos corrupti quis aliquam, consequatur magnam iste, voluptate numquam quas neque voluptatibus iusto.</p>
        <p class="mb-5">Velit a possimus dolores voluptate iste facere amet? Totam, culpa, rem iure, ratione officiis voluptatibus tempora neque commodi exercitationem autem velit harum numquam. Animi aspernatur iure provident officiis eveniet ad.</p>
        <p class="mb-5">Minus repudiandae doloremque voluptas atque, dolorum molestias animi quod laudantium enim distinctio aut nisi ex facere. Laboriosam porro expedita, tempore quisquam obcaecati perspiciatis iure dolorum animi optio quo saepe ullam.</p>
        <p class="mb-5">Nemo assumenda porro quo ex sunt. Illum neque voluptates quae eos obcaecati vel repellendus, enim amet quibusdam odit explicabo animi beatae ad eius, blanditiis, aliquam mollitia quam! Dolores, voluptatem beatae.</p>
        <p class="mb-5">Hic, aperiam voluptatum vitae mollitia quo nulla fugiat veritatis! Error at velit, esse aliquam iste nam. Saepe explicabo accusamus laborum libero vero, magnam ab dicta beatae inventore quos id quo?</p>
        <p class="mb-5">Nemo assumenda porro quo ex sunt. Illum neque voluptates quae eos obcaecati vel repellendus, enim amet quibusdam odit explicabo animi beatae ad eius, blanditiis, aliquam mollitia quam! Dolores, voluptatem beatae.</p>
        <p class="mb-5">Hic, aperiam voluptatum vitae mollitia quo nulla fugiat veritatis! Error at velit, esse aliquam iste nam. Saepe explicabo accusamus laborum libero vero, magnam ab dicta beatae inventore quos id quo?</p>
        <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo a sed obcaecati, ratione at nisi necessitatibus, molestiae placeat rerum, facilis porro fuga praesentium ipsam doloribus atque vel consequatur accusamus. Tenetur.</p>
        <p class="mb-5">Laudantium, quod expedita? Tenetur incidunt, saepe sint autem sapiente praesentium quod in, ipsum nostrum minus earum? Impedit fuga recusandae eveniet soluta maxime cum accusamus numquam qui porro, quaerat, non in.</p>


        <br>
        <br>
        <br>
        <br>

        <img class="float-left" style="width: 35%; height: 35%;" src="https://images.pexels.com/photos/1102341/pexels-photo-1102341.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=9400" alt="Café">

        <img class="float-right" style="width: 35%; height: 35%;" src="https://images.pexels.com/photos/372042/pexels-photo-372042.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Café">

        <p class="mb-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem temporibus at odio, in accusantium quo tenetur ullam eos corrupti quis aliquam, consequatur magnam iste, voluptate numquam quas neque voluptatibus iusto.</p>
        <p class="mb-5">Velit a possimus dolores voluptate iste facere amet? Totam, culpa, rem iure, ratione officiis voluptatibus tempora neque commodi exercitationem autem velit harum numquam. Animi aspernatur iure provident officiis eveniet ad.</p>
        <p class="mb-5">Minus repudiandae doloremque voluptas atque, dolorum molestias animi quod laudantium enim distinctio aut nisi ex facere. Laboriosam porro expedita, tempore quisquam obcaecati perspiciatis iure dolorum animi optio quo saepe ullam.</p>
        <p class="mb-5">Nemo assumenda porro quo ex sunt. Illum neque voluptates quae eos obcaecati vel repellendus, enim amet quibusdam odit explicabo animi beatae ad eius, blanditiis, aliquam mollitia quam! Dolores, voluptatem beatae.</p>
        <p class="mb-5">Hic, aperiam voluptatum vitae mollitia quo nulla fugiat veritatis! Error at velit, esse aliquam iste nam. Saepe explicabo accusamus laborum libero vero, magnam ab dicta beatae inventore quos id quo?</p>
        <p class="mb-5">Nemo assumenda porro quo ex sunt. Illum neque voluptates quae eos obcaecati vel repellendus, enim amet quibusdam odit explicabo animi beatae ad eius, blanditiis, aliquam mollitia quam! Dolores, voluptatem beatae.</p>
        <p class="mb-5">Hic, aperiam voluptatum vitae mollitia quo nulla fugiat veritatis! Error at velit, esse aliquam iste nam. Saepe explicabo accusamus laborum libero vero, magnam ab dicta beatae inventore quos id quo?</p>
        <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo a sed obcaecati, ratione at nisi necessitatibus, molestiae placeat rerum, facilis porro fuga praesentium ipsam doloribus atque vel consequatur accusamus. Tenetur.</p>
        <p class="mb-5">Laudantium, quod expedita? Tenetur incidunt, saepe sint autem sapiente praesentium quod in, ipsum nostrum minus earum? Impedit fuga recusandae eveniet soluta maxime cum accusamus numquam qui porro, quaerat, non in.</p>


        <br>
        <br>
        <br>
        <br>

        <img class="float-left" style="width: 30%; height: 30%;" src="https://images.pexels.com/photos/9023663/pexels-photo-9023663.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Café">

        <img class="float-right" style="width: 35%; height: 35%;" src="https://images.pexels.com/photos/372042/pexels-photo-372042.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Café">

        <p class="mb-5 clear-right">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem temporibus at odio, in accusantium quo tenetur ullam eos corrupti quis aliquam, consequatur magnam iste, voluptate numquam quas neque voluptatibus iusto.</p>
        <p class="mb-5">Velit a possimus dolores voluptate iste facere amet? Totam, culpa, rem iure, ratione officiis voluptatibus tempora neque commodi exercitationem autem velit harum numquam. Animi aspernatur iure provident officiis eveniet ad.</p>
        <p class="mb-5">Minus repudiandae doloremque voluptas atque, dolorum molestias animi quod laudantium enim distinctio aut nisi ex facere. Laboriosam porro expedita, tempore quisquam obcaecati perspiciatis iure dolorum animi optio quo saepe ullam.</p>
        <p class="mb-5">Nemo assumenda porro quo ex sunt. Illum neque voluptates quae eos obcaecati vel repellendus, enim amet quibusdam odit explicabo animi beatae ad eius, blanditiis, aliquam mollitia quam! Dolores, voluptatem beatae.</p>
        <p class="mb-5">Hic, aperiam voluptatum vitae mollitia quo nulla fugiat veritatis! Error at velit, esse aliquam iste nam. Saepe explicabo accusamus laborum libero vero, magnam ab dicta beatae inventore quos id quo?</p>
        <p class="mb-5">Nemo assumenda porro quo ex sunt. Illum neque voluptates quae eos obcaecati vel repellendus, enim amet quibusdam odit explicabo animi beatae ad eius, blanditiis, aliquam mollitia quam! Dolores, voluptatem beatae.</p>
        <p class="mb-5">Hic, aperiam voluptatum vitae mollitia quo nulla fugiat veritatis! Error at velit, esse aliquam iste nam. Saepe explicabo accusamus laborum libero vero, magnam ab dicta beatae inventore quos id quo?</p>
        <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo a sed obcaecati, ratione at nisi necessitatibus, molestiae placeat rerum, facilis porro fuga praesentium ipsam doloribus atque vel consequatur accusamus. Tenetur.</p>
        <p class="mb-5">Laudantium, quod expedita? Tenetur incidunt, saepe sint autem sapiente praesentium quod in, ipsum nostrum minus earum? Impedit fuga recusandae eveniet soluta maxime cum accusamus numquam qui porro, quaerat, non in.</p>

        <br>
        <br>
        <br>
        <br>

        <img class="float-left" style="width: 30%; height: 30%;" src="https://images.pexels.com/photos/9023663/pexels-photo-9023663.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Café">

        <img class="float-right" style="width: 35%; height: 35%;" src="https://images.pexels.com/photos/372042/pexels-photo-372042.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Café">

        <p class="mb-5 clear-left">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem temporibus at odio, in accusantium quo tenetur ullam eos corrupti quis aliquam, consequatur magnam iste, voluptate numquam quas neque voluptatibus iusto.</p>
        <p class="mb-5">Velit a possimus dolores voluptate iste facere amet? Totam, culpa, rem iure, ratione officiis voluptatibus tempora neque commodi exercitationem autem velit harum numquam. Animi aspernatur iure provident officiis eveniet ad.</p>
        <p class="mb-5">Minus repudiandae doloremque voluptas atque, dolorum molestias animi quod laudantium enim distinctio aut nisi ex facere. Laboriosam porro expedita, tempore quisquam obcaecati perspiciatis iure dolorum animi optio quo saepe ullam.</p>
        <p class="mb-5">Nemo assumenda porro quo ex sunt. Illum neque voluptates quae eos obcaecati vel repellendus, enim amet quibusdam odit explicabo animi beatae ad eius, blanditiis, aliquam mollitia quam! Dolores, voluptatem beatae.</p>
        <p class="mb-5">Hic, aperiam voluptatum vitae mollitia quo nulla fugiat veritatis! Error at velit, esse aliquam iste nam. Saepe explicabo accusamus laborum libero vero, magnam ab dicta beatae inventore quos id quo?</p>
        <p class="mb-5">Nemo assumenda porro quo ex sunt. Illum neque voluptates quae eos obcaecati vel repellendus, enim amet quibusdam odit explicabo animi beatae ad eius, blanditiis, aliquam mollitia quam! Dolores, voluptatem beatae.</p>
        <p class="mb-5">Hic, aperiam voluptatum vitae mollitia quo nulla fugiat veritatis! Error at velit, esse aliquam iste nam. Saepe explicabo accusamus laborum libero vero, magnam ab dicta beatae inventore quos id quo?</p>
        <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo a sed obcaecati, ratione at nisi necessitatibus, molestiae placeat rerum, facilis porro fuga praesentium ipsam doloribus atque vel consequatur accusamus. Tenetur.</p>
        <p class="mb-5">Laudantium, quod expedita? Tenetur incidunt, saepe sint autem sapiente praesentium quod in, ipsum nostrum minus earum? Impedit fuga recusandae eveniet soluta maxime cum accusamus numquam qui porro, quaerat, non in.</p>


        <br>
        <br>
        <br>
        <br>

        <img class="float-left" style="width: 30%; height: 30%;" src="https://images.pexels.com/photos/9023663/pexels-photo-9023663.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Café">

        <img class="float-right" style="width: 35%; height: 35%;" src="https://images.pexels.com/photos/372042/pexels-photo-372042.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Café">

        <p class="mb-5 clear-both">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem temporibus at odio, in accusantium quo tenetur ullam eos corrupti quis aliquam, consequatur magnam iste, voluptate numquam quas neque voluptatibus iusto.</p>
        <p class="mb-5">Velit a possimus dolores voluptate iste facere amet? Totam, culpa, rem iure, ratione officiis voluptatibus tempora neque commodi exercitationem autem velit harum numquam. Animi aspernatur iure provident officiis eveniet ad.</p>
        <p class="mb-5">Minus repudiandae doloremque voluptas atque, dolorum molestias animi quod laudantium enim distinctio aut nisi ex facere. Laboriosam porro expedita, tempore quisquam obcaecati perspiciatis iure dolorum animi optio quo saepe ullam.</p>
        <p class="mb-5">Nemo assumenda porro quo ex sunt. Illum neque voluptates quae eos obcaecati vel repellendus, enim amet quibusdam odit explicabo animi beatae ad eius, blanditiis, aliquam mollitia quam! Dolores, voluptatem beatae.</p>
        <p class="mb-5">Hic, aperiam voluptatum vitae mollitia quo nulla fugiat veritatis! Error at velit, esse aliquam iste nam. Saepe explicabo accusamus laborum libero vero, magnam ab dicta beatae inventore quos id quo?</p>
        <p class="mb-5">Nemo assumenda porro quo ex sunt. Illum neque voluptates quae eos obcaecati vel repellendus, enim amet quibusdam odit explicabo animi beatae ad eius, blanditiis, aliquam mollitia quam! Dolores, voluptatem beatae.</p>
        <p class="mb-5">Hic, aperiam voluptatum vitae mollitia quo nulla fugiat veritatis! Error at velit, esse aliquam iste nam. Saepe explicabo accusamus laborum libero vero, magnam ab dicta beatae inventore quos id quo?</p>
        <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo a sed obcaecati, ratione at nisi necessitatibus, molestiae placeat rerum, facilis porro fuga praesentium ipsam doloribus atque vel consequatur accusamus. Tenetur.</p>
        <p class="mb-5">Laudantium, quod expedita? Tenetur incidunt, saepe sint autem sapiente praesentium quod in, ipsum nostrum minus earum? Impedit fuga recusandae eveniet soluta maxime cum accusamus numquam qui porro, quaerat, non in.</p>

        <br>
        <br>
        <br>
        <br>

        <img class="float-right" style="width: 30%; height: 30%;" src="https://images.pexels.com/photos/9023663/pexels-photo-9023663.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Café">

        <img class="float-left" style="width: 35%; height: 35%;" src="https://images.pexels.com/photos/372042/pexels-photo-372042.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Café">

        <p class="mb-5 clear-both">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem temporibus at odio, in accusantium quo tenetur ullam eos corrupti quis aliquam, consequatur magnam iste, voluptate numquam quas neque voluptatibus iusto.</p>
        <p class="mb-5">Velit a possimus dolores voluptate iste facere amet? Totam, culpa, rem iure, ratione officiis voluptatibus tempora neque commodi exercitationem autem velit harum numquam. Animi aspernatur iure provident officiis eveniet ad.</p>
        <p class="mb-5">Minus repudiandae doloremque voluptas atque, dolorum molestias animi quod laudantium enim distinctio aut nisi ex facere. Laboriosam porro expedita, tempore quisquam obcaecati perspiciatis iure dolorum animi optio quo saepe ullam.</p>
        <p class="mb-5">Nemo assumenda porro quo ex sunt. Illum neque voluptates quae eos obcaecati vel repellendus, enim amet quibusdam odit explicabo animi beatae ad eius, blanditiis, aliquam mollitia quam! Dolores, voluptatem beatae.</p>
        <p class="mb-5">Hic, aperiam voluptatum vitae mollitia quo nulla fugiat veritatis! Error at velit, esse aliquam iste nam. Saepe explicabo accusamus laborum libero vero, magnam ab dicta beatae inventore quos id quo?</p>
        <p class="mb-5">Nemo assumenda porro quo ex sunt. Illum neque voluptates quae eos obcaecati vel repellendus, enim amet quibusdam odit explicabo animi beatae ad eius, blanditiis, aliquam mollitia quam! Dolores, voluptatem beatae.</p>
        <p class="mb-5">Hic, aperiam voluptatum vitae mollitia quo nulla fugiat veritatis! Error at velit, esse aliquam iste nam. Saepe explicabo accusamus laborum libero vero, magnam ab dicta beatae inventore quos id quo?</p>
        <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo a sed obcaecati, ratione at nisi necessitatibus, molestiae placeat rerum, facilis porro fuga praesentium ipsam doloribus atque vel consequatur accusamus. Tenetur.</p>
        <p class="mb-5">Laudantium, quod expedita? Tenetur incidunt, saepe sint autem sapiente praesentium quod in, ipsum nostrum minus earum? Impedit fuga recusandae eveniet soluta maxime cum accusamus numquam qui porro, quaerat, non in.</p>

        <br>
        <br>
        <br>
        <br>

        <div class="container bg-gray-300">
            <img src="https://cdn.pixabay.com/photo/2022/01/02/19/43/port-6910972_960_720.jpg" alt="">
        </div>

        <br>
        <br>
        <br>
        <br>

        <div class="container bg-gray-300">
            <img class="w-full h-64" src="https://cdn.pixabay.com/photo/2022/01/02/19/43/port-6910972_960_720.jpg" alt="">
        </div>

        <br>
        <br>
        <br>
        <br>

        <div class="container bg-gray-300">
            <img class="w-full h-64 object-contain" src="https://cdn.pixabay.com/photo/2022/01/02/19/43/port-6910972_960_720.jpg" alt="">
        </div>

        <br>
        <br>
        <br>
        <br>

        <div class="container bg-gray-300">
            <img class="w-full h-64 object-cover" src="https://cdn.pixabay.com/photo/2022/01/02/19/43/port-6910972_960_720.jpg" alt="">
        </div>

        <br>
        <br>
        <br>
        <br>

        <div class="container bg-gray-300">
            <img class="w-full h-64 object-cover object-top" src="https://cdn.pixabay.com/photo/2022/01/02/19/43/port-6910972_960_720.jpg" alt="">
        </div>

        <br>
        <br>
        <br>
        <br>

        <div class="container bg-gray-300">
            <img class="w-full h-64 object-cover object-bottom" src="https://cdn.pixabay.com/photo/2022/01/02/19/43/port-6910972_960_720.jpg" alt="">
        </div>

        <br>
        <br>
        <br>
        <br>

        <div class="container bg-gray-300">
            <img class="w-full h-64 object-none" src="https://cdn.pixabay.com/photo/2022/01/02/19/43/port-6910972_960_720.jpg" alt="">
        </div>

        <br>
        <br>
        <br>
        <br>

        <div class="container">
            <div class="bg-gray-300 p-4">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, commodi itaque? Sit quibusdam accusamus, quis dolore distinctio quidem ratione sed officiis rem fugiat perspiciatis architecto nam iure? Totam, rerum quas?</p>
                <p>Aspernatur, expedita. Aspernatur deserunt iure nesciunt atque cumque optio libero rerum dicta modi nulla repellat expedita, inventore accusamus nisi. Quis eius eligendi nam porro adipisci necessitatibus non iure officia provident.</p>
                <p>Aspernatur temporibus debitis excepturi, tempore consectetur a nulla, nemo alias, quod nam laboriosam beatae unde doloremque ab fugiat? Omnis illo, in ut aspernatur hic necessitatibus beatae dolor doloremque voluptas et.</p>
                <p>Temporibus natus vero consequatur, quod neque facere earum molestiae in commodi explicabo corporis dolor veniam, reiciendis officia consectetur veritatis expedita at distinctio ullam vitae odio a reprehenderit porro officiis? Vitae?</p>
                <p>Quasi aliquid, tempore nam neque dolorum consequuntur. Dolores temporibus optio consequatur? Dicta rem quisquam, libero accusamus porro laudantium ratione reiciendis quam ducimus obcaecati modi aspernatur sed, sit nemo et ex.</p>
                <p>Nam provident similique iure neque ea quibusdam vel impedit quos dignissimos laudantium, perspiciatis suscipit nesciunt officiis facere dolorum voluptates deleniti voluptatum voluptatem esse sunt molestiae nostrum. Molestias illo adipisci laboriosam.</p>
                <p>Quia ab modi dignissimos voluptatum veniam repellendus odit labore explicabo eligendi nihil accusantium, aliquam minus maxime in atque aspernatur at laboriosam. Corporis deserunt esse voluptates cumque, animi ipsam amet odio.</p>
                <p>Ipsam aut incidunt, laboriosam ipsa veniam cupiditate, dolor suscipit minus, nobis harum reiciendis magni repellat a culpa delectus nam facere ducimus numquam quisquam? Odio esse nostrum illo culpa ducimus. Molestiae!</p>
            </div>
        </div>


        <br>
        <br>
        <br>
        <br>

        <div class="container">
            <div class="bg-gray-300 p-4 h-64">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, commodi itaque? Sit quibusdam accusamus, quis dolore distinctio quidem ratione sed officiis rem fugiat perspiciatis architecto nam iure? Totam, rerum quas?</p>
                <p>Aspernatur, expedita. Aspernatur deserunt iure nesciunt atque cumque optio libero rerum dicta modi nulla repellat expedita, inventore accusamus nisi. Quis eius eligendi nam porro adipisci necessitatibus non iure officia provident.</p>
                <p>Aspernatur temporibus debitis excepturi, tempore consectetur a nulla, nemo alias, quod nam laboriosam beatae unde doloremque ab fugiat? Omnis illo, in ut aspernatur hic necessitatibus beatae dolor doloremque voluptas et.</p>
                <p>Temporibus natus vero consequatur, quod neque facere earum molestiae in commodi explicabo corporis dolor veniam, reiciendis officia consectetur veritatis expedita at distinctio ullam vitae odio a reprehenderit porro officiis? Vitae?</p>
                <p>Quasi aliquid, tempore nam neque dolorum consequuntur. Dolores temporibus optio consequatur? Dicta rem quisquam, libero accusamus porro laudantium ratione reiciendis quam ducimus obcaecati modi aspernatur sed, sit nemo et ex.</p>
                <p>Nam provident similique iure neque ea quibusdam vel impedit quos dignissimos laudantium, perspiciatis suscipit nesciunt officiis facere dolorum voluptates deleniti voluptatum voluptatem esse sunt molestiae nostrum. Molestias illo adipisci laboriosam.</p>
                <p>Quia ab modi dignissimos voluptatum veniam repellendus odit labore explicabo eligendi nihil accusantium, aliquam minus maxime in atque aspernatur at laboriosam. Corporis deserunt esse voluptates cumque, animi ipsam amet odio.</p>
                <p>Ipsam aut incidunt, laboriosam ipsa veniam cupiditate, dolor suscipit minus, nobis harum reiciendis magni repellat a culpa delectus nam facere ducimus numquam quisquam? Odio esse nostrum illo culpa ducimus. Molestiae!</p>
            </div>
        </div>



        <div class="container mt-80">
            <div class="bg-gray-300 p-4 h-64 overflow-hidden">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, commodi itaque? Sit quibusdam accusamus, quis dolore distinctio quidem ratione sed officiis rem fugiat perspiciatis architecto nam iure? Totam, rerum quas?</p>
                <p>Aspernatur, expedita. Aspernatur deserunt iure nesciunt atque cumque optio libero rerum dicta modi nulla repellat expedita, inventore accusamus nisi. Quis eius eligendi nam porro adipisci necessitatibus non iure officia provident.</p>
                <p>Aspernatur temporibus debitis excepturi, tempore consectetur a nulla, nemo alias, quod nam laboriosam beatae unde doloremque ab fugiat? Omnis illo, in ut aspernatur hic necessitatibus beatae dolor doloremque voluptas et.</p>
                <p>Temporibus natus vero consequatur, quod neque facere earum molestiae in commodi explicabo corporis dolor veniam, reiciendis officia consectetur veritatis expedita at distinctio ullam vitae odio a reprehenderit porro officiis? Vitae?</p>
                <p>Quasi aliquid, tempore nam neque dolorum consequuntur. Dolores temporibus optio consequatur? Dicta rem quisquam, libero accusamus porro laudantium ratione reiciendis quam ducimus obcaecati modi aspernatur sed, sit nemo et ex.</p>
                <p>Nam provident similique iure neque ea quibusdam vel impedit quos dignissimos laudantium, perspiciatis suscipit nesciunt officiis facere dolorum voluptates deleniti voluptatum voluptatem esse sunt molestiae nostrum. Molestias illo adipisci laboriosam.</p>
                <p>Quia ab modi dignissimos voluptatum veniam repellendus odit labore explicabo eligendi nihil accusantium, aliquam minus maxime in atque aspernatur at laboriosam. Corporis deserunt esse voluptates cumque, animi ipsam amet odio.</p>
                <p>Ipsam aut incidunt, laboriosam ipsa veniam cupiditate, dolor suscipit minus, nobis harum reiciendis magni repellat a culpa delectus nam facere ducimus numquam quisquam? Odio esse nostrum illo culpa ducimus. Molestiae!</p>
            </div>
        </div>



        <div class="container mt-36">
            <div class="bg-gray-300 p-4 h-64 overflow-scroll">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, commodi itaque? Sit quibusdam accusamus, quis dolore distinctio quidem ratione sed officiis rem fugiat perspiciatis architecto nam iure? Totam, rerum quas?</p>
                <p>Aspernatur, expedita. Aspernatur deserunt iure nesciunt atque cumque optio libero rerum dicta modi nulla repellat expedita, inventore accusamus nisi. Quis eius eligendi nam porro adipisci necessitatibus non iure officia provident.</p>
                <p>Aspernatur temporibus debitis excepturi, tempore consectetur a nulla, nemo alias, quod nam laboriosam beatae unde doloremque ab fugiat? Omnis illo, in ut aspernatur hic necessitatibus beatae dolor doloremque voluptas et.</p>
                <p>Temporibus natus vero consequatur, quod neque facere earum molestiae in commodi explicabo corporis dolor veniam, reiciendis officia consectetur veritatis expedita at distinctio ullam vitae odio a reprehenderit porro officiis? Vitae?</p>
                <p>Quasi aliquid, tempore nam neque dolorum consequuntur. Dolores temporibus optio consequatur? Dicta rem quisquam, libero accusamus porro laudantium ratione reiciendis quam ducimus obcaecati modi aspernatur sed, sit nemo et ex.</p>
                <p>Nam provident similique iure neque ea quibusdam vel impedit quos dignissimos laudantium, perspiciatis suscipit nesciunt officiis facere dolorum voluptates deleniti voluptatum voluptatem esse sunt molestiae nostrum. Molestias illo adipisci laboriosam.</p>
                <p>Quia ab modi dignissimos voluptatum veniam repellendus odit labore explicabo eligendi nihil accusantium, aliquam minus maxime in atque aspernatur at laboriosam. Corporis deserunt esse voluptates cumque, animi ipsam amet odio.</p>
                <p>Ipsam aut incidunt, laboriosam ipsa veniam cupiditate, dolor suscipit minus, nobis harum reiciendis magni repellat a culpa delectus nam facere ducimus numquam quisquam? Odio esse nostrum illo culpa ducimus. Molestiae!</p>
            </div>
        </div>

        <div class="container mt-36">
            <div class="bg-gray-300 p-4 h-64 overflow-y-scroll">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, commodi itaque? Sit quibusdam accusamus, quis dolore distinctio quidem ratione sed officiis rem fugiat perspiciatis architecto nam iure? Totam, rerum quas?</p>
                <p>Aspernatur, expedita. Aspernatur deserunt iure nesciunt atque cumque optio libero rerum dicta modi nulla repellat expedita, inventore accusamus nisi. Quis eius eligendi nam porro adipisci necessitatibus non iure officia provident.</p>
                <p>Aspernatur temporibus debitis excepturi, tempore consectetur a nulla, nemo alias, quod nam laboriosam beatae unde doloremque ab fugiat? Omnis illo, in ut aspernatur hic necessitatibus beatae dolor doloremque voluptas et.</p>
                <p>Temporibus natus vero consequatur, quod neque facere earum molestiae in commodi explicabo corporis dolor veniam, reiciendis officia consectetur veritatis expedita at distinctio ullam vitae odio a reprehenderit porro officiis? Vitae?</p>
                <p>Quasi aliquid, tempore nam neque dolorum consequuntur. Dolores temporibus optio consequatur? Dicta rem quisquam, libero accusamus porro laudantium ratione reiciendis quam ducimus obcaecati modi aspernatur sed, sit nemo et ex.</p>
                <p>Nam provident similique iure neque ea quibusdam vel impedit quos dignissimos laudantium, perspiciatis suscipit nesciunt officiis facere dolorum voluptates deleniti voluptatum voluptatem esse sunt molestiae nostrum. Molestias illo adipisci laboriosam.</p>
                <p>Quia ab modi dignissimos voluptatum veniam repellendus odit labore explicabo eligendi nihil accusantium, aliquam minus maxime in atque aspernatur at laboriosam. Corporis deserunt esse voluptates cumque, animi ipsam amet odio.</p>
                <p>Ipsam aut incidunt, laboriosam ipsa veniam cupiditate, dolor suscipit minus, nobis harum reiciendis magni repellat a culpa delectus nam facere ducimus numquam quisquam? Odio esse nostrum illo culpa ducimus. Molestiae!</p>
            </div>
        </div>

        <div class="container mt-36">
            <div class="bg-gray-300 p-4 h-64 overflow-auto">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, commodi itaque? Sit quibusdam accusamus, quis dolore distinctio quidem ratione sed officiis rem fugiat perspiciatis architecto nam iure? Totam, rerum quas?</p>
                <p>Aspernatur, expedita. Aspernatur deserunt iure nesciunt atque cumque optio libero rerum dicta modi nulla repellat expedita, inventore accusamus nisi. Quis eius eligendi nam porro adipisci necessitatibus non iure officia provident.</p>
                <p>Aspernatur temporibus debitis excepturi, tempore consectetur a nulla, nemo alias, quod nam laboriosam beatae unde doloremque ab fugiat? Omnis illo, in ut aspernatur hic necessitatibus beatae dolor doloremque voluptas et.</p>
                <p>Temporibus natus vero consequatur, quod neque facere earum molestiae in commodi explicabo corporis dolor veniam, reiciendis officia consectetur veritatis expedita at distinctio ullam vitae odio a reprehenderit porro officiis? Vitae?</p>
                <p>Quasi aliquid, tempore nam neque dolorum consequuntur. Dolores temporibus optio consequatur? Dicta rem quisquam, libero accusamus porro laudantium ratione reiciendis quam ducimus obcaecati modi aspernatur sed, sit nemo et ex.</p>
                <p>Nam provident similique iure neque ea quibusdam vel impedit quos dignissimos laudantium, perspiciatis suscipit nesciunt officiis facere dolorum voluptates deleniti voluptatum voluptatem esse sunt molestiae nostrum. Molestias illo adipisci laboriosam.</p>
                <p>Quia ab modi dignissimos voluptatum veniam repellendus odit labore explicabo eligendi nihil accusantium, aliquam minus maxime in atque aspernatur at laboriosam. Corporis deserunt esse voluptates cumque, animi ipsam amet odio.</p>
                <p>Ipsam aut incidunt, laboriosam ipsa veniam cupiditate, dolor suscipit minus, nobis harum reiciendis magni repellat a culpa delectus nam facere ducimus numquam quisquam? Odio esse nostrum illo culpa ducimus. Molestiae!</p>
            </div>
        </div>

        <div class="container mt-36 mb-32">
            <div class="bg-gray-200 p-4">
                <div class="bg-gray-300 p-4">


                    <div class="bg-blue-400 p-4">

                    </div>

                    <div class="bg-blue-600 p-4">

                    </div>

                </div>
            </div>
        </div>


        {{-- {{-- <div class="container mt-36 mb-32">
            <div class="bg-gray-300 p-4">
                <div class="bg-gray-400 p-4">


                    <div class="bg-blue-400 p-4">

                    </div>

                    <div class="bg-blue-600 p-4 absolute bottom-0 right-0">

                    </div>

                </div>
            </div>
        </div> --}}

        {{-- <div class="container mt-36 mb-32">
            <div class="bg-gray-300 p-4">
                <div class="bg-gray-400 p-4">


                    <div class="bg-blue-400 p-4">

                    </div>

                    <div class="bg-blue-600 p-4 absolute inset-y-0 left-0">

                    </div>

                </div>
            </div>
        </div> --}}

        <div class="container mt-36 mb-32">
            <div class="bg-gray-300 p-4 relative">
                <div class="bg-gray-400 p-4">


                    <div class="bg-blue-400 p-4">

                    </div>

                    <div class="bg-blue-600 p-4 absolute inset-x-0 bottom-0">

                    </div>

                </div>
            </div>
        </div>

        <div class="container mt-36 mb-32">
            <div class="bg-gray-300 p-4 relative">
                <div class="bg-gray-400 p-4 relative">


                    <div class="bg-blue-400 p-4">

                    </div>

                    <div class="bg-blue-600 p-4 absolute inset-x-0 bottom-0">

                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container">
      <h1 class="bg-gray-300 text-gray-700 font-bold sticky top-16">Título 1</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio laboriosam voluptatem vero vitae amet aperiam, ratione necessitatibus iste iure accusamus maiores quisquam aspernatur libero ea ut tempora deserunt perferendis culpa?</p>
        <p>Amet necessitatibus at dolorem recusandae nam officia incidunt cum qui vel sint, sunt facilis laudantium quod veritatis ex corrupti consectetur facere totam delectus laborum ullam iusto illo repellendus. Eveniet, natus.</p>
        <p>Reiciendis dignissimos sed doloribus illum. Esse harum eum fugit molestiae nesciunt! Odio sapiente, at vero nisi, corrupti sit debitis omnis, asperiores consectetur officiis ab non culpa! Necessitatibus, tempore odio! Blanditiis.</p>
        <p>Ullam aspernatur esse dolore cum, nihil delectus in nesciunt quos voluptatem ratione numquam voluptas provident molestias quod, sit vel eos hic. Dolores nihil sunt officiis officia quibusdam sint, adipisci itaque.</p>
        <h1 class="bg-gray-300 text-gray-700 font-bold sticky top-16">Título 2</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, nisi perferendis. Doloremque quia nostrum, impedit aspernatur, eaque nisi aperiam voluptates modi, aliquam voluptas neque facilis commodi. Quis temporibus rem laudantium!</p>
        <p>Cupiditate accusamus odio voluptate unde dicta itaque, id tenetur. Quasi consequatur facere recusandae. Ad error voluptatibus vel iure vitae vero minus, iusto, non adipisci blanditiis nam ea nostrum consequatur sequi.</p>
        <p>Voluptas libero reiciendis illo? Culpa enim itaque eligendi ullam velit ad maxime, pariatur minima, odit dolore eius repudiandae doloribus earum ab id ipsam dolor recusandae temporibus at, quas quaerat officia!</p>
        <p>Sequi soluta debitis iure perferendis sapiente. Maxime odit ex autem sed minus, reiciendis nemo illum provident natus dignissimos quas veritatis harum ipsum iusto dolorum? Omnis numquam alias animi rem quas.</p>
        <h1 class="bg-gray-300 text-gray-700 font-bold sticky top-16">Título 3</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem porro vel accusantium ut distinctio quo aperiam aliquam deleniti dolor repudiandae aspernatur incidunt, accusamus deserunt ea? Nihil alias temporibus molestias corrupti!</p>
        <p>Corporis assumenda perspiciatis optio tempora ea laboriosam distinctio iusto ducimus temporibus cum delectus itaque dolorum, molestiae dolores ipsum velit in ut quasi tenetur consectetur pariatur qui! Consectetur soluta rerum maxime.</p>
        <p>Vero consectetur quia, magnam magni amet quo consequuntur architecto quas at incidunt maiores est minima? Culpa consequuntur quos quas aspernatur, deserunt temporibus laborum voluptates! Enim qui eaque ipsa rerum distinctio!</p>
        <p>Ea quidem excepturi ut doloribus sapiente? Aliquid, rerum reprehenderit. Doloribus, dolorem. Ducimus veniam qui assumenda maiores voluptate repudiandae, laudantium iste tenetur sint. Nostrum nobis commodi provident delectus voluptatum facere eligendi?</p>
        <p>Quas provident at, nostrum, mollitia commodi eligendi nisi, quibusdam sunt excepturi officia sequi fugit molestias. Est aut, sequi similique quaerat maxime nesciunt non. Consequuntur, sunt itaque illum laborum velit perspiciatis.</p>
        <p>Soluta fugiat sint, consequatur doloremque voluptatibus illo totam explicabo hic in nesciunt ratione nostrum est aspernatur. Mollitia eum incidunt corporis modi alias maiores unde nisi harum, quas quia aut laboriosam.</p>
        <p>Adipisci ut molestiae totam provident doloribus dolor, ratione obcaecati iure ullam dignissimos dolore rerum! Velit qui ducimus reiciendis non sit ratione unde aliquam labore, nihil harum nostrum, possimus accusamus totam.</p>
        <p>Modi nostrum impedit officia, culpa inventore corporis, nesciunt error tempore hic provident quo sint voluptas quibusdam tenetur corrupti molestiae sit, ut laborum natus? Nisi obcaecati quo distinctio totam, laborum deleniti!</p>
        <p>Ex veniam beatae earum voluptates! Repudiandae, nesciunt. In vero mollitia quos nulla rerum omnis et veritatis quae consequatur provident, officiis ea voluptate eligendi iusto aperiam nihil inventore itaque sunt dolor?</p>
        <p>Odit obcaecati laboriosam, incidunt vel magni velit! Natus mollitia omnis assumenda optio ipsa, explicabo maiores ex, iusto inventore cumque itaque nesciunt dolore deserunt quo veritatis. Suscipit repellendus facere praesentium quod.</p>
        <p>Ipsam dignissimos sapiente nesciunt labore nisi natus eligendi quae doloribus minima similique vitae excepturi modi blanditiis, expedita assumenda placeat laboriosam nulla. Hic ad quos tempora, repudiandae ratione voluptatem? Consequatur, porro?</p>
        <p>Sequi modi nobis dicta laborum vero, voluptatum obcaecati doloremque ea. Id eos cumque minus voluptate sequi quo, unde at voluptatem voluptatum odit, eveniet, iste vero nostrum labore earum deserunt architecto.</p>
        <p>Voluptatum temporibus et iure molestiae beatae est exercitationem odio in distinctio rem. Magnam, repellat amet nulla cupiditate voluptatum eius blanditiis, eligendi beatae ut placeat sit itaque ullam explicabo minus nam.</p>
        <p>Sapiente nam harum, esse temporibus dolor excepturi ex ratione laboriosam facilis rerum repellat amet itaque, tempore nobis et voluptatum veritatis optio velit vel placeat sed. Adipisci, officia? Enim, ut nulla.</p>
        <p>Minus explicabo ea pariatur quae culpa quam similique voluptatum blanditiis reiciendis iste? In quam minima rem dolorem ipsa rerum aut blanditiis? Molestias minus quae amet, tempore quasi quaerat at nam?</p>
        <p>Corporis corrupti provident a vel cupiditate neque debitis necessitatibus hic repellat? Ea nulla exercitationem consectetur deserunt fugit doloribus velit. Ducimus consequuntur neque aliquid tenetur atque perferendis maxime veniam blanditiis minus.</p>
        <p>Consectetur ab veniam asperiores nemo sed a inventore dicta laboriosam blanditiis voluptas neque dolorum, voluptates culpa quae fugiat odit perspiciatis, error dolores numquam mollitia perferendis voluptatibus cum doloremque! Itaque, doloremque!</p>
        <p>Obcaecati quidem eveniet sunt, nulla iste velit nostrum impedit qui cumque cupiditate, nam voluptates accusantium nemo minus consectetur? Nemo provident quibusdam atque quis earum amet nostrum ut. Eius, placeat similique!</p>
        <p>Odio, eligendi provident itaque veritatis atque ab molestiae excepturi accusantium. Nostrum sit sequi aut facere quasi doloribus dicta, corrupti provident. A deleniti numquam dolor animi consequuntur. Odit minima vero perferendis.</p>
        <p>Eligendi quaerat doloremque animi voluptate dicta ipsam aliquid ratione. Veritatis autem, laboriosam deserunt ex quidem voluptatem quisquam debitis rem? Excepturi rerum facilis eos molestias deleniti libero sapiente quam, perferendis atque?</p>
    </div>
</body>
</html>
