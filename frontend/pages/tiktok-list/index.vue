<template>
  <div>
    <div>大喜利するTikTok動画を選ぶ</div>
    <div>
      <div v-for="n in 5" :key="n">
        <div>
          <NuxtLink to="/tiktok-list/ここに動画のidかなあ"
            >ここにAPIから取得した動画のサムネを見せるとか？</NuxtLink
          >
          {{ tiktokList }}
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { Component, Vue } from 'nuxt-property-decorator'
import axios from 'axios'

@Component
export default class extends Vue {
  tiktokList = []

  mounted() {
    console.log('mounted')
    this.getData()
  }

  async getData() {
    const url = '/api/get-tiktok-list'
    const res = await axios.post(url)
    console.log(res)
    this.tiktokList = res.data.tiktokList
  }
}
</script>
