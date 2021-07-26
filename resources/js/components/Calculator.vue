<template>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <loading v-if="isLoading"></loading>
                            <h5 class="card-title text-center">Enter the number</h5>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Number 1" v-model="form.number_1">
                                <small v-if="this.form.errors.has('number_1')" v-text="form.errors.get('number_1')" class="form-text text-danger"></small>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Number 2" v-model="form.number_2">
                                <small v-if="this.form.errors.has('number_2')" v-text="form.errors.get('number_2')" class="form-text text-danger"></small>
                            </div>
                            <button type="submit" :disabled="isLoading" @click="submit" class="btn btn-primary btn-block btn-danger"> Sum</button>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-8 ">
                            <p class="b-t"></p>
                            <h5 class="card-title text-center">Results</h5>
                            <p class="form-control text-center">{{result}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import {Form} from "../Form";
    export default {
        data() {
            return {
                form: new Form({
                    number_1: '',
                    number_2: ''
                }),
                result: '',
            };
        },

        computed: {
            disableForm() {
                return !!(this.form.errors.any())
            },

            isLoading() {
                return !!(this.form.loading || this.loading)
            }
        },

        methods: {
            async submit() {
                try {
                    const response = await this.form.post('/sum');
                    this.result = response.data;
                } catch(errors) {
                    console.error('cannot make login')
                }
            },
        },

        created() {
        }
    }
</script>
