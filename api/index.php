<?php

require_once "_components/avatar.php";

$profile_img = "https://github.com/Tamicktom.png";

$message = "Hello World!";
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://unpkg.com/htmx.org@2.0.4"></script>
  <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
  <title>Portifolio - PHP</title>
</head>

<body>
  <section class="flex flex-col items-center justify-center w-full text-white bg-slate-900 min-h-svh">
    <div class="flex flex-col items-center justify-center w-full">
      <?= avatar($profile_img, "Tamicktom") ?>
    </div>
    <p>Hello World! Meu nome é <span class="font-bold text-rose-500">Tamicktom</span> e sou</p>
    <h1 class="text-4xl font-bold">Desenvolvedor Full-Stack</h1>
    <p class="w-full max-w-5xl text-center text-white/80">Transformo necessidades em aplicações reais, evolventes e funcionais. Desenvolvo sistemas através da <br /> minha paixão pela tecnologia, contribuindo com soluções inovadoras e eficazes para desafios complexos.</p>
    <div class="flex flex-row items-center justify-center gap-4 font-bold">
      <span class="px-2 py-1 rounded-lg bg-emerald-600 text-emerald-100">Github</span>
      <span class="px-2 py-1 text-purple-100 bg-purple-600 rounded-lg">PHP</span>
      <span class="px-2 py-1 rounded-lg bg-sky-600 text-sky-100">CSS</span>
      <span class="px-2 py-1 rounded-lg bg-rose-600 text-rose-100">HTML</span>
      <span class="px-2 py-1 rounded-lg bg-amber-600 text-amber-100">Javascript</span>
    </div>
  </section>

  <section class="flex flex-col items-center justify-center w-full text-white bg-slate-900 min-h-svh">
    <h2>Meu trabalho</h2>
    <span>Veja os projetos em destaque</span>
  </section>

  <section class="flex flex-col items-center justify-center w-full text-white bg-slate-900 min-h-svh">
    <h2>Contato</h2>
    <span>Gostou do meu trabalho?</span>
    <span>Entre em contato ou acompanhe as minhas redes sociais.</span>
    <div class="flex flex-col items-center justify-center w-full">
      <a href="#">Linkedin</a>
      <a href="#">Github</a>
      <a href="#">Twitter</a>
    </div>
  </section>
</body>

</html>