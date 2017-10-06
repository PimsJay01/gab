<template>
    <footer class="row">
        <div class="col-lg-12">
    		<div><p>GAB - Case postale 127 - 1211 Genève 28 - CCP 12-20749-7<br/>© 2013 - Groupement Autonome de Basket Ball Genève</p></div>
    		<div><p>
    			<a @click="route('accueil')">Accueil</a> |
    			<a @click="route('contact')">Contact</a> |
                <!-- <router-link :to="aboutus"><p>Qui sommes-nous?</p></router-link> | -->
    			<!-- <a :to="aboutus">Qui sommes-nous?</a> | -->
    			<a @click="route('qui-sommes-nous')">Qui sommes-nous?</a> |
    			<a href="https://www.facebook.com/groups/8157738787/">Facebook</a> |
    			<a href="https://www.twitter.com/gabasket">Twitter</a>
    		</p></div>
        </div>
    </footer>
</template>

<script>
    import Mixins from ':/abstracts/mixins.js'

    export default {
        mixins: [Mixins],
    }
</script>

<style lang="scss" scoped>
    @import "~@/sass/_base.scss";

    footer {
        color: $lightly;
        text-align: center;
    }
</style>
