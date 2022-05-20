<template>
<aside class="aside">
                        <div class="block__fantom">.</div>
                        <nav class="aside__nav">
                            <ul class="aside__navigation">
                                <li class="aside__navigation_item">
                                    <router-link to="/">
                                        <div class="aside__icon">
                                            <img src="@/img/blog_icon.png" alt="">
                                        </div>
                                        <div class="aside__href">
                                            <button class="btn" href="">
                                                Блоги
                                            </button>
                                        </div>
                                    </router-link>
                                </li>
                                <li class="aside__navigation_item">
                                    <router-link to="/setting">
                                        <div class="aside__icon">
                                            <img src="@/img/settings_icon.png" alt="">
                                        </div>
                                        <div class="aside__href">
                                            <button class="btn" href="setting.html">
                                                Настройки
                                            </button>
                                        </div>
                                    </router-link>
                                </li>
                            </ul>
                        </nav>
                    </aside>

<div class="main__content">
                        <form class="setting" action="#">
                            <div class="setting_grid">
                                <div class="setting_login">
                                    <label class="setting__label" for="personLogin">Имя пользователя</label>
                                    <input class="setting__input" type="text" value="Имя" id="personLogin">
                                </div>
                                <div class="setting__email">
                                    <label class="setting__label" for="personEmail">Электронная почта</label>
                                    <input class="setting__input" type="email" value="email@email.com" id="personEmail">
                                </div>
                                <div class="setting__password">
                                    <label class="setting__label" for="personPassword">Пароль</label>
                                    <input class="setting__input" type="password" value="Пароль" id="personPassword">
                                </div>
                            </div>
                            <button class="setting__save btn">
                                Сохранить изменения
                            </button>
                        </form>
                    </div>
</template>

<script>
export default {
    name: 'PageSetting'
}
</script>

<style>
    .setting {
    background: rgba(198, 201, 204, 0.4);

    padding: 64px 40px;
}

.setting_grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-gap: 20px;
}

.setting_grid > *:nth-child(-n+3) {
    /* margin-bottom: 20px; */
    grid-column: 1/3;
    align-items: center;
    display: grid;
    grid-template-columns: 40% 60%;
}

.setting__input {
    background: #fcfcfc;

    border: 1px solid #757575;
    border-radius: 5px;

    padding: 4px 20px;
}

.setting__save {
    display: inline-block;
    padding: 6px 40px;
    margin-top: 20px;
    margin: 20px auto 0;
}
</style>