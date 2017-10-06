<template>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header pull-left">
                <ul class="nav navbar-nav">
                    <li v-if="navbar.path.length">
                        <a @click="route(navbar.path[0].route)">
                            {{ navbar.path[0].title }}
                            <span class="fa fa-chevron-right"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li v-for="item in navbar.pageList[0]">
                                <a v-bind:href="item.route">{{ item.title }}</a>
                            </li>
                        </ul>
                    </li>
                    <li v-if="navbar.path.length > 1">
                        <a @click="route(navbar.path[1].route)">
                            {{ navbar.path[1].title }}
                            <span class="fa fa-chevron-right"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li v-for="item in navbar.pageList[1]">
                                <a v-bind:href="item.route">{{ item.title }}</a>
                            </li>
                        </ul>
                    </li>
                    <li v-if="navbar.path.length > 2">
                        <a @click="route(navbar.path[2].route)">
                            {{ navbar.path[2].title }}
                            <span class="fa fa-chevron-right"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li v-for="item in navbar.pageList[2]">
                                <a v-bind:href="item.route">{{ item.title }}</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="navbar-header pull-right">
                <img v-show="navbar.pdf" v-bind:src="config.img.types.pdf"></img>
                <img v-show="navbar.rss" v-bind:src="config.img.types.rss"></img>
                <img v-show="navbar.xls" v-bind:src="config.img.types.xls"></img>
                <button type="button" id="menu-toggle" class="btn navbar-btn" style="margin-right: 5px;">
                    Menu
                </button>
            </div>
        </div>
    </nav>
</template>

<script>
    import Mixins from ':/abstracts/mixins.js'

    export default {
        mixins: [Mixins],
        // methods: {
        //     toggle: () => {
        //         console.log(this)
        //         this.next.dropdown()
        //     }
        // },
        data: () => {
            return {
                navbar: {
                    path: [
                        {
                            title: 'Path title 1',
                            route: 'route1'
                        },
                        {
                            title: 'Path title 2',
                            route: 'route2'
                        }
                    ],
                    pageList: [
                        [
                            {
                                title: 'Route title 1',
                                route: 'route1',
                                data: 'data'
                            },
                            {
                                title: 'Route title 2',
                                route: 'route2',
                                data: 'data'
                            }
                        ],
                        []
                    ],
                    pdf: true,
                    rss: false,
                    xls: false
                }
            }
        }
    }
</script>

<style lang="scss" scoped>
    @import "~@/sass/_base.scss";

    nav {
    }
</style>
