<template>
  <div>
    <div>ランキングページ</div>
    <div v-for="n in 5" :key="n">
      <div>ここに動画と大喜利といいねボタン？</div>
    </div>
    {{ rankingData }}
  </div>
</template>

<script lang="ts">
import { Component, Vue } from 'nuxt-property-decorator'
import axios from 'axios'

@Component
export default class extends Vue {
  rankingData = []

  mounted() {
    console.log('mounted')
    this.getData()
  }

  async getData() {
    const url = '/api/ranking/get-list'
    const res = await axios.post(url)
    console.log(res)
    this.rankingData.push(res.data.hoge)
  }
}
</script>
