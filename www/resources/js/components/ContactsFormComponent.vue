<template>
    <div class="footer-block-contant">
        <form id="contacts-form" name="contactform" @submit.prevent="onSubmit">
            <div class="row">
                <div class="col-md-6 mb-30">
                    <input type="text" required v-model="form.name" :class="{'has-error': errors.name}" placeholder="Введите Ваше имя" name="name">
                </div>
                <div class="col-md-6 mb-30">
                    <input type="email" required v-model="form.email" :class="{'has-error': errors.email}" placeholder="Введите Ваш email" name="email">
                </div>
                <div class="col-12 mb-30">
                        <textarea required v-model="form.description" :class="{'has-error': errors.description}" placeholder="Что именно Вас интересует?" rows="3" cols="30" name="description"></textarea>
                </div>
                <div class="col-12">
                    <div class="align-center">
                        <button id="submit-contacts" type="submit" name="submit" class="btn btn-color">
                            Отправить
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                isLoading: false,
                form: {
                    name: null,
                    email: null,
                    description: null,
                },
                errors: [],
            };
        },
        methods: {
            onSubmit() {
                this.isLoading = true;
                axios.post("/api/v1/contacts", this.form)
                    .then(() => this.setSuccessResponse())
                    .catch(({response}) => this.setErrorResponse(response));
            },
            setSuccessResponse() {
                this.isLoading = false;
                this.form.name = null;
                this.form.email = null;
                this.form.description = null;
                this.errors = [];

                swal({
                    title: "Отлично!",
                    text: "Запрос отправлен!",
                    icon: "success",
                });
            },
            setErrorResponse(response) {
                this.isLoading = false;
                this.errors = response.data.errors;

                swal({
                    title: "Ошибка!",
                    text: "Указан не верный email или email уже зарегистрирован!",
                    icon: "error",
                });
            },
        }
    }
</script>
