<style scoped>
.bottomleft {
  position: absolute;
  bottom: 8px;
  left: 16px;
  font-size: 40px;
  color: rgb(21, 31, 70);
  font-weight: bolder;
}
.card-primary{
    margin-top: 40px;
}
.card-img {
    position: relative;
}
img{ 
    height: 350px;
    background-size: cover;
    opacity: 0.5;
}  
.spc-logo{
    height: auto;
    width: 55px;
     opacity: 1;
}
</style>
<template>
    <div>
        <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-img mb-4">
                            <img class="card-img-top img-fluid" alt="Responsive image" src="/img/spc_building.jpg">
                            <div class="bottomleft"><img class="spc-logo" src="/img/spc_logo.png" alt=""> SPC Registration Information</div>
                        </div>
                        <div class="mb-4">   
                            <vue-good-wizard 
                            :steps="steps"
                            :onNext="nextClicked" 
                            :onBack="backClicked">
                                <div slot="page1">
                                    <h4>Step 1</h4>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <select v-model="form.statusStudent" id="statusStudent" name="statusStudent" class="form-control" :class="{ 'is-invalid': form.errors.has('statusStudent') }">
                                                    <option value="" disabled selected>STATUS STUDENT</option>
                                                    <option value="New">New</option>
                                                    <option value="Old">Old</option>
                                                    <option value="Transferee">Transferee</option>
                                                </select>
                                                <has-error :form="form" field="statusStudent"></has-error>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <!-- <label>Category</label> -->
                                                <select v-model="form.category" id="category" name="category" class="form-control" :class="{ 'is-invalid': form.errors.has('category') }">
                                                    <option value="" disabled selected>LEVEL</option>
                                                    <option value="Preschool">Preschool</option>
                                                    <option value="Grade School">Grade School</option>
                                                    <option value="High School">High School</option>
                                                    <option value="Junior High School">Junior High School</option>
                                                    <option value="Senior High School">Senior High School</option>
                                                    <option value="College">College</option>
                                                    <option value="Mastera">Masteral</option>
                                                    <option value="Doctorate">Doctorate</option>
                                                    <option value="Vocational">Vocational</option>
                                                </select>
                                                <has-error :form="form" field="category"></has-error>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="lastname">Last Name</label>
                                        <input v-model="form.firstName" type="text" class="form-control"
                                        :class="{ 'is-invalid': form.errors.has('lastname')}" name="lastname" id="lastname">
                                        <has-error :form="form" field="lastname"></has-error>
                                    </div>
                                    <div class="form-group">
                                        <label for="firstName">First Name</label>
                                        <input v-model="form.firstName" type="text" class="form-control"
                                        :class="{ 'is-invalid': form.errors.has('firstName')}" name="firstName" id="firstName">
                                        <has-error :form="form" field="firstName"></has-error>
                                    </div>
                                    <div class="form-group">
                                        <label for="middleName">Middle Name</label>
                                        <input v-model="form.middleName" type="text" class="form-control"
                                        :class="{ 'is-invalid': form.errors.has('middleName')}" name="middleName" id="middleName">
                                        <has-error :form="form" field="middleName"></has-error>
                                    </div>
                                    <div class="form-group">
                                        <!-- <label for="extensionName">Extension Name</label> -->
                                        <select v-model="form.extensionName" id="extensionName" name="extensionName" 
                                        class="form-control" :class="{ 'is-invalid': form.errors.has('extensionName')}">
                                            <option value="" disabled selected>Extension Name</option>
                                            <option value="NONE">NONE - Extension Name</option>
                                            <option value="Jr.">Jr.</option>
                                            <option value="I">I</option>
                                            <option value="II">II</option>
                                            <option value="III">III</option>
                                            <option value="IV">IV</option>
                                            <option value="V">V</option>
                                        </select>
                                        <has-error :form="form" field="extensionName"></has-error>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input v-model="form.email" type="email" name="email" class="form-control" 
                                        :class="{ 'is-invalid': form.errors.has('email')}" id="email">
                                        <has-error :form="form" field="email"></has-error>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="birthdate">Birth Date</label>
                                                <input v-model="form.birthdate" class="form-control" type="date" id="birthdate" name="birthdate"
                                                :class="{ 'is-invalid': form.errors.has('birthdate')}">
                                                <has-error :form="form" field="birthdate"></has-error>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="gender">Gender</label>
                                                <select v-model="form.gender" id="gender" name="gender" class="form-control" :class="{ 'is-invalid': form.errors.has('gender') }">
                                                    <option value="" disabled selected>GENDER</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                                <has-error :form="form" field="gender"></has-error>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="Address">Address</label>
                                        <textarea v-model="form.address" class="form-control" rows="2" 
                                        name="address" id="address"></textarea>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="contacts1">Contact #1</label>
                                                <input v-model="form.contacts1" type="text" name="contacts1" class="form-control" 
                                                :class="{ 'is-invalid': form.errors.has('contacts1')}" id="contacts1">
                                                <has-error :form="form" field="contacts1"></has-error>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="contacts2">Contact #2</label>
                                                <input v-model="form.contacts2" type="text" name="contacts2" class="form-control" 
                                                :class="{ 'is-invalid': form.errors.has('contacts')}" id="contacts2">
                                                <has-error :form="form" field="contacts2"></has-error>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <!-- <label for="gender">Program</label> -->
                                        <select v-model="form.gender" id="gender" name="gender" class="form-control" :class="{ 'is-invalid': form.errors.has('gender') }">
                                            <option value="" disabled selected>Program</option>
                                            <option value="prog-1">Program 1</option>
                                            <option value="prog-2">Program 2</option>
                                        </select>
                                        <has-error :form="form" field="gender"></has-error>
                                    </div>
                                </div>
                                <div slot="page2">
                                    <h4>Step 2 </h4>
                                    <h4><u>The applicant submit online scanned or screenshot (clear copies) of required documents, as follows:</u></h4>
                                    <div class="form-group">
                                        <label for="exampleInputFile"><u>Grade 10 Report Card</u> for in-coming SHS: <u>HS Card or Grade 12 Report Card</u> for in-coming College Student; and <u>Transcript of Records and Honorable Dismissal</u> for Transferees and Applicants for Graduate School.</label>
                                        <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile" multiple>
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="">Upload</span>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile"><u>Medical Certificate</u> stating applicant is Physically Fit, together with results of Laboratory Examinations: Chest X-ray, fecalysis, and urinalysis*. <u>(For College students Only)</u></label>
                                        <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile" multiple>
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="">Upload</span>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile"><u>NOA</u> Return Slip Duly Accomplished and signed by Parent and Student. For Graduate School Student, signature of student is sufficient.</label>
                                        <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile" multiple>
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="">Upload</span>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div slot="page3">
                                    <h4>Step 3</h4>
                                    <p>This is step 3</p>
                                </div>
                                <div slot="page4" >
                                    <h4>Step 4</h4>
                                    <p>This is step 4</p>
                                </div>
                            </vue-good-wizard>
                        </div>
                  
                    </div>
                </div>
            </div>
        </div>
        </section>
    </div>
