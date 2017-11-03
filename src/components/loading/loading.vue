<template>
  <div class="page-loading">
    <img class="page-loading-img" src="../../style/images/page_loading.svg"/>
  </div>
</template>

<style lang="less" rel="stylesheet/less">
  @import "../../style/less/_mixs.less";

  .page-loading {
    position: fixed;
    z-index: 99999999;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    background: #fff;
  }

  .page-loading-img {
    @loading-width: 80 /@baseFontSize-v2;
    position: absolute;
    z-index: 9999;
    top: 50%;
    left: 50%;
    margin-left: -@loading-width/2;
    margin-top: -@loading-width/2;
    width: @loading-width;
    height: @loading-width;
  }
</style>