<script setup lang="ts">
import TaskForm from '@/components/todoapp/TaskForm.vue';
import TheNavigation from '@/components/todoapp/TheNavigation.vue';

type TaskType = {
    id: number,
    content: string,
    completed: number
}

// Zdefiniuj interfejs dla props
interface Props {

  tasks?: TaskType[]; 
}

const props = defineProps<Props>();
</script>

<template>
    <TheNavigation />
    <div>
        Say hello from todo komponent :))
        <a :href="route('home')">Welcome</a>
    </div>
    <TaskForm />
    <hr />
    <div></div>
    <ul>
        <li v-for="task in props.tasks">
            {{ task.id }}
            {{ task.content }}
            {{ task.completed }}
        </li>
    </ul>
</template>