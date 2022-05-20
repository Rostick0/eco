<template>
    <main class="main">
        <div class="container">
            <div class="main__container">
                <router-view></router-view>
            </div>
        </div>
    </main>
</template>

<script>
export default {
    name: 'EcoMain'
}
</script>

<style>
main {
    padding-top: 62px;
    height: 100vh;
}

.main__container {
    display: flex;
    margin-top: 24px;
}

.main__content {
    padding: 24px;
    padding-top: 0;

    flex: 0 0 65vw;
}
</style>