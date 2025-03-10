<script setup lang="ts">
import { Link } from '@inertiajs/vue3';

</script>

<template>
    <nav>
        <div>Navigation</div>
        <ul class="navList">
            <li>
                <Link :href="route('home')">Home</Link>
            </li>
            <li>
                <Link :href="route('dashboard')">Dashboard</Link>
            </li>
            <li>
                <Link :href="route('todoapp')">TodoList</Link>
            </li>
        </ul>
    </nav>
</template>

<style lang="scss" scope>
.navList {
    list-style: square;
    color: blueviolet;
    
    li {
        margin-left: 2rem;
        display: list-item;
    }
}
</style>