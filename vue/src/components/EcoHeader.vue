<template>
<header class="header">
            <div class="container">
                <div class="header__container">
                    <div class="header__logo">
                        <router-link to="/">
                            <div class="header__logo_img">
                                <img src="@/img/logo.png" alt="">
                            </div>
                            <div class="header__text">
                                <div class="header__title">
                                    Узнай свою планету
                                </div>
                                <div class="header__subtitle">
                                    Маленькими шагами к чистому будущему
                                </div>
                            </div>
                        </router-link>
                    </div>

                    <div class="header__buttons">
                        <router-link to="/registration">
                            <button class="header__button btn">
                                Регистрация
                            </button>
                        </router-link>
                        <router-link to="/login">
                            <button class="header__button btn">
                                Вход
                            </button>
                        </router-link>
                    </div>
                </div>
            </div>
        </header>
</template>

<script>
export default {
    name: 'EcoHeader',
    
}
</script>

<style>
.header {
    background: #e3edfa;

    padding: 16px 0;

    position: fixed;

    width: 100%;
}

.header__container {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.header__logo a {
    display: flex;
    align-items: center;
}

.header__logo_img {
    margin-right: 12px;
}

.header__logo_img img {
    width: 30px;
    height: 30px;
}

.header__title {
    color: #000 !important;

    font-size: 17px;
}

.header__subtitle {
    color: #000 !important;

    font-size: 9px;
}

.header__buttons {
    display: flex;
}

.header__button {
    font-size: 14px;

    padding: 6px 24px;
}

.header__buttons a:last-child {
    margin-left: 16px;
}
</style>