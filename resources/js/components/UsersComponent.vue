<template>
    <div>
          <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">List of Users</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <button type="button" @click="newModal" class="btn  btn-success btn-sm" data-toggle="modal" data-target="#add-modal">Add New User <i class="fas fa-user-plus"></i></button>
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
                                            <th>ID</th>
                                            <th>User Name</th>
                                            <th>Type</th>
                                            <th>Status</th>
                                            <th>Created</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="user in users" :key="user.number">
                                            <td>{{ user.number }}</td>
                                            <td>{{ user.name }}</td>
                                            <td>{{ user.type | ToUpperCaseText() }}</td>
                                            <td>{{ user.activeUser | ActiveText() }}</td>
                                            <td>{{ user.created_at | myDate }}</td>
                                            <td>
                                                <a href="#" @click="editModal(user)"><i class="fas fa-edit pr-2"></i></a>
                                                <a href="#" @click="deleteUser(user.id)"><i class="fas fa-trash-alt pr-2"></i></a>
                                                <a href="#"><i class="fas fa-key"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div><!--/. container-fluid -->
        </section>
        <!-- /.content -->
        <div class="modal fade" id="add-modal">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 v-show="editMode" class="modal-title">Update user information</h4>
                        <h4 v-show="!editMode" class="modal-title">Add New</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <!-- form start -->
                    <form @submit.prevent="editMode ? updateUser() : createUser()" @keydown="form.onKeydown($event)">
                        <div class="modal-body">
                            <div class="card-body">
                              
                                <div v-show="editMode" class="form-group">
                                    <div class="custom-control custom-switch">
                                        <input v-model="form.activeUser" type="checkbox" name="activeUser" class="custom-control-input" id="activeUser"
                                        :class="{ 'is-invalid': form.errors.has('activeUser')}" >
                                        <label class="custom-control-label" for="activeUser">Active</label>
                                         <has-error :form="form" field="activeUser"></has-error>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="number">ID</label>
                                    <input v-model="form.number" type="text" class="form-control"
                                    :class="{ 'is-invalid': form.errors.has('number')}" name="number" id="number" placeholder="ID" :disabled="editMode">
                                    <has-error :form="form" field="number"></has-error>
                                </div>
                                <div class="form-group">
                                    <input style="text-transform: uppercase" v-model="form.name" type="text" name="name" class="form-control" 
                                    :class="{ 'is-invalid': form.errors.has('name')}" id="name" disabled>
                                    <has-error :form="form" field="name"></has-error>
                                </div>
                                <div class="form-group">
                                    <label for="lastName">Last Name</label>
                                    <input style="text-transform: uppercase" v-model="form.lastName" @keydown="setName" type="text" name="lastName" class="form-control"
                                    :class="{ 'is-invalid': form.errors.has('lastName')}" id="lastName" placeholder="Last Name">
                                    <has-error :form="form" field="lastName"></has-error>
                                </div>
                                <div class="form-group">
                                    <label for="firstName">First Name</label>
                                    <input style="text-transform: uppercase" v-model="form.firstName" @keydown="setName" type="text" name="firstName" class="form-control" 
                                    :class="{ 'is-invalid': form.errors.has('firstName')}" id="firstName" placeholder="First Name">
                                    <has-error :form="form" field="firstName"></has-error>
                                </div>
                                <div class="form-group">
                                    <label for="middleName">Middle Name</label>
                                    <input style="text-transform: uppercase" v-model="form.middleName" @keydown="setName" type="text" name="middleName" class="form-control" 
                                    :class="{ 'is-invalid': form.errors.has('middleName')}" id="middleName" placeholder="Middle Name" uppercase>
                                    <has-error :form="form" field="middleName"></has-error>
                                </div>
                                 <div class="form-group">
                                    <label>Extension Name</label>
                                    <select v-model="form.extensionName" @change="setName" class="form-control" name="extensionName" id="extensionName" 
                                    :class="{ 'is-invalid': form.errors.has('extensionName')}" >
                                        <option value=""></option>
                                        <option value="JR.">JR.</option>
                                        <option value="I">I</option>
                                        <option value="II">II</option>
                                        <option value="III">III</option>
                                        <option value="IV">IV</option>
                                        <option value="V">V</option>
                                        <option value="VI">VI</option>
                                        <option value="VII">VII</option>
                                        <option value="VIII">VIII</option>
                                        <option value="IX">IX</option>
                                        <option value="X">X</option>
                                    </select>
                                    <has-error :form="form" field="extensionName"></has-error>
                                </div>      
                                <div class="form-group">
                                    <label>User Type</label>
                                    <select v-model="form.type" class="form-control" name="type" id="type" 
                                    :class="{ 'is-invalid': form.errors.has('type')}" >
                                        <option value="">Type</option>
                                        <option value="Admin">Admin</option>
                                        <option value="Student">Registrar</option>
                                        <option value="Student">Admission</option>
                                        <option value="Student">Human Resource</option>
                                        <option value="Student">Student</option>
                                    </select>
                                    <has-error :form="form" field="type"></has-error>
                                </div>                       
                                <div class="form-group">
                                    <label for="Address">Address</label>
                                    <textarea style="text-transform: uppercase" v-model="form.address" class="form-control" rows="3" 
                                    name="address" id="address" 
                                    placeholder="Address"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input v-model="form.email" type="email" name="email" class="form-control" 
                                    :class="{ 'is-invalid': form.errors.has('email')}" id="email" placeholder="Email">
                                    <has-error :form="form" field="email"></has-error>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input v-model="form.password" type="password" name="password" class="form-control" autocomplete="new-password"
                                    :class="{ 'is-invalid': form.errors.has('password')}" id="password" placeholder="Password">
                                    <has-error :form="form" field="password"></has-error>
                                </div>
                                <div class="form-group">
                                    <label for="password-confirm">Confirm Password</label>
                                    <input v-model="form.password_confirmation" type="password" name="password_confirmation" class="form-control" autocomplete="new-password"
                                    id="password_confirmation" placeholder="Confirm Password">
                                    <has-error :form="form" field="password"></has-error>
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <select v-model="form.gender" class="form-control" name="gender" id="gender" 
                                        :class="{ 'is-invalid': form.errors.has('gender')}" >
                                            <option value="">Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                        <has-error :form="form" field="contacts"></has-error>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>Civil Status</label>
                                        <select v-model="form.civilStatus" class="form-control" name="civilStatus" id="civilStatus"
                                        :class="{ 'is-invalid': form.errors.has('civilStatus')}" >
                                            <option value="">Civil Status</option>
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                            <option value="Separated">Separated</option>
                                            <option value="Widowed">Widowed</option>
                                        </select>
                                        <has-error :form="form" field="contacts"></has-error>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="contacts">Contact #</label>
                                    <input v-model="form.contacts" type="text" name="contacts" class="form-control" 
                                    :class="{ 'is-invalid': form.errors.has('contacts')}" id="contacts" placeholder="Contact">
                                    <has-error :form="form" field="contacts"></has-error>
                                </div>
                                <div class="form-group">
                                    <label for="RFID">RF#</label>
                                    <input v-model="form.RFID" type="text" name="RFID" class="form-control" 
                                    :class="{ 'is-invalid': form.errors.has('RFID')}" id="RFID" placeholder="RD#">
                                    <has-error :form="form" field="RFID"></has-error>
                                </div>
                            </div>
                       
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fas fa-window-close"></i> Close</button>
                            <button v-show="editMode" type="submit" class="btn btn-primary">Update <i class="fas fa-save"></i></button>
                            <button v-show="!editMode" type="submit" class="btn btn-primary">Create <i class="fas fa-save"></i></button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
      <!-- /.modal -->
    </div>
