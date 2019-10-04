<template>
    <div class="footer-block-contant">
        <form id="comment-form" @submit.prevent="onSubmit">
            <div class="row mt-30">
                <div class="col-md-6 mb-30">
                    <input type="text" name="name" v-model="form.name" :class="{'has-error': errors.name}" placeholder="Имя" required>
                </div>
                <div class="col-md-6 mb-30">
                    <input type="email" name="email" v-model="form.email" :class="{'has-error': errors.email}" placeholder="Email" required>
                </div>
                <div class="col-12 mb-30">
                    <textarea cols="30" name="message" v-model="form.message" rows="3" placeholder="Комментарий" required></textarea>
                </div>
                <input name="record_id" type="hidden">
                <div class="col-12">
                    <button class="btn btn-color" name="submit" type="submit">Оставить комментарий
                    </button>
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
                    message: null,
                    record_id: null,
                },
                errors: [],
            };
        },
        mounted() {
            this.form.record_id = this.$attrs.record;
        },
        methods: {
            onSubmit() {
                this.isLoading = true;
                axios.post("/api/v1/comment", this.form)
                    .then(() => this.setSuccessResponse())
                    .catch(({response}) => this.setErrorResponse(response));
            },
            setSuccessResponse() {
                this.isLoading = false;
                this.form.name = null;
                this.form.email = null;
                this.form.message = null;
                this.form.record_id = null;
                this.errors = [];

                swal({
                    title: "Отлично!",
                    text: "Комментарий отправлен!",
                    icon: "success",
                });
            },
            setErrorResponse(response) {
                this.isLoading = false;
                this.errors = response.data.errors;

                swal({
                    title: "Ошибка!",
                    text: "Возникли проблемы во время отправки сообщения!",
                    icon: "error",
                });
            },
        }
    }
</script>
