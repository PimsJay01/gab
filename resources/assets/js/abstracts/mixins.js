import Config from ':/abstracts/config'

export default {
    data () {
        return {
            config: Config
        }
    },
    methods: {
        route: function(url) {
            alert(url)
        }
    }
}
