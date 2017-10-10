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
  .mask__box{
    position: relative;
  }
  .mask__cover{
    height: 205px * 2;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
    img{
      min-height: 100%;
      min-width: 100%;
    }
    &.small{
      height: 140px * 2;
      width: 186px * 2;
    }
  }
  .mask__bg{
    background-color: rgba(242,242,242,0.45);
    height: 70px;
    line-height: 70px;
    text-align: center;
    color: #fff;
    font-size: 36px;
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
  }
</style>
