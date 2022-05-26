<template>
    <EcoAside />
        
    <div class="main__content">
        <EcoPosts />
    </div>
</template>

<script>
export default {
    name: 'PageUser'
}
</script>

<style>
.aside__navigation {
    position: fixed;
}

.block__fantom {
    width: 227px;
    margin-right: 24px;
    height: 0;
    opacity: 0;
}

.aside__navigation_item a {
    background: #e3edfa;

    box-shadow: 2px 3px 5px 1px rgba(20, 20, 20, 0.3);

    cursor: pointer;

    display: inline-flex;
    align-items: center;
    justify-content: center;

    margin-bottom: 12px;

    width: 227px;
    height: 40px;
}

.aside__icon {
    margin-right: 10px;
}

.aside__icon img {
    width: 30px;
    height: 30px;
}

.aside__href button {
    width: 161px;
    height: 20px;

    display: flex;
    align-items: center;
    justify-content: center;
}




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