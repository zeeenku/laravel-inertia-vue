<template>
    <div class="welcome-container">
        <h1 class="title">{{ title }}</h1>
        <p class="subtitle">
            Enjoy the power of modern full-stack development with Laravel, Vue 3, and Inertia.js.
        </p>
        <div class="detail-line">
            <p>Check out more Laravel tutorials at  
                <a href="https://wpwebinfotech.com/" target="_blank" class="detail-link">WpWeb Infotech</a>.
            </p>
        </div>
        <footer class="footer">
            <p class="footer-text">
                &copy; {{ currentYear }}  
                <a href="https://wpwebinfotech.com/" target="_blank" class="footer-link">WpWeb Infotech</a>. All rights reserved.
            </p>
        </footer>
    </div>
</template>
<script setup>
import {ref, computed} from "vue";
const currentYear = ref(new Date().getFullYear());
const props = defineProps(["title"]);
const title = computed(()=>props.title);
</script>
<style scoped>
/* Add your styles here */
</style>