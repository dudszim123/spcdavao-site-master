<template>
	<div>
		<div class="col-md-12">
			<div class="card card-widget widget-user">
				<div class="widget-user-header text-white" style="background: url('/img/AF1QipNzmRMg2ioffuTqdiXjQMnEEzb29JK29wgnc6-c=w1600-h399.jpg') center center; background-repeat: no-repeat; background-size: 100% 100%;">
				</div>
				<div class="card-footer ">
					<h3 class="widget-user-username text-top-left">Graduate School Enrollment Form</h3>
					<h5 class="widget-user-desc text-top-left">Second Trimester, SY 2020-2021</h5>
					<h5 class="widget-user-desc text-top-left">DATA PRIVACY STATEMENT. Information gathered through this document is only
						for the school’s enrollment data File; it will not be used for other purposes without the consent of the student 
						applicant.</h5>
				</div>

			</div>
			<alert-errors :form="form" message="There were some problems with your input."></alert-errors>
		</div>
		<ValidationObserver v-slot="{ handleSubmit }">
		<form @submit.prevent="handleSubmit(onSubmit)" @keydown="form.onKeydown($event)" enctype="multipart/form-data">
			<div class="form-group">
				<label>Last Name</label>
				<input type="text" class="form-control" v-model="form.lastName" v-uppercase
				:class="{ 'is-invalid': form.errors.has('lastName') }">
      			<has-error :form="form" field="lastName"></has-error>     
			</div>
			<div class="form-group">
				<label>First Name</label>
				<input type="text" class="form-control" v-model="form.firstName" v-uppercase 
				:class="{ 'is-invalid': form.errors.has('firstName') }">
      			<has-error :form="form" field="firstName"></has-error> 
			</div>
			<div class="form-group">
				<label>Middle Name</label>
				<input type="text" class="form-control" v-model="form.middleName" v-uppercase 
				:class="{ 'is-invalid': form.errors.has('middleName') }">
      			<has-error :form="form" field="middleName"></has-error> 
			</div>
			<div class="form-group">
				<label>Extension Name</label>
				<select class="form-control" v-model="form.extensionName">
					<option value=""></option>
					<option v-for="(item, index) in extensionNameList" :key="index" :value="item"> {{ item }}</option>
				</select>
			</div>
			<div class="form-group">
				<label>Gender</label>
				<select class="form-control" v-model="form.gender"
				:class="{ 'is-invalid': form.errors.has('gender') }">
					<option value="">Choose</option>
					<option v-for="(item, index) in gender" :key="index" :value="item"> {{ item }}</option>
				</select>
				<has-error :form="form" field="gender"></has-error> 
			</div>
			<div class="form-group">
				<label>Program Applied For</label>
				<select class="form-control" v-model="form.program_id" 
				:class="{ 'is-invalid': form.errors.has('program_id') }">
					<option value="">Choose</option>
					<option v-for="program in dataPrograms" :key="program.id" :value="program.id">{{ program.name }}</option>
				</select>
				<has-error :form="form" field="program_id"></has-error>      
			</div>
			<div class="form-group">
				<label>Contact #</label>
				<input type="text" class="form-control" v-model="form.contact1"
				:class="{ 'is-invalid': form.errors.has('contact1') }">
      			<has-error :form="form" field="contact1"></has-error> 
			</div>
			<div class="bg-lightblue callout callout-info">
				<h5>Create SPC Graduates Portal</h5>
				<div class="form-group">
					<label>E-mail Address</label>
					<input type="email" class="form-control" v-model="form.email"
					:class="{ 'is-invalid': form.errors.has('email') }">
					<has-error :form="form" field="email"></has-error> 
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" v-model="form.password"
					:class="{ 'is-invalid': form.errors.has('password') }">
					<has-error :form="form" field="password"></has-error> 
				</div>
				<div class="form-group">
					<label>Confirm Password</label>
					<input type="password" class="form-control" v-model="form.password_confirmation"
					:class="{ 'is-invalid': form.errors.has('password_confirmation') }">
					<has-error :form="form" field="password_confirmation"></has-error> 
				</div>
				<p>Please make sure you entered an active email address. </p>
			</div>
			<ValidationProvider name="PRC License" rules="required|image|size:1000" v-slot="{ errors, validate }">
			<div class="form-group">
				<label>PRC License (scanned copy or screen shot)</label><br>
				<input ref="ref_prcLicense" type="file" @change="validate">
				<span class="text-danger">{{ errors[0] }}</span>
			</div>
			</ValidationProvider>
			<div class="form-group">
				<label>Short Essay on your personal goals (docx,doc,pdf)</label><br>
				<input ref="ref_shortEssay" type="file">
			</div>
			<div class="modal-footer justify-content">
				<button type="submit" class="btn btn-primary">Submit <i class="fas fa-save"></i></button>
			</div>
		</form>
		</ValidationObserver>
	</div>
