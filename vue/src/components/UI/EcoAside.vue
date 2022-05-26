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
                            <button class="btn">
                                Настройки
                            </button>
                        </div>
                    </router-link>
                </li>
            </ul>
        </nav>
    </aside>
</template>

<script>
export default {
    name: 'EcoAside'
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
</style>