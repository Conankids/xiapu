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
  .common__title-box{
    margin: 40px 0;
    display: flex;
    flex-direction: column;
    align-items: center;
  }
  .common__title{
    color: #ED1B3A;
    font-size: 40px;
    line-height: 56px;
    text-align: center;
    padding: 0 56px;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    width: 100%;
  }
  .common__title-line{
    width: 48px;
    height: 4px;
    background-color: #ED1B3A;
    margin-top: 40px;
  }
  .t2{
    margin: 0 25px;
  }
</style>
