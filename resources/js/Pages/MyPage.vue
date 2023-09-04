<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Task from '@/Pages/Section/Task.vue'
import Schedule from '@/Pages/Section/Schedule.vue'
import Available from '@/Pages/Section/Available.vue';
import Strong from '@/Pages/Section/Strong.vue'
import Record from '@/Pages/Section/Record.vue';

import { Head } from '@inertiajs/inertia-vue3';
import { ref } from 'vue'


let activeNum = ref(1)
let actives = [
    "sm:px-6", "py-3", "w-1/2", "sm:w-auto", "justify-center", "sm:justify-start","border-b-2",
    "title-font", "font-medium", "inline-flex", "items-center", "leading-none","tracking-wider",
    "bg-gray-100", "border-indigo-500", "text-indigo-500", "rounded-t", "activeMark"
]
let inactive = [
    "sm:px-6", "py-3", "w-1/2", "sm:w-auto", "justify-center", "sm:justify-start", "border-b-2",
    "title-font", "font-medium", "inline-flex", "items-center", "leading-none", "tracking-wider",
    "border-gray-200", "hover:text-gray-900"
]

const toActive = (e, num) => {
    let activeMark = document.getElementsByClassName('activeMark')[0]
    activeMark.classList.remove(...actives)
    activeMark.classList.add(...inactive)

    e.target.classList.remove(...inactive)
    e.target.classList.add(...actives)

    activeNum.value = num
}


</script>

<template>
    <Head title="MyPage" />

    <AuthenticatedLayout>

        <!-- ヘッダー -->
        <template #header>
            <header class="text-gray-600 body-font">
                <div class="container mx-auto flex flex-wrap flex-col md:flex-row items-center">
                    <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">MyPage</h2>
                    </a>
                    <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                    <a class="mr-5 hover:text-gray-900">更新</a>
                    <a class="mr-5 hover:text-gray-900">質問リスト</a>
                    <a class="mr-5 hover:text-gray-900">メンバーリスト</a>
                    </nav>
                </div>
            </header>
        </template>
        <!-- ヘッダー -->

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <section class="text-gray-600 body-font">
                            <div class="container px-5 py-3 mx-auto flex flex-wrap flex-col">


                                <!-- タブ -->
                                <div class="flex mx-auto flex-wrap">
                                    <div @click="toActive($event, 1)" :class="actives">
                                        <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                        </svg>Task
                                    </div>
                                    <div @click="toActive($event, 2)" :class="inactive">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5 mr-3" viewBox="0 0 24 24">
                                        <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                                        </svg>Schedule
                                    </div>
                                    <div @click="toActive($event, 3)" :class="inactive">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5 mr-3" viewBox="0 0 24 24">
                                        <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                                        </svg>Available time
                                    </div>
                                    <div @click="toActive($event, 4)" :class="inactive">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5 mr-3" viewBox="0 0 24 24">
                                        <circle cx="12" cy="5" r="3"></circle>
                                        <path d="M12 22V8M5 12H2a10 10 0 0020 0h-3"></path>
                                        </svg>Strong
                                    </div>
                                    <div @click="toActive($event, 5)" :class="inactive">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5 mr-3" viewBox="0 0 24 24">
                                        <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                        </svg>Record
                                    </div>
                                </div>
                                <!-- タブ -->


                                <!-- タブの中身 -->
                                <Task v-if="activeNum == 1"></Task>
                                <Schedule v-if="activeNum == 2"></Schedule>
                                <Available v-if="activeNum == 3"></Available>
                                <Strong v-if="activeNum == 4"></Strong>
                                <Record v-if="activeNum == 5"></Record>
                                <!-- タブの中身 -->


                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
