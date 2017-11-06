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
    props: {
      title: {
        type: String
      }
    }
  }
</script>
<style lang="scss" scoped>

  @import "./../style/scss/include";

  .common__title-box {
    margin: px2rem(40) 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    font-weight: 400;
  }

  .common__title {
    color: #ED1B3A;
    font-size: px2rem(40);
    line-height: px2rem(56);
    text-align: center;
    padding: 0  px2rem(56);
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    width: 100%;
  }

  .common__title-line {
    width: px2rem(48);
    height: px2rem(4);
    background-color: #ED1B3A;
    margin-top: px2rem(40);
  }

  .t2 {
    margin:0  px2rem(25);
  }
</style>
