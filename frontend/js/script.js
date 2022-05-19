const headerButtons = document.querySelector('.header__buttons');

if (headerButtons && localStorage.getItem('session') && localStorage.getItem('email')) {
    headerButtons.innerHTML = `<button class="header__button btn">Профиль</button>`; 
}

const articles = document.querySelector('.articles');

function checkImg(img) {
    if (img) {
        return `
        <div class="article__img">
            <img src="${ img }" alt="">
        </div>`;
    }
    return '';
}

if (articles) {
    fetch('http://eco/post')
        .then(res => res.json())
        .then(posts => {
            posts.forEach(post => {
                articles.innerHTML +=
                    `<article class="article">
                    <div class="article__top author-article">
                        <div class="author-article_avatar">
                            <img src="img/standart_female.jpg" alt="">
                        </div> 
                        <div class="article__top_right">
                            <div class="author-article_username">
                                Пользователь 1
                            </div>
                            <date class="article__time">
                                ${ post.date }
                            </date>
                        </div>
                    </div>
                    <div class="article__center">
                        <div class="article__title">
                            <div>
                                ${ post.title }
                            </div>
                        </div>
                        <div class="article__text">
                            ${ post.text }
                        </div>
                        ${ checkImg(post.img) }
                        
                    </div>
                </article>`
            })
        })
//     `<article class="article">
//     <div class="article__top author-article">
//         <div class="author-article_avatar">
//             <img src="img/standart_female.jpg" alt="">
//         </div> 
//         <div class="article__top_right">
//             <div class="author-article_username">
//                 Пользователь 1
//             </div>
//             <date class="article__time">
//                 11:34
//             </date>
//         </div>
//     </div>
//     <div class="article__center">
//         <div class="article__title">
//             <div>
//                 Тема 1. Загрязнение воды
//             </div>
//         </div>
//         <div class="article__text">
//             Загрязнение воды является достаточно мощной проблемой, чтобы поставить мир на грань разрушения. Вода является легким растворителем, позволяющим большинству загрязняющих веществ легко растворяться в ней и загрязнять ее. В первую очередь непосредственно страдают организмы и растительность, для которых вода являются средой обитания. Во вторую – люди, которыми прямо или опосредованно контактируют с зараженными источниками воды.
//         </div>
//         <div class="article__img">
//             <img src="https://static.tildacdn.com/tild3461-6437-4536-b566-343365366362/landscape-tree-water.jpg" alt="">
//         </div>
//     </div>
// </article>`
}

const logEmail = document.getElementById('logEmail');
const logPassword = document.getElementById('logPassword');
const logPerson = document.getElementById('logPerson');

if (logPerson) {
    logPerson.addEventListener('click', e => {
        e.preventDefault();
        const data = {
            email: logEmail.value,
            password: logPassword.value
        };

        fetch('http://eco/login', {
            method: 'POST',
            body: JSON.stringify(data)
        })
        .then(res => res.json())
        .then(res => {
            console.log(res.status)
            if (res.status) {
                localStorage.setItem('email', res.email)
                localStorage.setItem('session', res.session_token)
            }
        })
    })
}

const registrationEmail = document.getElementById('registrationEmail');
const registrationPassword = document.getElementById('registrationPassword');
const registrationLogin = document.getElementById('registrationLogin');
const registrationButton = document.getElementById('registrationButton');

const authorizationSubtitle = document.querySelector('.authorization__subtitle');

if (registrationButton) {
    registrationButton.addEventListener('click', e => {
        const errors = [];
        if (registrationEmail.value < 5) {
            errors.push('Слишком короткая почта');
        }

        if (registrationLogin.value < 4) {
            errors.push('Логин меньше 4 символов');
        }

        if(registrationPassword.value < 8) {
            errors.push('Пароль меньше 8 символов');
        }

        if (errors[0]) {
            authorizationSubtitle.style = `color: red; font-weight: 700`;
            authorizationSubtitle.textContent = errors[0];
            return;
        }
    }) 
}