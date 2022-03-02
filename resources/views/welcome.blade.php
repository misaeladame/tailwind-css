<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind</title>
    <link rel="stylesheet" href="{{url(mix('css/app.css'))}}">
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
    </div>
</body>
</html>
