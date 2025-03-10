<script setup lang="ts">
import { useForm } from '@inertiajs/vue3';

const form = useForm({
    content: ''
})

function handleSubmit(){
    form.post(
        route('store'),
        { 
            preserveScroll: true,
            onSuccess: () => {
                form.reset('content')
            }
        }
    )
}
</script>

<template>
    <div>Task Form</div>
    <form  
        @submit.prevent="handleSubmit"
    >
        @csrf
        <div>
            <label>
                Text:
                <input 
                    type="text" 
                    placeholder="Enter a to-do item" 
                    v-model="form.content"
                    required 
                />
            </label>
        </div>
        <button type="submit" class="text-green-700 button-submit">Add</button>
    </form>
</template>

<style lang="scss" scoped>
.button-submit {
    border: 2px solid black;
    background-color: yellowgreen;
    padding: .2rem 1rem;
    font-weight: bolder;
}
</style>