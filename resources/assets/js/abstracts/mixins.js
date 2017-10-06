import Config from ':/abstracts/config'

export default {
    data: () => ({
        errors: [],
        config: Config
    }),
    methods: {
        route: function(url) {
            this.$router.push(url)
        }
    }
}
