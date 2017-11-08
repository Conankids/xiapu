<template>
  <div class="header__nav-box">
    <div class="header__nav-wrap" ref="header__nav-wrap">
      <div class="header__logo">
        <img src="../style/images/logo@3x.png"/>
      </div>
      <div class="header__menu" @click="openMenu">
        <img src="../style/images/icon-menue@3x.png"/>
      </div>
    </div>
    <transition name="fade">
      <div class="header__show-menu" v-show="show_menu">
        <div class="header__menu-close" @click="closeMenu">
          <img src="../style/images/icon-close@3x.png"/>
        </div>
        <div class="header-menu-item-box">
          <ul>
            <li @click="scrollPagePosition($event,'index')" class="on"><a href="javascript:;">首页</a></li>
            <li @click="scrollPagePosition($event,'sjjh')"><a href="javascript:;">升级计划</a></li>
            <li @click="scrollPagePosition($event,'sqty')"><a href="javascript:;">申请体验</a></li>
            <li @click="scrollPagePosition($event,'rmxp')"><a href="javascript:;">热门新品</a></li>
            <li @click="scrollPagePosition($event,'tybg')"><a href="javascript:;">体验报告</a></li>
            <li @click="scrollPagePosition($event,'tysp')"><a href="javascript:;">体验视频</a></li>
            <li @click="scrollPagePosition($event,'hdhg')"><a href="javascript:;">活动回顾</a></li>
          </ul>
        </div>
      </div>
    </transition>
  </div>
</template>

<script>

  import $ from 'jquery'

  export default {
    data () {
      return {
        show_menu: false
      }
    },
    watch: {
      show_menu () {
        if (this.show_menu) {
          ['mousewheel', 'DOMMouseScroll', 'touchmove'].forEach((item) => {
            window.addEventListener(item, this._preventDefault, {passive: false})
          })
        } else {
          ['mousewheel', 'DOMMouseScroll', 'touchmove'].forEach((item) => {
            window.removeEventListener(item, this._preventDefault)
          })
        }
      }
    },
    methods: {
      closeMenu () {
        this.show_menu = false
      },
      openMenu () {
        this.show_menu = true
      },
      _preventDefault (e) {
        e.preventDefault()
        e.stopPropagation()
        return false
      },
      scrollPagePosition (e, scrollEl) {
        $(e.currentTarget).parent().find('.on').removeClass('on')
        $(e.currentTarget).addClass('on')
        this.scrollEl = $('#' + scrollEl)
        var headerHeight = $(this.$refs['header__nav-wrap']).height()
        if (this.scrollEl.length) {
          this.htmlBody = this.htmlBody || $('html,body')
          this.htmlBody.animate({
            scrollTop: this.scrollEl.offset().top - headerHeight
          })
          this.show_menu = false
        }
      }
    }
  }
</script>

<style lang="scss">

  $IMAGES_PATH: './../style/images/';
  @import "./../style/scss/app.scss";

  .header__nav-box {
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    z-index: 2;
    + div {
      padding-top: px2rem(90);
      box-sizing: content-box;
    }
  }
</style>
<style lang="scss" scoped>
  @import "./../style/scss/include";

  .header__nav-wrap {
    height: px2rem(45 * 2);
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    padding: 0 px2rem(10 * 2);

    .header__logo {
      height: px2rem(46);
      img {
        height: 100%;
        display: block;
      }
    }

    .header__menu {
      img {
        width: px2rem(24 * 2);
        height: 100%;
        display: block;
      }
    }
  }

  .header__show-menu {
    background-color: rgba(0, 0, 0, 0.8);
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 3;
    display: flex;
    justify-content: center;
    align-items: center;
    .header__menu-close {
      height: px2rem(48);
      width: px2rem(48);
      position: absolute;
      right: px2rem(60);
      top: px2rem(60);
      cursor: pointer;
      img {
        width: 100%
      }
    }
  }

  .header-menu-item-box {
    color: #fff;
    line-height: px2rem(66);
    font-size: px2rem(48);
    text-align: center;
    li {
      height: px2rem(100);
      display: flex;
      justify-content: center;
      align-items: center;
      user-select: none;
    }
    a {
      color: #fff;
    }
    li.on {
      a {
        color: #E7030F;
      }
    }
  }

  .fade-enter-active, .fade-leave-active {
    transition: opacity .3s;
  }

  .fade-enter, .fade-leave-to {
    opacity: 0
  }
</style>
