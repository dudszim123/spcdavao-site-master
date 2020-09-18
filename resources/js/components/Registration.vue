<style scoped>
.bottomleft {
  position: absolute;
  bottom: 8px;
  left: 16px;
  font-size: 40px;
  color: rgb(255, 255, 255);
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
    /* opacity: 0.5; */
}  
.spc-logo{
    height: auto;
    width: 55px;
    opacity: 1;
}
.form-group.required .control-label:after {
  content:"*";
  color:red;
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
                            <a href="/">
                                <img class="card-img-top img-fluid" alt="Responsive image" src="/img/spc_building.jpg">
                                <div class="bottomleft"><img class="spc-logo" src="/img/spc_logo.png" alt=""> SPC Registration</div>
                            </a>
                        </div>
                        <div class="mb-6">   
                            <div class="modal-body">
                                <div class="card-body">   
                                    <div class="form-group required">
                                        <label for="applicantType" class="control-label">Applicant Category </label>
                                        <select v-model="form.applicantType" class="form-control" name="applicantType" id="applicantType">
                                            <option value="">Choose</option>
                                            <option value="Preschool" disabled>Preschool</option>
                                            <option value="Grade School" disabled>Grade School</option>
                                            <option value="Junior High" disabled>Junior High</option>
                                            <option value="Senior High" disabled>Senior High</option>
                                            <option value="Vocational" disabled>Vocational</option>
                                            <option value="College" disabled>College</option>
                                            <option value="Masters/Doctoral">Masters/Doctoral</option>
                                            <!-- <option value="Doctorate" disabled>Doctorate</option> -->
                                        </select>
                                    </div>
                                    <div v-show="form.applicantType == ''">   
                                        <welcome-applicant></welcome-applicant>
                                    </div>
                                    <div v-show="form.applicantType == 'Masters/Doctoral'">   
                                        <masteral-form :form="form"></masteral-form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
    </div>
</template>
<script>
    export default {
        data(){
            return {
                form: new Form({
                    name:'',
                    email:'',
                    password:'',
                    password_confirmation: '',
                    firstName:'',
                    middleName:'',
                    lastName:'',
                    extensionName:'',
                    gender:'',
                    birthdate:'',
                    address:'',
                    boardingHouseAddress:'',
                    contact1:'',
                    contact2:'',
                    previousSchool:'',
                    program_id:'',
                    applicantType: '',
                    typeOfStudent: '',
                    civilStatus: '',
                    birthOrder: '',
                    height: '4\' 0',
                    weight: '',
                    religion: 'NONE',
                    nationality: 'NONE',
                    dualCitizenship: 0,
                    tribe: 'NONE',
                    bloodType: 'NONE',
                    reasonEnrollingAtSPC: '',
                    FGplt: 0,
                    FGps: 0,
                    FGdf: 0,
                    FDdm: 0,
                    FGfr: 0,
                    FGmr: 0,
                    FGfo: 0,
                    FGmo: 0,
                    fatherName: '',
                    fatherAddress: '',
                    fatherOccupation: '',
                    fatherContact: '',
                    motherName: '',
                    motherAddress: '',
                    motherOccupation: '',
                    motherContact: '',
                    scholasticNameOfSchoolElementary: '',
                    scholasticPubPriElementary: '',
                    scholasticYearGraduatedElementary: '',
                    scholasticHonorElementary: '',
                    scholasticNameOfSchoolJunior: '',
                    scholasticPubPriJunior:'',
                    scholasticYearGraduatedJunior: '',
                    scholasticNameOfSchoolSenior: '',
                    scholasticPubPriSenior: '',
                    scholasticYearGraduatedSenior: '',
                    scholasticHonorSenior: '',
                    scholasticTrackStrand: '',
                    scholasticNameOfSchoolCollege: '',
                    scholasticPubPriCollege: '',
                    scholasticYearGraduatedCollege:'',
                    scholasticHonorCollege: '',
                    scholasticProgram: '',
                    varsity1:'',
                    varsity2:'',
                    varsity3:'',
                    varsity4:'',
                    varsity5:'',
                    varsity6:'',
                    personContactName: '',
                    personContactRelationship:'',
                    personContactAddress:'',
                    personContactContact:'',
                    reportCard:null,
                    honorableDismissal:null,
                    medicalCertificate:null,
                    shortEssay: null,
                    tor: null,
                    prcLicense: null,
                    thesisDescription: null,
                    birthCertificate: null,
                    marriedContract: null,
                    paymentReceipt: null,
                    noa: null
                }),
            }
        },
        methods:{
           
        },
        mounted() {
            console.log('Registration Component mounted.')
            
        },
        created(){
           
        }
    }
</script>