</template>
<script>
import Vue from 'vue';
import VueGoodWizard from 'vue-good-wizard';
Vue.use(VueGoodWizard);
    export default {
         name: 'demo',
        data(){
            return {
                form: new Form({
                    name:'',
                    firstName:'',
                    middleName:'',
                    lastName:'',
                    extensionName:'',
                    gender:'',
                    birthdate:'',
                    address:'',
                    contact1:'',
                    contact2:'',
                    previousSchool:'',
                    program_id:'',
                    category:'',
                    statusStudent:'',
                    statusEnrollment:'',
                }),
                programs :{},
                steps: [
                    {
                        label: 'Student Information',
                        slot: 'page1',
                    },
                    {
                        label: 'File Attachment',
                        slot: 'page2',
                    },
                    {
                        label: 'Review',
                        slot: 'page3',
                    },
                    {
                        label: 'Apply',
                        slot: 'page4', 
                        finalStepLabel : "asdaw"
                    }
                ],
            }
        },
        methods:{
            createMode(){
                this.$Progress.start();
                this.form.post('/registration-form')
                .then(() => {
                    Swal.fire(
                        'Thank you for your submission',
                        'Your registration form will process immediately.',
                        'success'
                    );
                    this.form.reset();
                    this.$Progress.finish();
                }).catch((error) => {
                    Swal.fire(
                        'Whoops!',
                        'Something wrong while saving.\nPlease contact the administrator.',
                        'warning'
                    );
                    this.$Progress.fail();
                });
            },
            nameData(){
                this.form.name = this.form.lastName + ', '+ this.form.firstName+' '+this.form.middleName;
            },
            nextClicked(currentPage) {
                console.log('next clicked', currentPage)
                return true; //return false if you want to prevent moving to next page
             
              
            },
            backClicked(currentPage) {
                console.log('back clicked', currentPage);
                return true; //return false if you want to prevent moving to previous page
            },
            onComplete: function(){
                alert('Yay. Done!');
            }
        },
        mounted() {
            console.log('Registration Component mounted.')
        }
    }
</script>

