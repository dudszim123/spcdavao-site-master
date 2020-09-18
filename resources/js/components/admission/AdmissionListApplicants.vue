<template>
     <div>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">list of applicants</h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                              
                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Gender</th>
                                            <th>Applicant Type</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="item in applicants" :key="item.id">
                                            <td>{{ item.name | ToUpperCaseText() }}</td>
                                            <td>{{ item.gender }}</td>
                                            <td>{{ item.applicantType }}</td>
                                            <td>{{ item.name }}</td>
                                            <td>
                                                <span class="badge"  v-bind:class="{ 
                                                        'badge-warning': item.applicantStatus == 'Pending',
                                                        'badge-info': item.applicantStatus == 'Processing', 
                                                        'badge-danger': item.applicantStatus == 'Canceled', 
                                                    }">{{ item.applicantStatus }}
                                                </span></td>
                                            <td>
                                                <router-link :to="{ name: 'ApplicantSubmitedDataView', params: { item } }"><i class="fas fa-eye pr-2"></i></router-link>
                                                <a href="#"><i class="fas fa-key pr-2"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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
                applicants: {},
                form: new Form({
                    id:'',
                    name:'',
                    gender:'',
                    applicantType: '',
                    applicantStatus:'',
                    reportCard: '',
                    honorableDismissal:'',
                    medicalCertificate:'',
                    shortEssay: '',
                    tor: '',
                    prcLicense: '',
                    thesisDescription: '',
                    birthCertificate: '',
                    marriedContract: '',
                    paymentReceipt: '',
                    noa: ''
                })
            }
        },
        methods:{
            loadApplicantData(){
                axios.get('api/admission').then(({data}) => (this.applicants = data));
                console.log(this.applicants);
            },
        },
        created(){
            
        },
        mounted() {
            this.loadApplicantData();
            console.log('Component mounted.')
        }
    }
</script>
