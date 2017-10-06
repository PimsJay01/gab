<template>
    <div class="aboutus">
        <h1>Le GAB c'est...</h1>
        <div class="aboutus__list row">
        	<div class="col-lg-12">
        		<div class="well">
                    <ul v-if="aboutus && aboutus.length">
                        <li v-for="item of aboutus">{{item.text}}</li>
                    </ul>
        		</div>
        	</div>
        </div>
        <div class="line"></div>
        <h1>Le GAB, "Un basket qui allie plaisir et compétition"</h1>
        <div class="aboutus__text row">
        	<div class="col-lg-12">
        		<p v-for="paragraph in text">{{paragraph}}</p>
        	</div>
        </div>
    </div>
</template>

<script>
    import Mixins from ':/abstracts/mixins.js'

    export default {
        mixins: [Mixins],
        data: () => ({
            aboutus: [],
            text: [
                'Le GAB est une association dont l\'histoire débute en 1951, sous l\'impulsion d\'Henri Rochat, un passionné de la balle orange. D\'abord, un tournoi annuel, il a pris par la suite la forme d\'un championnat, car les dirigeants ont rapidement dû faire face à la montée croissante du nombre d\'équipes. D\'où la nécessité de créer une ligue, beaucoup moins formaliste que sa cousine l\'ACGBA, mais tout autant respectable. Mues par un désir commun de faire vibrer le basket dans la cité de Calvin, les deux ligues ont disputé des matchs au sein d\'un championnat appelé à juste titre "la Spéciale". Pendant longtemps, cette formule a permis aux deux ligues de pratiquer leur basket ensemble. Elle a largement contribué à élever le niveau de jeu du GAB. Avec les décennies, le Groupement Autonome de Basket-ball a tissé sa toile au sein des adeptes du basket genevois, et s\'impose aujourd\'hui comme une vraie alternative à la Ligue officielle.',
                'Le GAB, qui, quoi, comment ? Les équipes sont principalement des corporations (Procter &amp; Gamble, Firmenich, Rolex etc.), mais aussi des associations d\'étudiants, des clubs, voire tout simplement des groupes d\'amis. Les équipes inscrites à notre championnat n\'ont pas l\'obligation de fournir une salle ou un arbitre pour participer à la compétition. Celles qui le font bénéficient de rabais sur leur cotisation à notre championnat.',
                'A l\'entame de cette saison 2015-2016, le GAB regroupe 51 équipes et plus de 720 licenciés. De 15 à 79 ans, les joueurs évoluent au sein du championnat qui compte 4 niveaux différents (série A, B, C, D). Retenons que la série A, la plus compétitive, équivaut au niveau d\'une 2ème ligue en ACGBA. Au championnat s\'ajoutent deux autres compétitions annuelles qui viennent pimenter la saison, à savoir la Coupe et le traditionnel tournoi du GAB qui a lieu chaque printemps. Des photos de l\'événement sont d\'ailleurs disponibles sur la page d\'accueil de notre site.',
                'Le GAB évolue perpétuellement pour répondre à la demande de ses membres, pour preuve l\'instauration de play-offs depuis la saison 2014-2015 afin de pimenter la fin de notre championnat et déterminer les équipes vainqueurs de chaque série. Les équipes les moins performantes ne sont pas pour autant laissées de côté, elles disputeront des play-out afin de déterminer celles qui seront reléguées en série inférieures.',
                'Mais en quoi les amateurs et autres férus de basket y trouvent-ils leur compte ? Les matchs sont disputés uniquement sur Genève en semaine, dès 19h, dans toutes les écoles et gymnases du Canton. Le GAB se veut différent également pour plusieurs raisons : la licence ne coûte que 20 francs, elle est d\'ailleurs offerte aux joueurs qui sont âgés de moins de 18 ans.',
                'S\'agissant des règles appliquées lors des rencontres, elles sont similaires à celles de la FIBA, à quelques exceptions près. En effet, la durée officielle d\'un match est de 2 fois 20 minutes sans arrêt de jeu, uniquement lors des temps morts. Une équipe peut aussi commencer un match en n\'alignant que 4 joueurs sur le terrain au lieu de 5. En revanche, il n\'y a pas de prolongations prévues si le score final est à égalité, sauf lorsqu\'il s\'agit d\'un match de play-off ou de coupe. Quant aux arbitres, ils ont été formés au sein du GAB pour la plupart. Certains d\'entre eux ont d\'abord effectué leurs classes en ACGBA, avant de venir officier au GAB. Toutes nos rencontres sont arbitrés par deux officiels qui sont directement rémunérés par les équipes.',
                'De plus, dans un souci d\'amélioration constante, le GAB a instauré une commission de visionnement chargé de superviser les arbitres et les équipes. Le but étant de déterminer, pour les arbitres, les points pouvant être améliorés par le biais d\'une formation ou d\'un rappel des dispositions réglementaires.',
                'Le GAB prône le fair-play, à chaque rencontre, une note de fair-play est donnée aux équipes et un classement est établi. Le vainqueur de ce classement, par série, se voit récompensé d\'un bon de 200.- à faire valoir en déduction des frais d\'inscription à la prochaine saison. Pour faire respecter cette philosophie, le GAB a adopté une ligne de conduite très stricte envers les contrevenants qui sont durement sanctionnés',
                'En bref, le GAB peut se targuer d\'être une ligue moins contraignante, mais tout autant sportive et compétitive que celle de l\'ACGBA. L\'arrivée de nouvelles équipes, chaque année, confirme le succès de cette formule qui représente, en fin de compte, une bonne complémentarité à la Ligue officielle, l\'ACGBA. Car, si le GAB ne mise pas sur la formation des jeunes, il n\'empêche qu\'il continue d\'entretenir des valeurs indispensables au sport, telles que le plaisir, la compétition, le charme, la classe et le respect, toutes réunies dans une dose de sueur et de bonne humeur.',
                'A bon entendeur !',
                '(Texte mis à jour en avril 2016 basé sur l\'article de Thierry Bovey, dans </i>COURANTS<i>, le journal des étudiant(e-s) de l\'Université de Genève, novembre-décembre 2004)',
            ]
        }),
        created() {
            axios.get(`http://localhost:8080/api/aboutus`)
            .then(response => {
                this.aboutus = response.data
            })
            .catch(e => {
                this.errors.push(e)
            })
        }
    }
</script>

<style lang="scss" scoped>
    @import "~@/sass/_base.scss";

    .aboutus__text {

        p:first-child {
            font-weight: bold;
        }

        p:last-child {
            font-style: italic;
        }
    }
</style>
