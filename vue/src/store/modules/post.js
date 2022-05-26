export default {
    actions: {
        async fetchPosts(ctx) {
            const response = await fetch("http://eco/post");
            const posts = await response.json();

            ctx.commit('updatePosts', posts);
        }
    },
    mutations: {
        updatePosts(state, posts) {
            state.posts = posts
        }
    },
    state: {
        posts: []
    },
    getters: {
        allPosts(state) {
            return state.posts
        }
    }
}