<template>
    <div>
        <layout-navbar></layout-navbar>
        <!-- <menu></menu> -->
        <!-- <div id="mask" style="display:none"></div> -->
        <div class="wrapper wrapper--hidden">

            <!-- <div class="device-xs visible-xs"></div>
            <div class="device-sm visible-sm"></div>
            <div class="device-md visible-md"></div>
            <div class="device-lg visible-lg"></div> -->

            <!-- Emplacement structure site -->
        	<div class="container">
        		<layout-header></layout-header>
        		<div class="row">
        			<div class="col-lg-12">
        				<div class="line"></div>
        			</div>
        		</div>
        		<div class="row">
                    <div class="col-lg-12">
                        <!-- <top></top> -->
                        <div class="top">
                            <p class="gab-texte-centre" style="display: none;">Vous utilisez un navigateur obsolète. Veuillez le mettre à jour pour naviguer sur ce site Internet correctement.</p>
                        </div>
                    </div>
                </div>
        		<section class="row">
        			<div class="col-lg-12">
        				<div class="page">
                            <router-view></router-view>
                        </div>
        			</div>
        		</section>
        		<div class="row">
        			<div class="col-lg-12">
        				<!-- <bottom></bottom> -->
        			</div>
        		</div>
        		<div class="row">
        			<div class="col-lg-12">
        				<div class="line"></div>
        			</div>
        		</div>
        		<layout-footer></layout-footer>
        	</div>
        </div>
    </div>
</template>

<script>
    import Mixins from ':/abstracts/mixins'
    import Navbar from ':/layout/Navbar.vue'
    import Header from ':/layout/Header.vue'
    import Footer from ':/layout/Footer.vue'

    export default {
        mixins: [Mixins],
        components: {
            'layout-navbar': Navbar,
            'layout-header': Header,
            'layout-footer': Footer,
        }
    }
</script>

<!-- Global styles -->
<style lang="scss">
    @import "~@/sass/_base.scss";

    a {
        cursor: pointer;
    }

    h1 {
        color: $title;
        margin: 5px 0 15px 0;
        font-size: $titleSize;
        font-weight: bold;
    }

    .line {
    	margin-bottom: 20px;
    	border-top: solid 1px darken($body, 10%);
    	border-bottom: solid 1px lighten($body, 10%);
    }
    
    .page{
        color: black;
    	padding: 15px 20px;
    	margin-bottom: 20px;
    	background-color: $page;
        @include box-shadow(1px 2px 5px $shadow);
        @include border-radius(10px);

        .line {
        	border-top: solid 1px darken($page, 10%);
        	border-bottom: solid 1px lighten($page, 10%);
        }
    }
</style>
