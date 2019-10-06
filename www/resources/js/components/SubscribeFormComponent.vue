<template>
    <div class="footer-block-contant">
        <form @submit.prevent="onSubmit">
            <div class="field">
                <input type="text" v-model="form.email" placeholder="Email" :class="{'has-error': errors.email}">
            </div>
            <div class="field">
                <button title="Подписаться" class="btn-color">Подписаться</button>
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
                    email: null,
                },
                errors: [],
            };
        },
        methods: {
            onSubmit() {
                this.isLoading = true;
                axios.post("/api/v1/subscribe", this.form)
                    .then(() => this.setSuccessResponse())
                    .catch(({response}) => this.setErrorResponse(response));
            },
            setSuccessResponse() {
                this.isLoading = false;
                this.form.email = null;
                this.errors = [];

                swal({
                    title: "Отлично!",
                    text: "Подписка оформлена!",
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
