<template>
  <div class="mask__box">
    <a :href="url">
      <div class="mask__cover" :class="type">
        <img :src="cover" />
      </div>
      <div class="mask__bg" v-if="title">{{title}}</div>
    </a>
  </div>
</template>

<script>
  export default {
    props:{
      title:{
        type:String,
        default:''
      },
      url:{
        type:String,
        default:'javascript:;'
      },
      cover:{
        type:String
      },
      type:{
        type:[String],
        default:'larg'
      }
    }
  }
</script>

<style lang="less" rel="stylesheet/less" scoped>
  @import "../style/less/_mixs.less";
  .mask__box{
    position: relative;
  }
  .mask__cover{
    height: 205 * 2 /@baseFontSize-v2;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
    img{
      width: 100%;
    }
    &.small{
      height: 140 * 2 /@baseFontSize-v2;
      width: 186 * 2 /@baseFontSize-v2;
    }
  }
  .mask__bg{
    background-color: rgba(0,0,0,0.35);
    height: 70 /@baseFontSize-v2;
    line-height: 70 /@baseFontSize-v2;
    text-align: center;
    color: #fff;
    font-size: 36 /@baseFontSize-v2;
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;

    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical;

  }
</style>
