/**
 * First we will load all of this project's JavaScript dependencies which
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh React component instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

function notification(text, type) {
    new Noty({
        type: type,
        layout: 'topRight',
        text: text,
        animation: {
            open: function (promise) {
                let n = this;
                new Bounce()
                    .translate({
                        from: {x: 450, y: 0}, to: {x: 0, y: 0},
                        easing: "bounce",
                        duration: 1000,
                        bounces: 4,
                        stiffness: 3
                    })
                    .scale({
                        from: {x: 1.2, y: 1}, to: {x: 1, y: 1},
                        easing: "bounce",
                        duration: 1000,
                        delay: 100,
                        bounces: 4,
                        stiffness: 1
                    })
                    .scale({
                        from: {x: 1, y: 1.2}, to: {x: 1, y: 1},
                        easing: "bounce",
                        duration: 1000,
                        delay: 100,
                        bounces: 6,
                        stiffness: 1
                    })
                    .applyTo(n.barDom, {
                        onComplete: function () {
                            promise(function (resolve) {
                                resolve();
                            })
                        }
                    });
            },
            close: function (promise) {
                let n = this;
                new Bounce()
                    .translate({
                        from: {x: 0, y: 0}, to: {x: 450, y: 0},
                        easing: "bounce",
                        duration: 500,
                        bounces: 4,
                        stiffness: 1
                    })
                    .applyTo(n.barDom, {
                        onComplete: function () {
                            promise(function (resolve) {
                                resolve();
                            })
                        }
                    });
            }
        }
    }).show();
}

$(document).ready(function () {
    $('#subscribe-form').on('submit', function (event) {
        event.preventDefault();

        let form = $(this);
        let data = new FormData(form[0]);

        axios.post('/api/v1/subscribe', data)
            .then(function () {
                notification('Спасибо за подписку, новости будут только важные!', 'success');

                document.getElementById('subscribe-form').reset()
            })
            .catch(function () {
                notification('Подписка не оформлена, либо Вы уже подписаны!', 'error');
            });
    });

    $('#comment-form').on('submit', function (event) {
        event.preventDefault();

        let form = $(this);
        let data = new FormData(form[0]);

        axios.post('/api/v1/comment', data)
            .then(function () {
                notification('Спасибо за Ваш комментарий!', 'success');

                document.getElementById('comment-form').reset()
            })
            .catch(function () {
                notification('При отправке коментария произошла ошибка, либо Вы отправляете их слишком часто!', 'error');
            });
    });
});
