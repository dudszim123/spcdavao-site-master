<template>
    <div>
        <div class="container">
           
            <div class="col-md-12 mt-5">
            <div class="card card-widget widget-user">
              <div class="widget-user-header text-white" style="background: url('../img/welcome_applicant.jpg') center center; background-repeat: no-repeat;background-size: 100% 100%;">
              
              </div>
                <div class="d-flex justify-content-center">
                    <div class="row mt-4">
                         <p class="lead">We will contact you soon with regards to your application status. Thank you.</p>
                    </div>
                </div>
              </div>
            <a class="btn btn-lg btn-primary" href="/">Back to home page</a>
          </div>
        </div>
    </div>
</template>
<style scoped>
.widget-user .widget-user-header{
    height: 335px; 
}
</style>
<script>
    export default {
        data(){
            return {
              
            }
        },
        methods:{
            loadUserData(){

            }
        },
        created(){
          
        },
        mounted() {
            console.log('Thank you Applicant Component mounted.')
        }
    }
</script>
