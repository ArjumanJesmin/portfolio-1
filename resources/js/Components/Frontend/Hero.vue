<script setup>

</script>
<template>
<section id="home" class="flex items-center bg-light-primary dark:bg-dark-primary py-32 lg:py-0 overflow-hidden">
<div class="container mx-auto h-full pt-20"
v-motion
:initial="{
    opacity:0,
    y: 100,
}"
:visible="{
    opacity:1,
    y:0,
}">
    <div class="flex flex-col md:flex-row items-center h-full pt-8">
        <div class="flex flex-1 flex-col items-center lg:items-start">
            <p class="text-lg text-accent text-md mb-[22px]"> Hey, I'm Arjuman!</p>

            <h1 class="text-4xl leading-[44px] md:leading-light lg:text-7xl lg:leading-[1.2] font-bold md:tracking-[-2px]">
                I Build & Design <br/> Web Interfaces.  
            </h1>
            <p class="pt-4 pb-8 md:pt-6 md:pb-12 max-w-[480px] text-lg text-center lg:text-left">
                This web is Imaging Design & update version. It's a wonderful light & dark color.
            </p>
            <Button class="btn btn-md bg-accent hover:bg-light-secondary hover:text-light-tail-500
            dark:hover:bg-dark-secondary dark:hover:text-dark-navy-100 md:btn-lg transition-all">
                Work with me
            </Button>

            <div class="pt-12">
                <h5 class="text-lg flex items-center justify-center lg:justify-start text-black dark:text-white mb-2">
                    Follow me on
                </h5>
                <div class="flex items-center mb-6">
                    <!-- Anchor tag link-1 -->
                    <a class="w-10 h-10 rounded-full flex items-center justify-center border border-white text-black dark:text-white  hover:bg-dark-secondary dark:hover:bg-dark-secondary
                    hover:border-light-secondary dark:hover:border-secondary mr-3 sm:mr-4" href="">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" className="w-5 h-5">
  <path fillRule="evenodd" d="M9.664 1.319a.75.75 0 01.672 0 41.059 41.059 0 018.198 5.424.75.75 0 01-.254 1.285 31.372 31.372 0 00-7.86 3.83.75.75 0 01-.84 0 31.508 31.508 0 00-2.08-1.287V9.394c0-.244.116-.463.302-.592a35.504 35.504 0 013.305-2.033.75.75 0 00-.714-1.319 37 37 0 00-3.446 2.12A2.216 2.216 0 006 9.393v.38a31.293 31.293 0 00-4.28-1.746.75.75 0 01-.254-1.285 41.059 41.059 0 018.198-5.424zM6 11.459a29.848 29.848 0 00-2.455-1.158 41.029 41.029 0 00-.39 3.114.75.75 0 00.419.74c.528.256 1.046.53 1.554.82-.21.324-.455.63-.739.914a.75.75 0 101.06 1.06c.37-.369.69-.77.96-1.193a26.61 26.61 0 013.095 2.348.75.75 0 00.992 0 26.547 26.547 0 015.93-3.95.75.75 0 00.42-.739 41.053 41.053 0 00-.39-3.114 29.925 29.925 0 00-5.199 2.801 2.25 2.25 0 01-2.514 0c-.41-.275-.826-.541-1.25-.797a6.985 6.985 0 01-1.084 3.45 26.503 26.503 0 00-1.281-.78A5.487 5.487 0 006 12v-.54z" clipRule="evenodd" />
</svg>
                    </a>
                        <!-- Anchor tag link-2 -->
                        <a class="w-10 h-10 rounded-full flex items-center justify-center border border-white text-black dark:text-white  hover:bg-dark-secondary dark:hover:bg-dark-secondary
                    hover:border-light-secondary dark:hover:border-secondary mr-3 sm:mr-4" href="">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" className="w-5 h-5">
  <path fillRule="evenodd" d="M5.404 14.596A6.5 6.5 0 1116.5 10a1.25 1.25 0 01-2.5 0 4 4 0 10-.571 2.06A2.75 2.75 0 0018 10a8 8 0 10-2.343 5.657.75.75 0 00-1.06-1.06 6.5 6.5 0 01-9.193 0zM10 7.5a2.5 2.5 0 100 5 2.5 2.5 0 000-5z" clipRule="evenodd" />
</svg>
                  </a>
                  <!-- Anchor tag link-3 -->
                    <a class="w-10 h-10 rounded-full flex items-center justify-center border border-white text-black dark:text-white  hover:bg-dark-secondary dark:hover:bg-dark-secondary
                    hover:border-light-secondary dark:hover:border-secondary mr-3 sm:mr-4" href="">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" className="w-5 h-5">
  <path d="M3.28 2.22a.75.75 0 00-1.06 1.06L5.44 6.5H2.75a.75.75 0 000 1.5h4.5A.75.75 0 008 7.25v-4.5a.75.75 0 00-1.5 0v2.69L3.28 2.22zM13.5 2.75a.75.75 0 00-1.5 0v4.5c0 .414.336.75.75.75h4.5a.75.75 0 000-1.5h-2.69l3.22-3.22a.75.75 0 00-1.06-1.06L13.5 5.44V2.75zM3.28 17.78l3.22-3.22v2.69a.75.75 0 001.5 0v-4.5a.75.75 0 00-.75-.75h-4.5a.75.75 0 000 1.5h2.69l-3.22 3.22a.75.75 0 101.06 1.06zM13.5 14.56l3.22 3.22a.75.75 0 101.06-1.06l-3.22-3.22h2.69a.75.75 0 000-1.5h-4.5a.75.75 0 00-.75.75v4.5a.75.75 0 001.5 0v-2.69z" />
</svg>
                  </a>
                </div>
            </div>
        </div>
        <div class="flex flex-1 justify-end items-center  h-full mt-8 md:mt-0 ">
            <img class="rounded-lg" src="http://localhost/portfolio-1./public/img/hero.jpg" alt="Hero" />
        </div>
    </div>
</div>
</section>
</template>