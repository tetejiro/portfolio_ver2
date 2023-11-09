<script setup>
let props = defineProps(['form'])
</script>

<template>
    <div class="flex flex-col w-3/5 mx-auto">

        <!-- task content -->
        <h1 class="text-md font-medium mb-4 text-gray-900 mt-10">今はなにをしていますか？</h1>
        <div class="min-h-[125px] break-words whitespace-pre-wrap bg-gray-100 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out">
            {{ props.form.task_content }}
        </div>
        <!-- task content -->

        <div class="flex">
            <div class="w-1/2">
                <h1 class="text-md font-medium mb-4 text-gray-900 mt-10">開始時間</h1>
                <div>{{ props.form.task_start }}</div>
            </div>
            <div class="w-1/2">
                <h1 class="text-md font-medium mb-4 text-gray-900 mt-10">完了時間</h1>
                <div>{{ props.form.task_end }}</div>
            </div>
        </div>
    </div>
</template>