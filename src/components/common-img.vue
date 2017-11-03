<template>
  <div class="index__nwe1">
    <a :href="url"><img :src="cover" /></a>
  </div>
</template>

<script>
  export default {
    props:{
      url:{
        type:String,
        default:'javascript:;'
      },
      cover:{
        type:String
      }
    }
  }
</script>

<style lang="less" rel="stylesheet/less" scoped>
  @import "../style/less/_mixs.less";
  .index__nwe1{
    /*height: 200px;*/
    width: 100%;
    img{
      width: 100%;
      /*height: 100%;*/
    }
  }
</style>
