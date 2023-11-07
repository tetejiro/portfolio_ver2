<script setup>
import dayjs from 'dayjs'

let props = defineProps(['rec'])
let recs = props.rec.reverse() // 最新のレコードが上

function calcTimeGap(start, end) {
  let timeGap = new Date(end) - new Date(start)
  let days = 0
  let hours = 0
  let mins = 0
  if(timeGap / 1000 / 60 / 60 / 24 > 0) {
    days = Math.floor(timeGap / 1000 / 60 / 60 / 24)
  }
  if(timeGap / 1000 / 60 / 60 > 0) {
    hours = Math.floor((timeGap - (days * 86400000)) / 1000 / 60 / 60)
  }
  if(timeGap / 1000 > 60 > 0) {
    mins = (timeGap - ((days * 86400000) + (hours * 3600000))) / 1000 / 60
  }
  return days + ' 日 ' + hours + ' 時間 ' + mins + ' 分'
}
</script>

<template>
  <div class="w-3/5 mx-auto overflow-auto">
      <p class="text-center font-medium text-gray-900 mx-auto mt-10 mb-4">おしごと記録</p>

      <table v-for="rec in recs" :key="rec.id" class="mb-3 table-auto w-full text-left whitespace-no-wrap">
          <tr>
            <th class="px-4 py-3 w-1/5 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl">記録時間</th>
            <td class="px-4 py-3 border-solid border">
              {{ dayjs(rec.created_at).format('YYYY-MM-DD') + ' ' + dayjs(rec.created_at).hour() + ':' + ('0' + dayjs(rec.created_at).minute()).slice(-2) }}
            </td>
          </tr>
          <tr>
            <th class="px-4 py-3 w-1/5 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">内容</th>
            <td class="px-4 py-3 border-solid border">{{ rec.task_content }}</td>
          </tr>
          <tr>
            <th class="px-4 py-3 w-1/5 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">開始時間</th>
            <td class="px-4 py-3 border-solid border">
              {{ rec.task_start }}
            </td>
          </tr>
          <tr>
            <th class="px-4 py-3 w-1/5 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">終了時間</th>
            <td v-if="rec.task_end != null" class="px-4 py-3 border-solid border">
              {{ rec.task_end }}
            </td>
            <td v-else class="px-4 py-3 border-solid border">未完了</td>
          </tr>
          <tr v-if="rec.task_end != null">
            <th class="px-4 py-3 w-1/5 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">所要時間</th>
            <td class="px-4 py-3 border-solid border">{{ calcTimeGap(rec.task_start, rec.task_end) }}</td>
          </tr>
          <tr>
            <th class="px-4 py-3 w-1/5 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-bl">当時の気分</th>
            <td class="px-4 py-3 border border-solid" v-if="rec.schedule_status == 1">手伝ってほしい</td>
            <td class="px-4 py-3 border border-solid" v-if="rec.schedule_status == 2">いそがしい</td>
            <td class="px-4 py-3 border border-solid" v-if="rec.schedule_status == 3">よゆうがない</td>
            <td class="px-4 py-3 border border-solid" v-if="rec.schedule_status == 4">ふつう</td>
            <td class="px-4 py-3 border border-solid" v-if="rec.schedule_status == 5">ゆとりがある</td>
          </tr>
      </table>

  </div>
</template>