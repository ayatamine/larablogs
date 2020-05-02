<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                       home component
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                posts:{}
            }
        },
        mounted() {
            console.log('Component mounted.')
            this.getPosts();
        },
        methods:{
            getPosts(){
                axios.get('/api/posts')
                .then(res => console.log(res))
                .then(err => console.log(err))
            }
        }
    }
</script>