</template>
<script>

Vue.directive("uppercase", {
   update: function (el) {
      el.value = el.value.toUpperCase();
   }
});
export default {
	props: ['form'],
	data(){
		return {
			data: {},
			okApplication: false,
			filePdfDetail: null,
			dataPrograms: {},
			gender: [
				'Male',
				'Female'
			],
			extensionNameList: [
				'JR.',
				'II',
				'III',
			 	'VI',
				'V',
				'VI',
				'VII',
				'VIII',
				'IX',
				'X',
			],
		}
	},
	methods:{
		onSubmit(){
			this.form.post('/applicant')
			.then(response => {
				this.$Progress.start();
				swal.fire(
					'Thank you for Enrolling at San Pedro College',
					'Your applicantion will process immediately.',
					'success'
				);
				this.data = response.data;
				this.$Progress.finish();
				console.log(this.data);
				this.uploadShortEssay(this.data.id);
			}).catch(error => {
				this.$Progress.fail();
			});
		},
		uploadShortEssay(id){
			console.log('uploadShortEssay '+id);
			//let shortEssay = this.$refs.ref_shortEssay.files[0]
			let prcLicense = this.$refs.ref_prcLicense.files[0]
			console.log(prcLicense);
			let formData = new FormData();
			formData.append('id',id);
			//formData.append('shortEssay', shortEssay)
			formData.append('prcLicense', prcLicense)
			//formData.append('thesisDescription', this.filePdfDetail)
			axios.post('/short-essay', formData).then(response => {
				if (response.data.success) {
					console.log(response.data);
					this.okApplication = true;
				}
			})
			.catch(error => {
				this.okApplication = false;
			});
		},
		uploadthesisDescription(){
			this.filePdfDetail = this.$refs.ref_shortEssay.files[0]
     	 	let formData = new FormData();
			formData.append('thesisDescription', this.filePdfDetail)
			axios.post('/thesis-description', formData).then(response => {
				if (response.data.success) {
					console.log(response.data);
					this.form.thesisDescription = response.data.data_name;
					console.log(this.form.thesisDescription);
					this.okApplication = true;
				}
			})
			.catch(error => {
				this.okApplication = false;
			});
		},
		prcLicenseSelect(event){
			let files = event.target.files || event.dataTransfer.files;
			if (!files.length) return;
			let reader = new FileReader();
			reader.onload = (e) => { this.form.prcLicense = e.target.result; };
			reader.readAsDataURL(files[0]);
		},
		// prcLicenseSelect(event){
		// 	let files = event.target.files || event.dataTransfer.files;
		// 	if (!files.length) return;
		// 	let reader = new FileReader();
		// 	reader.onload = (e) => { this.form.prcLicense = e.target.result; };
		// 	reader.readAsDataURL(files[0]);
		// },
		loadPrograms(){
			axios.get('/offered-program').then(({data}) => (this.dataPrograms = data));
		},
	},
	created(){
		this.$Progress.start();
		this.loadPrograms();
		this.$Progress.finish();
	},
}
</script>

