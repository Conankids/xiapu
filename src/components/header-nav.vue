<template>
  <div class="header__nav-box">
    <div class="header__nav-wrap">
      <div class="header__logo">
        <img src="../style/images/logo@3x.png"/>
      </div>
      <div class="header__menu" @click="openMenu">
        <img src="../style/images/icon-menue@3x.png"/>
      </div>
    </div>
    <transition name="fade">
      <div class="header__show-menu" v-if="show_menu">
        <div class="header__menu-close" @click="closeMenu">
          <img src="../style/images/icon-close@3x.png"/>
        </div>
        <div class="header-menu-item-box">
          <ul>
            <li class="on"><a href="javascript:;">首页</a></li>
            <li><a href="javascript:;">升级计划</a></li>
            <li><a href="javascript:;">申请体验</a></li>
            <li><a href="javascript:;">热门新品</a></li>
            <li><a href="javascript:;">体验报告</a></li>
            <li><a href="javascript:;">体验视频</a></li>
            <li><a href="javascript:;">活动回顾</a></li>
          </ul>
        </div>
      </div>
    </transition>
  </div>
</template>

<script>


  export default {
    data () {
      return {
        show_menu: false
      }
    },
    components: {},
    methods: {
      closeMenu () {
        this.show_menu = false;
        ['mousewheel', 'DOMMouseScroll', 'touchmove'].forEach((item) => {
          window.removeEventListener(item, this._preventDefault)
        })
      },
      openMenu () {
        this.show_menu = true;
        ['mousewheel', 'DOMMouseScroll', 'touchmove'].forEach((item) => {
          window.addEventListener(item, this._preventDefault, {passive: false})
        })
      },
      _preventDefault (e) {
        e.preventDefault()
        e.stopPropagation()
        return false
      }
    }
  }
</script>

<style lang="less" rel="stylesheet/less" scoped>
  .header__nav-wrap {
    height: 45px * 2;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    padding: 0 10px * 2;

    .header__logo {
      height: 46px;
      img {
        height: 100%;
        display: block;
      }
    }

    .header__menu {
      img {
        width: 24px * 2;
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
      height: 48px;
      width: 48px;
      position: absolute;
      right: 60px;
      top: 60px;
      cursor: pointer;
      img {
        width: 100%
      }
    }
  }
  .header-menu-item-box{
    color: #fff;
    line-height: 66px;
    font-size: 48px;
    text-align: center;
    li{
      height: 100px;
      display: flex;
      justify-content: center;
      align-items: center;
      user-select: none;
    }
    a{
      color: #fff;
    }
    li.on {
      a{
        color: #E7030F;
      }
    }
  }

  .fade-enter-active, .fade-leave-active {
    transition: opacity .3s
  }

  .fade-enter, .fade-leave-to {
    opacity: 0
  }
</style>
