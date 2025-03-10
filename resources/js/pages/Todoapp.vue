<script setup lang="ts">
import TaskForm from '@/components/todoapp/TaskForm.vue';
import TheNavigation from '@/components/todoapp/TheNavigation.vue';
import { router, useForm } from '@inertiajs/vue3';

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

function handleDelete( id : number){
    router.delete(route('destroy', { task: id}), {
        preserveScroll: true,
        onSuccess: () => {
            console.log('Usunięto rekord')
        }
    })
}

const formData = useForm({
    id: 0,
    content: ''
})
function handleUpdate(){
    formData.put(
        route('todoapp.update', 
        {task: formData.id}), {
        preserveScroll: true,
        onSuccess(){
            console.log('Update succeed')
        }
    })
}
</script>

<template>
    <TheNavigation />
    <div>
        Say hello from todo komponent :))
        <a :href="route('home')">Welcome</a>
    </div>
    <TaskForm />
    <hr />
    <div>Update task with id</div>
    <form @submit.prevent="handleUpdate">
        <div>
            ID: <input type="number" v-model="formData.id" />
        </div>
        <div>
            <input type="text" required  v-model="formData.content" placeholder="*Wartość pierwszego taska"/>
        </div>
        <button type="submit">Zaktualizuj rekord</button>
    </form>
    <hr />
    <ul>
        <li v-for="task in props.tasks">
            {{ task.id }}
            {{ task.content }}
            {{ task.completed }}
            <button @click="() => handleDelete(task.id)">Delete</button>
        </li>
    </ul>
</template>