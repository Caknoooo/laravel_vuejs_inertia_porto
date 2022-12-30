<script setup>

import { Head, Link } from '@inertiajs/inertia-vue3';
import FrontendLayout from "@/Layouts/Frontend.vue";
import Hero from '@/Components/Frontend/Hero.vue'
import Promote from '@/Components/Frontend/Promote.vue';
import About from '@/Components/Frontend/About.vue';
import Skills from '@/Components/Frontend/Skills.vue';

defineProps({
    skills: Object,
});
</script>

<template>

    <Head title="Welcome to portofolio" />
    <FrontendLayout>
        <!-- Hero Primary -->
        <Hero />

        <!-- Promote -->
        <Promote />

        <!-- About -->
        <About />

        <!-- Skill -->
        <Skills :skills="skills" />
    </FrontendLayout>

</template>
