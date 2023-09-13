<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import dayjs from 'dayjs';
import { Head } from '@inertiajs/vue3';

let props = defineProps(['notices'])

</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div class="container px-5 py-8 mx-auto flex h-96">


                            <!-- 左側 -->
                            <div class="overflow-auto hover:overflow-scroll lg:w-5/12 md:w-1/2 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 drop-shadow-xl">
                                <ul>
                                    <div v-for="(notice, idx) in props.notices" :key="idx" class="py-2">
                                        <li>{{ notice.content }}</li>
                                        <div>{{ dayjs(notice.created_at).format('YYYY-MM-DD HH:MM') }}</div>
                                    </div>
                                </ul>
                            </div>
                            <!-- 左側 -->


                            <!-- 右側 -->
                            <div class="lg:w-5/12 md:w-1/2 bg-neutral-50 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 drop-shadow-xl">
                                <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">お知らせ</h2>
                                <!-- <p class="leading-relaxed mb-5 text-gray-600">Post-ironic portland shabby chic echo park, banjo fashion axe</p> -->
                                <div class="relative mb-4">
                                    <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                                    <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                                </div>
                                <button class="text-white bg-emerald-400 border-0 py-2 px-6 focus:outline-none hover:bg-emerald-300 rounded text-lg">登録</button>
                                <!-- <p class="text-xs text-gray-500 mt-3">Chicharrones blog helvetica normcore iceland tousled brook viral artisan.</p> -->
                            </div>
                            <!-- 右側 -->


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
