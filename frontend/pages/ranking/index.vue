<template>
  <div>
    <div>ランキングページ</div>
    <div v-for="n in 5" :key="n">
      <div>ここに動画と大喜利といいねボタン？</div>
    </div>
  </div>
</template>

<script lang="ts">
import Vue from 'vue'

export default Vue.extend({
  name: 'IndexPage',
})
</script>
