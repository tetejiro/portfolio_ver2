<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import dayjs from 'dayjs';

import { reactive } from 'vue'
import { Head, router } from '@inertiajs/vue3';

let props = defineProps(['notices', 'errors'])

let form = reactive({
    content: null
})

let submit = () => {
    router.post(route('dashboard.store'), form);
}

</script>

<template>
    <Head title="Announce" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Announce</h2>
        </template>

        <form @submit.prevent="submit">
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">

                            <!-- フラッシュメッセージ -->
                            <div v-if="$page.props.flash.message"
                                class="text-center w-5/12 mx-auto py-1 rounded-md"
                                :class="{'bg-emerald-200': $page.props.flash.status == 'OK',
                                        'bg-red-500': $page.props.flash.status == 'NG'}">
                                {{ $page.props.flash.message }}
                            </div>
                            <!-- フラッシュメッセージ -->
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
                                    <div class="relative mb-4">
                                        <label class="leading-7 text-sm text-gray-600">Message</label>

                                        <!-- エラーメッセージ -->
                                        <div class="text-red-600" v-if="props.errors.content">
                                            {{ props.errors.content }}
                                        </div>
                                        <!-- エラーメッセージ -->

                                        <textarea name="content" v-model="form.content" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                                    </div>
                                    <button class="text-white bg-emerald-400 border-0 py-2 px-6 focus:outline-none hover:bg-emerald-300 rounded text-lg">登録</button>
                                </div>
                                <!-- 右側 -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </AuthenticatedLayout>
</template>
