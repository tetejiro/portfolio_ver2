<script setup>
import { Input } from "tw-elements";

let props = defineProps(['form'])
</script>

<template>
    <div class="flex flex-col w-3/5 mx-auto">

        <!-- task content -->
        <h1 class="text-md font-medium mb-4 text-gray-900 mt-10">今はなにをしていますか？</h1>
        <textarea
            name="task_content"
            v-model="props.form.task_content"
            class="bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out">
        </textarea>
        <!-- task content -->

        <h1 class="text-md font-medium mb-4 text-gray-900 mt-10">開始flg</h1>
    </div>
</template>