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
<style lang="scss" scoped>

  @import "./../style/scss/include";
  .mask__box{
    position: relative;
  }
  .mask__cover{
    height:px2rem( 205 * 2 );
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
    img{
      width: 100%;
    }
    &.small{
      height:px2rem( 140 * 2 );
      width:px2rem( 186 * 2 );
    }
  }
  .mask__bg{
    background-color: rgba(0,0,0,0.35);
    height:px2rem( 70 );
    line-height:px2rem( 70 );
    text-align: center;
    color: #fff;
    font-size:px2rem( 36 );
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
