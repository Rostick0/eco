<template>
    <EcoAside />
        
    <div class="main__content">
        <EcoPosts />
    </div>
</template>

<script>
export default {
    name: 'PageMain'
}
</script>

<style>
.article {
    background: rgba(198, 201, 204, 0.4);

    padding: 24px;
    margin-bottom: 24px;
}

.article:last-child {
    margin-bottom: 0;
}

.article__top {
    display: flex;
    align-items: center;

    margin-bottom: 15px;
}

.author-article_username {
    font-size: 21px;
}

.article__time {
    font-size: 9px;
}

.author-article_avatar {
    margin-right: 24px;
}

.author-article_avatar img {
    width: 40px;
    height: 40px;
}

.article__img img {
    width: 100%;
}

.article__title {
    background: #0c7a31;

    border-radius: 10px;

    color: #edf1f5;

    display: inline-flex;
    align-items: center;
    justify-content: space-between;

    font-weight: 600;

    text-align: center;

    padding: 6px 20px;
    margin-bottom: 18px;

    min-width: 220px;
    min-height: 28px;
}

.article__text {
    font-size: 13px;

    line-height: 1.55;
}

.article__img img {
    margin-top: 18px;
}
</style>