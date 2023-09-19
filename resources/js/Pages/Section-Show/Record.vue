<script setup>
import { Link, router } from '@inertiajs/vue3'
import dayjs from 'dayjs'

let props = defineProps(['rec', 'myId', 'authUser'])
let recs = props.rec

console.log(props.myId + '?' + props.authUser)

function calcTimeGap(start, end) {
  let timeGap = new Date(end) - new Date(start)
  let days = 0
  let hours = 0
  let mins = 0
  if(timeGap / 1000 / 60 / 60 / 24 > 0) {
    days = Math.floor(timeGap / 1000 / 60 / 60 / 24)
  }
  if(timeGap / 1000 / 60 / 60 > 0) {
    hours = Math.floor((timeGap - (days * (1000 * 60 * 60 * 24))) / 1000 / 60 / 60)
  }
  if(timeGap / 1000 % 60 > 0) {
    mins = (timeGap - ((days * (1000 * 60 * 60 * 24)) + (hours * 1000 * 60 * 60))) / 1000 / 60
  }
  return days + ' 日 ' + hours + ' 時間 ' + mins + ' 分'
}

let toDeleteAction = id => {
  router.delete(route('MyPage.destroy', id))
}

</script>

<template>
  <div class="w-3/5 mx-auto overflow-auto">
      <p class="text-center font-medium text-gray-900 mx-auto mt-10 mb-4">おしごと記録</p>

      <!-- TODO: 降順に並べ替え -->
      <table v-for="rec in recs" :key="rec.id" class="mb-3 table-auto w-full text-left whitespace-no-wrap">
          <tr>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl">記録時間</th>
            <td class="px-4 py-3 border-solid border-solid border">{{ dayjs(rec.created_at).format('YYYY-MM-DD HH:MM') }}</td>
          </tr>
          <tr>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">内容</th>
            <td class="px-4 py-3 border-solid border-solid border">{{ rec.task_content }}</td>
          </tr>
          <tr>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">開始時間</th>
            <td class="px-4 py-3 border-solid border-solid border">{{ dayjs(rec.task_start).format('YYYY-MM-DD HH:MM') }}</td>
          </tr>
          <tr v-if="rec.task_end != null">
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">終了時間</th>
            <td class="px-4 py-3 border-solid border-solid border">{{ dayjs(rec.task_end).format('YYYY-MM-DD HH:MM') }}</td>
          </tr>
          <tr v-if="rec.task_end != null">
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">所要時間</th>
            <td class="px-4 py-3 border-solid border-solid border">{{ calcTimeGap(rec.task_start, rec.task_end) }}</td>
          </tr>
          <tr>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-bl">当時の気分</th>
            <td class="px-4 py-3 border border-solid" v-if="rec.schedule_status == 1">手伝ってほしい</td>
            <td class="px-4 py-3 border border-solid" v-if="rec.schedule_status == 2">いそがしい</td>
            <td class="px-4 py-3 border border-solid" v-if="rec.schedule_status == 3">よゆうがない</td>
            <td class="px-4 py-3 border border-solid" v-if="rec.schedule_status == 4">ふつう</td>
            <td class="px-4 py-3 border border-solid" v-if="rec.schedule_status == 5">ゆとりがある</td>
          </tr>
          <tr v-if="props.myId == props.authUser">
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-bl"></th>
            <td class="px-4 py-3 border border-solid flex">
              <!-- 修正ボタン -->
              <Link
                :href="route('MyPage.edit', { id: rec.id })"
                class="mx-1 text-white bg-emerald-400 border-0 py-2 px-6 focus:outline-none hover:bg-emerald-300 rounded"
              >
                修正する
              </Link>

              <!-- 削除ボタン -->
              <div
                @click="toDeleteAction(rec.id)"
                class="mx-1 text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-400 rounded"
              >
                削除する
              </div>

            </td>
          </tr>
      </table>
  </div>
</template>