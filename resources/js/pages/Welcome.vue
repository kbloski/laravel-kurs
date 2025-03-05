<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>
    <div>
        <Link :href="route('todoapp')">TodoApp</Link>
    </div>
</template>