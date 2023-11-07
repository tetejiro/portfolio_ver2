<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Task from '@/Pages/Section-Show/Task.vue'
import Schedule from '@/Pages/Section-Show/Schedule.vue'
import Available from '@/Pages/Section-Show/Available.vue';
import Strong from '@/Pages/Section-Show/Strong.vue'
import Record from '@/Pages/Section-Show/Record.vue';

import { Head, router, Link } from '@inertiajs/vue3';
import { ref, reactive } from 'vue'


/**
 * タブメニューのアクティブ・非アクティブの切り替え
 */
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


/**
 * データ管理・フォーム送信
 */
let props = defineProps(['user', 'rec'])

let latest_rec = props.rec != null ? props.rec[0] : null

let form = reactive({
    task_content: latest_rec == null ? null : latest_rec.task_content,
    task_start: latest_rec == null ? null : latest_rec.task_start.slice(0, -3),
    task_end: latest_rec == null ? null : latest_rec.task_end == null ? null : latest_rec.task_end.slice(0, -3),
    schedule_status: latest_rec == null ? null : latest_rec.schedule_status,
    available_start: latest_rec == null ? null : latest_rec.available_start,
    available_end: latest_rec == null ? null : latest_rec.available_end,
    caution: latest_rec == null ? null : latest_rec.caution,
    strong_point_1: latest_rec == null ? null : latest_rec.strong_point_1,
    strong_point_2: latest_rec == null ? null : latest_rec.strong_point_2 == null ? null : latest_rec.strong_point_2,
    strong_point_3: latest_rec == null ? null : latest_rec.strong_point_3 == null ? null : latest_rec.strong_point_3
})

// 自分のページのときに見せるボタン(このレコードを編集する)
let modifyRec = () => {
    router.get(route('MyPage.edit', props.rec[0]['id']));
}

// 自分のページのときに見せるボタン(新規作成)
let addRec = () => {
    router.get(route('MyPage.create'), { id: props.user[0].id, name: props.user[0].name })
}

// 他の人のページのときに見せるボタン(報連相する)
let toHorensoPage = () => {
    router.get(route('horenso', props.user[0].id))
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
                    <h2 v-if="$page.props.auth.user.id == props.user[0].id" class="font-semibold text-xl text-gray-800 leading-tight">MyPage</h2>
                    <h2 v-else>{{ props.user[0].name }} さんのページ</h2>
                    </a>
                    <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                        <div v-if="$page.props.auth.user.id == props.user[0].id" class="flex mr-5 hover:text-gray-900">
                            <div @click="modifyRec" class="cursor-grabbing mr-5">このレコードを編集する</div>
                            <div @click="addRec" class="cursor-grabbing mr-5">新規作成</div>
                        </div>
                        <div v-else><Link as="button" @click="toHorensoPage">報連相する</Link></div>
                    </nav>
                </div>
            </header>
        </template>
        <!-- ヘッダー -->


        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div v-if="$page.props.flash.message" class="text-center bg-emerald-200 w-5/12 mx-auto py-1 rounded-md">
                            {{ $page.props.flash.message }}
                        </div>
                        <section class="text-gray-600 body-font">
                            <div class="container px-5 py-3 mx-auto flex flex-wrap flex-col">


                                <!-- タブ -->
                                <div class="flex mx-auto flex-wrap">
                                    <div @click="toActive($event, 1)" :class="actives" class="cursor-grabbing">
                                        <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-3 pointer-events-none">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                                        </svg>Task
                                    </div>
                                    <div @click="toActive($event, 2)" :class="inactive" class="cursor-grabbing">
                                        <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-3 pointer-events-none">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.362 5.214A8.252 8.252 0 0112 21 8.25 8.25 0 016.038 7.048 8.287 8.287 0 009 9.6a8.983 8.983 0 013.361-6.867 8.21 8.21 0 003 2.48z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 18a3.75 3.75 0 00.495-7.467 5.99 5.99 0 00-1.925 3.546 5.974 5.974 0 01-2.133-1A3.75 3.75 0 0012 18z" />
                                        </svg>Schedule
                                    </div>
                                    <div @click="toActive($event, 3)" :class="inactive" class="cursor-grabbing">
                                        <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-3 pointer-events-none">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5V6.75a4.5 4.5 0 119 0v3.75M3.75 21.75h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H3.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                                        </svg>Available time
                                    </div>
                                    <div @click="toActive($event, 4)" :class="inactive" class="cursor-grabbing">
                                        <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-3 pointer-events-none">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z" />
                                        </svg>Strong
                                    </div>
                                    <div @click="toActive($event, 5)" :class="inactive" class="cursor-grabbing">
                                        <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-3 pointer-events-none">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                        </svg>Record
                                    </div>
                                </div>
                                <!-- タブ -->


                                <!-- タブの中身 -->
                                <KeepAlive>
                                    <Task v-show="activeNum == 1" :form="form"></Task>
                                </KeepAlive>
                                <KeepAlive>
                                    <Schedule v-show="activeNum == 2" :form="form"></Schedule>
                                </KeepAlive>
                                <KeepAlive>
                                    <Available v-show="activeNum == 3" :form="form"></Available>
                                </KeepAlive>
                                <KeepAlive>
                                    <Strong v-show="activeNum == 4" :form="form"></Strong>
                                </KeepAlive>
                                <KeepAlive>
                                    <Record v-show="activeNum == 5" :rec="props.rec" :myId="props.user[0].id" :authUser="$page.props.auth.user.id"></Record>
                                </KeepAlive>
                                <!-- タブの中身 -->


                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>