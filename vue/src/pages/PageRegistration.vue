<template>
<div class="authorization">
                        <form class="authorization__form" action="#">
                            <div class="authorization__title">
                                Регистрация
                            </div>
                            <div class="authorization__subtitle">
                                Введите свои данные
                            </div>
                            <input class="authorzation__input" type="email" placeholder="Ваша почта" id="registrationEmail">
                            <input class="authorzation__input" type="text" placeholder="Логин" id="registrationLogin">
                            <input class="authorzation__input" type="password" placeholder="Пароль" id="registrationPassword">
                            <button class="authorization__button btn" id="registrationButton">Продолжить</button>
                            <div class="authorization__bottom_text">
                                Нажимая "Продолжить", вы принимаете <a  class="authorization_href" href="">пользовательское соглашение</a> и <a class="authorization_href" href="">политику конфиденциальности.</a>
                            </div>
                        </form>
                    </div>
</template>

<script>
export default {
    name: 'PageRegistration'
}
</script>

<style>
.authorization {
    margin: 0 auto;
}

.authorization__form {
    background: #fff;

    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    
    padding: 0 100px;

    width: 640px;
    height: 463px;
}

/* .authorization > * {
    width: 100%;
} */

.authorization__title {
    color: #103303;
    
    font-size: 30px;
    font-weight: 600;
    margin-bottom: 22px;
}

.authorization__subtitle {
    font-size: 16px;

    margin-bottom: 24px;
}

.authorzation__input {
    border: 1px solid #949494;
    border-radius: 15px;

    font-size: 18px;

    margin-bottom: 24px;
    padding: 12px 18px;

    width: 100%;
}

.authorization__or {
    color: #5e5e5e;
    display: flex;

    margin: 16px 0 16px;
}

.authorization__or::before {
    content: '';

    width: 100%;
    height: 1px;
}

.authorization__button {
    border: 1px solid #949494;
    border-radius: 15px;

    box-shadow: none;

    font-size: 20px;
    font-weight: 600;

    padding: 13px 0;

    width: 100%;
}

.authorization__bottom_text {
    text-align: center;

    margin-top: 14px;
}

.authorization_href {
    color: #006cfa;

    text-decoration: underline;
}
</style>