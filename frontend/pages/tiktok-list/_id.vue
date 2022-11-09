<template>
  <div>
    <div>選択した動画に大喜利するページ</div>
    {{ tiktokVideo }}
  </div>
</template>

<script lang="ts">
import { Component, Vue } from 'nuxt-property-decorator'
import axios from 'axios'

@Component
export default class extends Vue {
  tiktokVideo = ''

  mounted() {
    console.log('mounted')
    this.getData()
  }

  async getData() {
    const url = '/api/get-tiktok-video'
    const param = {
      id: this.$route.params.id,
    }
    const res = await axios.post(url, param)
    console.log(res)
    this.tiktokVideo = res.data.tiktokVideo
  }
}
</script>
