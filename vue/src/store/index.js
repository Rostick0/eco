import { createStore } from 'vuex';
import post from '@/store/modules/post.js';

export default createStore({
    modules: {
        post
    }
})