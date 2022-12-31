<script setup>

import Projects from "./Projects.vue";

defineProps({
    skills: Object,
    projects: Object,
});

</script>

<template>
    <section
        id="portfolio"
        class="section bg-light-primary dark:bg-dark-primary min-h-[1400px]"
    >
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
            <div class="flex flex-col items-center text-center">
                <h2 class="section-title">My Projects</h2>
                <p class="subtitle">
                    Here are some of the projects I've made since September 2021
                </p>
            </div>
        </div>
        <Projects :skills="skills" :projects="projects" />
    </section>
</template>