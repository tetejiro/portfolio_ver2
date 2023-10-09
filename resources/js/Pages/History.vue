<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
let props = defineProps(['recs', 'user']);
</script>

<template>
  <AuthenticatedLayout>

    <!-- ヘッダー -->
    <template #header>
      <header class="text-gray-600 body-font">
        <div class="container mx-auto flex flex-wrap flex-col md:flex-row items-center">
          <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">History</h2>
          </a>
        </div>
      </header>
    </template>
    <!-- ヘッダー -->



    <!-- 中身 -->
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 text-gray-900">
            <section class="text-gray-600 body-font">
              <div class="container px-5 pb-8 mx-auto">
                <section class="text-gray-600 body-font">
                  <div class="container px-5 mx-auto">


                    <!-- ヘッダー -->
                    <div class="flex items-center justify-evenly text-center w-full mb-4">
                      <h1 class="text-md font-medium text-gray-900 mt-10 w-auto">報連相の履歴</h1>
                    </div>
                    <!-- ヘッダー -->


                    <div class="lg:w-2/3 w-full mx-auto overflow-auto">
                      <table class="table-auto w-full text-left whitespace-no-wrap mt-4" v-for="rec in props.recs" :key="rec.id">

                        <!-- 分類：質問 -->
                        <div v-show="rec.is_question" class="w-full">
                          <tr>
                            <th class="w-44 px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl">分類</th>
                            <td class="w-9/12 border-solid border border-gray-200 px-4 py-3">質問</td>
                          </tr>
                          <tr>
                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl">質問 相手</th>
                              <div v-for="user in props.user" :key="user" class="w-full h-full">
                                <div v-if="rec.target_user_id == user.id" class="w-full h-full border-solid border-r border-l border-gray-200 px-4 py-3">
                                  {{ user.name }}
                                </div>
                              </div>
                          </tr>
                          <tr>
                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">件名</th>
                            <td class="border-solid border border-gray-200 px-4 py-3">{{ rec.title }}</td>
                          </tr>
                          <tr>
                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">依頼したこと</th>
                            <td class="border-solid border border-gray-200 px-4 py-3">{{ rec.request_for }}</td>
                          </tr>
                          <tr>
                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">詳細</th>
                            <td class="border-solid border border-gray-200 px-4 py-3">{{ rec.detail }}</td>
                          </tr>
                          <tr>
                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">考えられる原因</th>
                            <td class="border-solid border border-gray-200 px-4 py-3">{{ rec.cause }}</td>
                          </tr>
                          <tr>
                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-bl">試してみたこと・その他</th>
                            <td class="border-solid border border-gray-200 px-4 py-3">{{ rec.other }}</td>
                          </tr>
                        </div>
                        <!-- 分類：質問 -->


                        <!-- 分類：報連相 -->
                        <div v-show="!rec.is_question" class="w-full">
                          <tr>
                            <th class="w-44 px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl">分類</th>
                            <td class="w-9/12 border-solid border border-gray-200 px-4 py-3">報告・連絡・相談</td>
                          </tr>
                          <tr>
                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl">報連相 相手</th>
                              <div v-for="user in props.user" :key="user" class="w-full h-full">
                                <div v-if="rec.target_user_id == user.id" class="w-full h-full border-solid border-r border-l border-gray-200 px-4 py-3">
                                  {{ user.name }}
                                </div>
                              </div>
                          </tr>
                          <tr>
                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">件名</th>
                            <td class="border-solid border border-gray-200 px-4 py-3">{{ rec.title }}</td>
                          </tr>
                          <tr>
                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">詳細</th>
                            <td class="border-solid border border-gray-200 px-4 py-3">{{ rec.detail }}</td>
                          </tr>
                          <tr>
                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">その他</th>
                            <td class="border-solid border border-gray-200 px-4 py-3">{{ rec.other }}</td>
                          </tr>
                        </div>
                        <!-- 分類：報連相 -->

                      </table>
                    </div>


                  </div>
                </section>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
    <!-- 中身 -->


  </AuthenticatedLayout>
</template>