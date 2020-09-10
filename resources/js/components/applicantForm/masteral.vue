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
		</div>
		<ValidationObserver v-slot="{ handleSubmit }">
			<form @submit.prevent="handleSubmit(onSubmit)">
					<ValidationProvider name="Last Name" rules="required|alpha_spaces" v-slot="{ errors }">
						<div class="form-group">
							<label>Last Name</label>
							<input type="text" class="form-control" v-model="form.lastName" v-uppercase>
							<span class="text-danger">{{ errors[0] }}</span>        
						</div>
					</ValidationProvider> 
					<ValidationProvider name="Frist Name" rules="required|alpha_spaces" v-slot="{ errors }">
						<div class="form-group">
							<label>First Name</label>
							<input type="text" class="form-control" v-model="form.firstName" v-uppercase>
							<span class="text-danger">{{ errors[0] }}</span>        
						</div>
					</ValidationProvider> 
					<ValidationProvider name="Middle Name" rules="required|alpha_spaces" v-slot="{ errors }">
						<div class="form-group">
							<label>Middle Name</label>
							<input type="text" class="form-control" v-model="form.middleName" v-uppercase>
							<span class="text-danger">{{ errors[0] }}</span>        
						</div>
					</ValidationProvider> 
					<ValidationProvider name="Extention Name" v-slot="{ errors }">
						<div class="form-group">
							<label>Extension Name</label>
							<select class="form-control" v-model="form.extensionName">
								<option value=""></option>
								<option v-for="(item, index) in extensionNameList" :key="index" :value="item"> {{ item }}</option>
							</select>
							<span class="text-danger">{{ errors[0] }}</span>    
						</div>
					</ValidationProvider> 
					<ValidationProvider name="Gender" rules="required" v-slot="{ errors }">
						<div class="form-group">
							<label>Gender</label>
							<select class="form-control" v-model="form.gender">
								<option value="">Choose</option>
								<option v-for="(item, index) in gender" :key="index" :value="item"> {{ item }}</option>
								
							</select>
							<span class="text-danger">{{ errors[0] }}</span>        
						</div>
					</ValidationProvider> 
					<ValidationProvider name="Program Applied" rules="required" v-slot="{ errors }">
						<div class="form-group">
							<label>Program Applied For</label>
							<select class="form-control" v-model="form.program_id">
								<option value="">Choose</option>
								<option v-for="program in dataPrograms" :key="program.id" :value="program.id">{{ program.name }}</option>
							</select>
							<span class="text-danger">{{ errors[0] }}</span>        
						</div>
					</ValidationProvider> 
					<ValidationProvider name="contact" rules="required|alpha_dash" v-slot="{ errors }">
						<div class="form-group">
							<label>Contact #</label>
							<input type="text" class="form-control" v-model="form.contact1">
							<span class="text-danger">{{ errors[0] }}</span>        
						</div>
					</ValidationProvider> 
					<div class="bg-lightblue callout callout-info">
						<h5>Create SPC Graduates Portal</h5>
						<ValidationProvider name="E-mail address" rules="required|email" v-slot="{ errors }">
							<div class="form-group">
								<label>E-mail Address</label>
								<input type="email" class="form-control" v-model="form.email">
								<span class="text-danger">{{ errors[0] }}</span>
							</div>
						</ValidationProvider>
						<ValidationProvider name="password" rules="required|min:6" v-slot="{ errors }">
							<div class="form-group">
								<label>Password</label>
								<input type="password" class="form-control" v-model="form.password_confirmation">
								<span class="text-danger">{{ errors[0] }}</span>
							</div>
						</ValidationProvider>
						<ValidationProvider name="confirmation password" rules="required|password:@password" v-slot="{ errors }">
							<div class="form-group">
								<label>Confirm Password</label>
								<input type="password" class="form-control" v-model="form.password">
								<span class="text-danger">{{ errors[0] }}</span>
							</div>
						</ValidationProvider>
						<p>Please make sure you entered an active email address. </p>
					</div>
					<!-- <ValidationProvider name="transcript of record" rules="required|image|size:1000" v-slot="{ errors, validate }">
						<div class="form-group">
							<label>Transcrip of Records (scanned copy or screen shot)</label><br>
							<input type="file" @change="validate" v-on:change="torSelect">
							<br>
							<span class="text-danger">{{ errors[0] }}</span>
						</div>
					</ValidationProvider> -->
					<!-- <ValidationProvider name="PRC license" rules="required|image|size:1000" v-slot="{ errors, validate }">
						<div class="form-group">
							<label>PRC License (scanned copy or screen shot)</label><br>
							<input type="file" @change="validate" v-on:change="prcSelect">
							<br>
							<span class="text-danger">{{ errors[0] }}</span>
						</div>
					</ValidationProvider> -->
					<ValidationProvider name="short essay" rules="required|ext:docx,doc,pdf|size:500" v-slot="{ errors, validate }">
						<div class="form-group">
							<label>Short Essay on your personal goals (docx,doc,pdf)</label><br>
							<input type="file" @change="validate" v-on:change="shortEssaySelect">
							<br>
							<span class="text-danger">{{ errors[0] }}</span>
						</div>
					</ValidationProvider>
					<!-- <ValidationProvider name="thesis/dissertation" rules="required|ext:docx,doc,pdf|size:500" v-slot="{ errors, validate }">
						<div class="form-group">
							<label>Description or direction of your thesis/dissertation (docx,doc,pdf)</label><br>
							<input type="file" @change="validate" v-on:change="thesisDescriptionSelect">
							<br>
							<span class="text-danger">{{ errors[0] }}</span>
						</div>
					</ValidationProvider> -->
					<!-- <ValidationProvider name="honorable dismissal" rules="required|image|size:1000" v-slot="{ errors, validate }">
						<div class="form-group">
							<label>Honorable Dismissal (scanned copy or screen shot)</label><br>
							<input type="file" @change="validate" v-on:change="honorableDismissalSelect">
							<br>
							<span class="text-danger">{{ errors[0] }}</span>
						</div>
					</ValidationProvider> -->
					<!-- <ValidationProvider name="birth certificate" rules="required|image|size:1000" v-slot="{ errors, validate }">
						<div class="form-group">
							<label>PSA copy of the birth certificate (scanned copy or screen shot)</label><br>
							<input type="file" @change="validate" v-on:change="birthCertificateSelect">
							<br>
							<span class="text-danger">{{ errors[0] }}</span>
						</div>
					</ValidationProvider> -->
					<!-- <ValidationProvider name="marriage contract" rules="image|size:1000" v-slot="{ errors, validate }">
						<div class="form-group">
							<label>PSA copy of the marriage contract for married only (scanned copy or screen shot)</label><br>
							<input type="file" @change="validate" v-on:change="marriedContractSelect">
							<br>
							<span class="text-danger">{{ errors[0] }}</span>
						</div>
					</ValidationProvider> -->
					<!-- <ValidationProvider name="proof of payment" rules="required|image" v-slot="{ errors, validate }">
						<div class="form-group">
							<label>Proof of payment (scanned copy or screen shot)</label><br>
							<input type="file" @change="validate" v-on:change="paymentReceiptSelect">
							<br>
							<span class="text-danger">{{ errors[0] }}</span>
						</div>
					</ValidationProvider> -->
					<div class="modal-footer justify-content">
						<button type="submit" class="btn bg-navy pull-right">Submit</button>
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
			]
		}
	},
	methods:{
		onSubmit(){
			this.$Progress.start();
			this.form.put('/applicant')
			.then(() => {
				swal.fire(
					'Thank you for Enrolling at San Pedro College',
					'Your applicantion will process immediately.',
					'success'
				);
				this.form.reset();
				this.$Progress.finish();
			})
			.catch(error =>{
				swal.fire(
					'Oops...',
					'Something went wrong!',
					'error'
				);
				this.$Progress.fail();
			});
		},
		setName(){
			this.form.name = this.form.lastName+', '+this.form.firstName+' '+this.form.extensionName+' '+this.form.middleName;
		},
		loadPrograms(){
			axios.get('/offered-program').then(({data}) => (this.dataPrograms = data));
		},
		torSelect(e){
			let files = e.target.files || e.dataTransfer.files;
			if (!files.length)
				return;
			let reader = new FileReader();
			let vm = this;
			reader.onload = (e) => {
				vm.form.tor = e.target.result;
			};
			reader.readAsDataURL(files[0]);
		},
		prcSelect(e){
			let files = e.target.files || e.dataTransfer.files;
			if (!files.length)
				return;
			let reader = new FileReader();
			let vm = this;
			reader.onload = (e) => {
				vm.form.prcLicense = e.target.result;
			};
			reader.readAsDataURL(files[0]);
		},
		shortEssaySelect(e){
			let files = e.target.files || e.dataTransfer.files;
			if (!files.length)
				return;
			let reader = new FileReader();
			let vm = this;
			reader.onload = (e) => {
				vm.form.shortEssay = e.target.result;
			};
			reader.readAsDataURL(files[0]);
		},
		thesisDescriptionSelect(e){
			let files = e.target.files || e.dataTransfer.files;
			if (!files.length)
				return;
			let reader = new FileReader();
			let vm = this;
			reader.onload = (e) => {
				vm.form.thesisDescription = e.target.result;
			};
			reader.readAsDataURL(files[0]);
		},
		honorableDismissalSelect(e){
			let files = e.target.files || e.dataTransfer.files;
			if (!files.length)
				return;
			let reader = new FileReader();
			let vm = this;
			reader.onload = (e) => {
				vm.form.honorableDismissal = e.target.result;
			};
			reader.readAsDataURL(files[0]);
		},
		birthCertificateSelect(e){
			let files = e.target.files || e.dataTransfer.files;
			if (!files.length)
				return;
			let reader = new FileReader();
			let vm = this;
			reader.onload = (e) => {
				vm.form.birthCertificate = e.target.result;
			};
			reader.readAsDataURL(files[0]);
		},
		marriedContractSelect(e){
			let files = e.target.files || e.dataTransfer.files;
			if (!files.length)
				return;
			let reader = new FileReader();
			let vm = this;
			reader.onload = (e) => {
				vm.form.marriedContract = e.target.result;
			};
			reader.readAsDataURL(files[0]);
		},
		paymentReceiptSelect(e){
			let files = e.target.files || e.dataTransfer.files;
			if (!files.length)
				return;
			let reader = new FileReader();
			let vm = this;
			reader.onload = (e) => {
				vm.form.paymentReceipt = e.target.result;
			};
			reader.readAsDataURL(files[0]);
		},
	},
	created(){
		this.$Progress.start();
		this.loadPrograms();
		this.$Progress.finish();
	},
}
</script>

