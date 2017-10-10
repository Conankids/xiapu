<template>
  <div class="blog__box" v-if="blog.length">
    <div class="blog__item" v-for="item in blog">
      <a :href="item.url">
        <div class="blog__cover">
          <img :src="item.cover"/>
        </div>
        <div class="blog__bottom-desc">
          <div class="blog__title">
            <div class="blog__title-inner">{{ item.title }}</div>
          </div>
          <div class="blog__query">
            <div class="blog__user-info">
              <div class="blog__user-face">
                <img :src="item.userface"/>
              </div>
              <div class="blog__user-name">{{ item.username }}</div>
            </div>
            <div class="blog__user-zan-comment">
              <div class="blog__zan">
                <i class="icon icon-zan"></i>
                <span class="blog__zan-num">{{ item.zan }}</span>
              </div>
              <div class="blog__comment">
                <i class="icon icon-comment"></i>
                <span class="blog__comment-num">{{ item.comment }}</span>
              </div>
            </div>
          </div>
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
      $.get('http://www.jiguo.com/api/article/GetXiaPuArticle', function (replayData) {
        var blog = [];
        replayData.forEach((item) => {
          blog.push({
            url: 'http://www.jiguo.com/article/article/'+item.blogid+'.html',
            title: item.title,
            cover: `http://s1.jiguo.com/${item.cover}/640?imageView2/1/w/${182*2}/h/${137*2}/q/100`,
            zan: item.praise||0,
            comment: item.reply||0,
            username: item.author,
            userface: item.avatar+'/230x230'
          })
        });
        _this.blog = blog;
      }, 'jsonp')
    }
  }
</script>

<style lang="less" rel="stylesheet/less" scoped>
  .blog__box {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    width: 100%;

    .blog__item {
      width: 181px * 2;
      overflow: hidden;
      margin-top: 20px;
    }
    .blog__cover {
      height: 137px * 2;
      overflow: hidden;
      img {
        width: 100%;
        height: 100%;
        display: block;
      }
    }
    .blog__bottom-desc {
      background-color: #ff9898;
      padding: 15px;
      color: #fff;
      font-size: 28px;
    }
    .blog__title {
      line-height: 40px;
      height: 80px;
      overflow: hidden;
    }
    .blog__query {
      margin-top: 20px;
    }
    .blog__user-name {
      font-size: 20px;
      line-height: 28px;
      height: 28px;
      overflow: hidden;
      margin-left: 5px;
    }

    .blog__user-info,
    .blog__user-zan-comment,
    .blog__query,
    .blog__zan,
    .blog__comment {
      display: flex;
      align-items: center;
    }
    .blog__query {
      justify-content: space-between;
    }
    .blog__zan-num,
    .blog__comment-num {
      font-size: 20px;
      color: #ED1B3A;
    }
    .blog__user-face {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      overflow: hidden;
      img {
        width: 100%;
        height: 100%;
        display: block;
      }
    }
  }

  .icon {
    &:before {
      background-size: 24px auto !important;
      background-repeat: no-repeat;
      background-position: center center;
    }
    &.icon-zan::before {
      background-position: center 9px;
      background-image: url(../style/public/icon-zan.svg);
    }
    &.icon-comment::before {
      background-image: url(../style/public/icon-comment.svg);
    }
  }
</style>
