<script setup>
import { Datetimepicker, Input, initTE } from "tw-elements";
import { onMounted } from 'vue'


onMounted(() => {
    initTE({ Datetimepicker, Input });

    const pickerTimeOptions_start = document.querySelector('#datetimepicker-timeOptions-start');
    const pickerTimeOptions_end = document.querySelector('#datetimepicker-timeOptions-end');

    new Datetimepicker(
        pickerTimeOptions_start, {
            timepicker: { format24: true },
        }
    );

    new Datetimepicker(
        pickerTimeOptions_end, {
            timepicker: { format24: true },
        }
    );
});

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

        <h1 class="text-md font-medium mb-4 text-gray-900 mt-10">どれくらいかかりそうですか？</h1>
        <div class="flex">
            <!-- task start -->
            <div
                class="relative mb-3"
                data-te-input-wrapper-init
                id="datetimepicker-timeOptions-start">
                <input
                    name="task-start"
                    v-model="props.form.task_start"
                    type="text"
                    class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                    id="task-start" />
                <label
                    for="task-start"
                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                    >Select a time
                </label>
            </div>
            <!-- task start -->

            <div class="text-md font-medium mb-4 text-gray-900 mx-2">～</div>

            <!-- task end -->
            <div
                class="relative mb-3"
                data-te-input-wrapper-init
                id="datetimepicker-timeOptions-end">
                <input
                    name="task-end"
                    v-model="props.form.task_end"
                    type="text"
                    class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                    id="task-end" />
                <label
                    for="task-end"
                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                >
                </label>
            </div>
            <!-- task end -->
        </div>
    </div>
</template>