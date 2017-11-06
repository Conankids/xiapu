<template>
  <div class="index__four-pox-type-2" v-if="blog.length">
    <div class="index__four-item k-animate-2" v-for="item in blog">
      <a :href="item.url">
        <div class="index__four-item-img">
          <img :src="item.cover"/>
        </div>
        <div class="index__four-item-text">
          <div class="index__four-item-inner">{{ item.title }}</div>
        </div>
      </a>
    </div>
  </div>
</template>

<script>
  import $ from 'jquery'

  export default {

    data () {
      return {
        blog: []
      }
    },
    created () {
      var _this = this
      $.get('http://www.jiguo.com/api/article/GetXiaPuXinPin', function (replayData) {
        var blog = [];
        replayData.forEach((item) => {
          blog.push({
            url: 'http://www.jiguo.com/article/article/'+item.blogid+'.html',
            title: item.title,
            cover: `http://s1.jiguo.com/${item.cover}/640?imageView2/1/w/${182*2}/h/${137*2}/q/100`
          })
        });
        _this.blog = blog;
        _this.$nextTick(()=>{
          window.hasAnimate = $('.k-animate:not(.into-k-animate),.k-animate-2:not(.into-k-animate)');
        })
      }, 'jsonp')
    }
  }
</script>

<style lang="scss" scoped>

  @import "./../style/scss/include";
  .index__four-pox-type-2 {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: space-between;
    > div {
      margin-top:px2rem( 20 );
    }
    .index__four-item {
      width:px2rem( 182 * 2 );
      img {
        width: 100%;
      }
    }
  }
  .index__four-item-img {
    height:px2rem( 137 * 2 );
    overflow: hidden;
    img {
      display: block;
      width: 100%;
      height: 100%;
    }
  }

  .index__four-item-text {
    background-color: #8e8e8e;
    color: #fff;
    font-size:px2rem( 28 );
    line-height:px2rem( 40 );
    height:px2rem( 100 );
    padding:0 px2rem( 15 );
    overflow: hidden;
    display: flex;
    align-items: center;
    .index__four-item-inner {
      height:px2rem( 80 );
      overflow: hidden;
      word-break: break-all;

      overflow : hidden;
      text-overflow: ellipsis;
      display: -webkit-box;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;

    }
  }
</style>
