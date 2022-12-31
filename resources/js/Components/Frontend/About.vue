<template>
    <section id="about" class="section bg-light-secondary dark:bg-dark-secondary">
        <div
            class="container mx-auto"
            v-motion
            :initial="{
            opacity: 0,
            y: 100,
            }"
            :visible="{
            opacity: 1,
            y: 0,
            }"
        >
            <div class="flex flex-col xl:flex-row gap-24">
                <img
                class="object-cover h-80 w-[566px] md:mx-auto lg:mx-0 rounded-2xl"
                src="/img/hero2.jpeg"
                alt="about"
                />
                <div
                    class="
                    flex flex-col
                    items-center
                    text-center
                    lg:items-start lg:text-left
                    "
                >
                    <div class="flex flex-col">
                        <h2 class="text-3xl lg:text-4xl font-medium lg:font-extrabold mb-3">
                            About Me
                        </h2>
                        <P class="mb-2 text-accent">Junior of Software Engineering</P>
                            <hr class="mb-8 opacity-90 dark:opacity-5" />
                        <p class="mb-4">
                            Hello, my name is M Naufal Badruttamam, I come from Surabaya, Indonesia. I learned programming in early September 2021, I'm a junior in programming, especially in 
                            the field of Software Engineer and Backend Developer. <br />
                            <br />
                            “Stay away from those people who try to disparage your ambitions. Small minds will always do that, 
                            but great minds will give you a feeling that you can become great too.” — Mark Twain
                            <br /> <br />
                            
                        </p>
                    </div>
                    
                    <a href="#contact" class="btn btn-md bg-accent text-light-tail-100">
                    Contact me
                    </a>
                </div>
            </div>
        </div>
    </section>
</template>