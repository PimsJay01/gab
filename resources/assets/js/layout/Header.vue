<template>
    <header class="row">
        <div class="col-sm-offset-1 col-sm-1">
            <a @click="route('accueil')">
                <img v-bind:src="config.img.logo" class="img-responsive center-block" alt="Groupement Autonome de Basket"></img>
            </a>
        </div>
        <div class="col-sm-9">
            <img v-bind:src="config.img.title" class="img-responsive center-block" alt="Groupement Autonome de Basket"></img>
        </div>
    </header>
</template>

<script>
    import Mixins from ':/abstracts/mixins.js'

    export default {
        mixins: [Mixins],
    }
</script>

<style lang="scss" scoped>
    @import "~@/sass/_base.scss";

    header {
        margin-top: 15px;
    }
</style>
