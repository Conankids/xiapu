<template>
  <div class="common__title-box">
    <div class="common__title">
      <span class="t1">[</span>
      <span class="t2">{{title}}</span>
      <span class="t3">]</span>
    </div>
    <div class="common__title-line"></div>
  </div>
</template>

<script>
  export default {
    props:{
      title:{
        type:String
      }
    }
  }
</script>

<style lang="less" rel="stylesheet/less" scoped>
  @import "../style/less/_mixs.less";
  .common__title-box{
    margin: 40 /@baseFontSize-v2 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    font-weight: 400;
  }
  .common__title{
    color: #ED1B3A;
    font-size: 40 /@baseFontSize-v2;
    line-height: 56 /@baseFontSize-v2;
    text-align: center;
    padding: 0 56 /@baseFontSize-v2;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    width: 100%;
  }
  .common__title-line{
    width: 48 /@baseFontSize-v2;
    height: 4 /@baseFontSize-v2;
    background-color: #ED1B3A;
    margin-top: 40 /@baseFontSize-v2;
  }
  .t2{
    margin: 0 25 /@baseFontSize-v2;
  }
</style>