</template>
<script>
    export default {
        data(){
            return {
                editMode: false,
                users: {},
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
                    activeUser: '',
                    password_confirmation: ''
                })
            }
        },
        methods: {
            loadData(){
                axios.get('api/user').then(({data}) => (this.users = data.data));
            },
            newModal(){
                this.editMode = false;
                this.form.clear ();
                this.form.reset();
                $('#add-modal').modal('show');
            },
            editModal(user){
                this.editMode = true;
                this.form.clear ();
                this.form.reset();
                $('#add-modal').modal('show');
                $('#number')
                this.form.fill(user);
            },
           
            createUser(){
                this.$Progress.start();
                this.form.post('api/user')
                .then(()=>{
                    Fire.$emit('AfterCreate');
                    $('#add-modal').modal('hide');
                    toast.fire({
                        icon: 'success',
                        title: 'New User created successfully'
                    });
                    this.$Progress.finish();
                })
                .catch(()=>{
                   this.$Progress.fail();
                });
             
            },
            updateUser(){
                this.$Progress.start();
                this.form.put('api/user/'+this.form.id)
                .then(()=>{
                    Fire.$emit('AfterCreate');
                    $('#add-modal').modal('hide');
                    toast.fire({
                        icon: 'success',
                        title: 'User information updated successfully'
                    });
                    this.$Progress.finish();
                })
                .catch(()=>{
                    this.$Progress.fail();
                });
            },
            deleteUser(id){
                swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                    if (result.value) {
                        this.$Progress.start();
                        this.form.delete('api/user/'+id)
                        .then(()=>{
                            swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                            )
                            this.$Progress.finish();
                            Fire.$emit('AfterCreate');
                        })
                        .catch(()=>{
                            swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Something went wrong!'
                            });
                            this.$Progress.fail();
                        });
                    }else{this.$Progress.fail();}
                })
            },
            setName(){
                this.form.name = this.form.lastName+', '+this.form.firstName+' '+this.form.extensionName+' '+this.form.middleName;
            },
        },
        created(){
            this.$Progress.start();
            this.loadData();
            this.$Progress.finish();
            Fire.$on('AfterCreate',()=>{
                this.loadData();
            });
        },
        mounted() {
        }
    }
</script>

