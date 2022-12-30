<script setup>

import { Head, Link } from '@inertiajs/inertia-vue3';
import FrontendLayout from "@/Layouts/Frontend.vue";
import Hero from '@/Components/Frontend/Hero.vue'
import Promote from '@/Components/Frontend/Promote.vue';
import About from '@/Components/Frontend/About.vue';
import Skills from '@/Components/Frontend/Skills.vue';
import Portofolio from '@/Components/Frontend/Portofolio.vue';
import Services from '@/Components/Frontend/Services.vue';
import ContactMe from '@/Components/Frontend/ContactMe.vue';

defineProps({
    skills: Object,
    projects: Object
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

        <!-- Portofolio -->
        <Portofolio :skills="skills" :projects="projects" />

        <!-- Services -->
        <Services />

        <!-- Contact -->
        <ContactMe />
    </FrontendLayout>

</template>
