<template>
    <div>
        <!-- Main content -->
        <section class="content mt-4">
        <div class="container-fluid">
            <div class="row">
            <div class="col-md-3">
                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle"
                        src="/img/AdminLTELogo.png"
                        alt="User profile picture">
                    </div>
                    <h3 class="profile-username text-center">{{ this.form.name }}</h3>

                    <p class="text-muted text-center">ID: {{ this.form.number}}</p>

                    <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                        <b>Program</b> <a class="float-right">BSIR</a>
                    </li>
                    <li class="list-group-item">
                        <b>Status</b> <a class="float-right">Regular</a>
                    </li>
                    <li class="list-group-item">
                        <b>Level</b> <a class="float-right">1st Year</a>
                    </li>
                    </ul>

                    <!-- <a href="#" class="btn btn-primary btn-block"><b>Edit</b></a> -->
                </div>
                <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- About Me Box -->
                <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">About Me</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <strong><i class="fas fa-birthday-cake mr-1"></i> Birth Date</strong>

                    <p class="text-muted">
                    {{ this.form.birthdate }}
                    </p>
                    <hr>

                    <strong><i class="fas fa-map-marker-alt mr-1"></i> Place of Birth</strong>

                    <p class="text-muted">{{ this.form.placeOfBirth }}</p>

                    <hr>

                    <strong><i class="fas fa-map-marked-alt mr-1"></i> Address</strong>

                    <p class="text-muted">{{ this.form.address }}</p>

                    <hr>

                    <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                    <p class="text-muted">
                        <span class="tag tag-danger">UI Design</span>
                        <span class="tag tag-success">Coding</span>
                        <span class="tag tag-info">Javascript</span>
                        <span class="tag tag-warning">PHP</span>
                        <span class="tag tag-primary">Node.js</span>
                    </p>
                </div>
                <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="card">
                <div class="card-header p-2">
                    <ul class="nav nav-pills">
                        <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Edit Informantion</a></li>
                        <!-- <li class="nav-item"><a class="nav-link" href="#activity" data-toggle="tab">Payment History</a></li>
                        <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Examination Schedules</a></li> -->
                   
                    </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <div class="tab-content" disabled>
                        <div class="active tab-pane" id="settings">
                        <form class="form-horizontal">
                        <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputName" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName2" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                            <div class="col-sm-10">
                            <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                            <div class="checkbox">
                                <label>
                                <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                                </label>
                            </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="btn btn-danger">Submit</button>
                            </div>
                        </div>
                        </form>
                    </div>
         

                   
                    <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div><!-- /.card-body -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
</template>

<script>
    export default {
        data(){
            return {
                form: new Form({
                    id:'',
                    number: '',
                    name: '',
                    email: '',
                    password: '',
                    type: '',
                    active: '',
                    firstName: '',
                    lastName: '',
                    middleName: '',
                    extensionName: '',
                    image: '',
                    gender: '',
                    civilStatus: '',
                    contacts: '',
                    address: '',
                    RFID: '',
                    birthdate: '',
                    placeOfBirth: '',
                    activeUser: '',
                })
            }
        },
        methods:{
            loadUserData(){

            }
        },
        created(){
            axios.get('api/profile')
            .then(({ data }) => (this.form.fill(data)));
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
