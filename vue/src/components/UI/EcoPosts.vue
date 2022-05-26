<template>
    <article class="article" 
        v-for="post in allPosts"
        :key="post.post_id"
    >
        <div class="article__top author-article">
            <div class="author-article_avatar">
                <img src="@/img/standart_female.jpg" alt="">
            </div> 
            <div class="article__top_right">
                <div class="author-article_username">
                    {{ post.author_id }}
                </div>
                <date class="article__time">
                    {{ post.date }}
                </date>
            </div>
        </div>
        <div class="article__center">
            <div class="article__title">
                <div>
                    {{ post.title }}
                </div>
            </div>
            <div class="article__text">
                {{ post.text }}
            </div>
            <div class="article__img"
                v-if="post.img"
            >
                <!-- <img :src="require(`${post.img}`)" alt=""> -->
            </div>
        </div>
    </article>
</template>

<script>
import { mapActions, mapGetters } from "vuex";

export default {
    name: 'EcoPosts',
    computed: mapGetters(['allPosts']),
    methods: mapActions(['fetchPosts']),
    async mounted() {
        this.fetchPosts();
    },
}
</script>