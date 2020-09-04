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
                                <div class="bottomleft"><img class="spc-logo" src="/img/spc_logo.png" alt=""> SPC Registration Information</div>
                            </a>
                        </div>
                        <div class="mb-6">   
                            <div class="modal-body">
                                <form @submit.prevent="createMode" @keydown="form.onKeydown($event)">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group required">
                                                <label class="control-label">Type of Student </label>
                                                <select v-model="form.typeOfStudent" class="form-control" name="typeOfStudent" id="typeOfStudent" 
                                                :class="{ 'is-invalid': form.errors.has('typeOfStudent')}" >
                                                    <option value="">Choose</option>
                                                    <option value="Old">Old</option>
                                                    <option value="New">New</option>
                                                </select>
                                                <has-error :form="form" field="typeOfStudent"></has-error>
                                            </div>   
                                        </div>    
                                        <div class="col-sm-6">
                                             <div class="form-group required">
                                                <label for="applicantType" class="control-label">Student Category </label>
                                                <select v-model="form.applicantType" class="form-control" name="applicantType" id="applicantType" 
                                                :class="{ 'is-invalid': form.errors.has('applicantType')}" >
                                                    <option value="">Choose</option>
                                                    <option value="Preschool" disabled>Preschool</option>
                                                    <option value="Grade School" disabled>Grade School</option>
                                                    <option value="Junior High" disabled>Junior High</option>
                                                    <option value="Senior High">Senior High</option>
                                                    <option value="Vocational" disabled>Vocational</option>
                                                    <option value="College">College</option>
                                                    <option value="Masteral" disabled>Masteral</option>
                                                    <option value="Doctorate" disabled>Doctorate</option>
                                                </select>
                                                <has-error :form="form" field="applicantType"></has-error>
                                            </div>   
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input  style="text-transform: uppercase" v-model="form.name" type="text" name="name" class="form-control" 
                                        :class="{ 'is-invalid': form.errors.has('name')}" id="name" disabled>
                                        <has-error :form="form" field="name"></has-error>
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="lastName">Last Name </label>
                                        <input style="text-transform: uppercase" v-model="form.lastName" @keyup="setName" type="text" name="lastName" class="form-control"
                                        :class="{ 'is-invalid': form.errors.has('lastName')}" id="lastName" placeholder="Last Name">
                                        <has-error :form="form" field="lastName"></has-error>
                                    </div>
                                    <div class="form-group">
                                        <label for="firstName">First Name</label>
                                        <input style="text-transform: uppercase" v-model="form.firstName" @keyup="setName" type="text" name="firstName" class="form-control" 
                                        :class="{ 'is-invalid': form.errors.has('firstName')}" id="firstName" placeholder="First Name">
                                        <has-error :form="form" field="firstName"></has-error>
                                    </div>
                                    <div class="form-group">
                                        <label for="middleName">Middle Name</label>
                                        <input style="text-transform: uppercase" v-model="form.middleName" @keyup="setName" type="text" name="middleName" class="form-control" 
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
                                    <div class="form-group required">
                                        <label class="control-label" for="gender">Gender </label>
                                        <select v-model="form.gender" class="form-control" name="gender" id="gender" 
                                        :class="{ 'is-invalid': form.errors.has('gender')}" >
                                            <option value="">Choose</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                        <has-error :form="form" field="gender"></has-error>
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="birthdate">Birthdate </label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                            </div>
                                            <input class="form-control" v-model="form.placeOfbirth" type="date" id="birthdate" name="birthdate"
                                            :class="{ 'is-invalid': form.errors.has('birthdate')}">
                                        </div>
                                        <has-error :form="form" field="birthdate"></has-error>
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="placeOfbirth">Birth Place </label>
                                        <input style="text-transform: uppercase" v-model="form.placeOfbirth" type="text" name="placeOfbirth" class="form-control" 
                                        :class="{ 'is-invalid': form.errors.has('placeOfbirth')}" id="placeOfbirth" uppercase>
                                        <has-error :form="form" field="placeOfbirth"></has-error>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label for="heightFeet">Height - feet</label>
                                                <input v-model="form.heightFeet" id="heightFeet" name="heightFeet" type="text" 
                                                @keypress="onlyNumber" class="form-control" maxlength="1"
                                                :class="{ 'is-invalid': form.errors.has('heightFeet')}">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="heightIn">in</label>
                                                <input v-model="form.heightIn" id="heightIn" name="heightIn" type="text"
                                                @keypress="onlyNumber" class="form-control" maxlength="1"
                                                :class="{ 'is-invalid': form.errors.has('heightIn')}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="bloodType">Blood Type</label>
                                        <select v-model="form.bloodType" class="form-control" name="bloodType" id="bloodType"
                                        :class="{ 'is-invalid': form.errors.has('bloodType')}" >
                                            <option value="NONE">NONE</option>
                                            <option value="O-positive">O-positive</option>
                                            <option value="O-negative">O-negative</option>
                                            <option value="A-positive">A-positive</option>
                                            <option value="A-negative">A-negative</option>
                                            <option value="B-positive">B-positive</option>
                                            <option value="B-negativ">B-negativ</option>
                                            <option value="AB-positive">AB-positive</option>
                                            <option value="AB-negative">AB-negative</option>
                                        </select>
                                        <has-error :form="form" field="bloodType"></has-error>
                                    </div>
                                    <div class="form-group">
                                        <label for="weight">Weight (kg)</label>
                                        <input @keypress="onlyNumber" v-model="form.weight" type="text" name="weight" class="form-control" 
                                        :class="{ 'is-invalid': form.errors.has('weight')}" id="weight" maxlength="3">
                                        <has-error :form="form" field="weight"></has-error>
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="Address">Permanent Address </label>
                                        <textarea style="text-transform: uppercase" v-model="form.address" class="form-control" rows="2" 
                                        name="address" id="address"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="boardingHouseAddress">Boarding house Address </label>
                                        <textarea style="text-transform: uppercase" v-model="form.boardingHouseAddress" class="form-control" rows="2" 
                                        name="boardingHouseAddress" id="boardingHouseAddress" 
                                        ></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="birthOrder">Birth Order</label>
                                        <select v-model="form.birthOrder" class="form-control" name="birthOrder" id="birthOrder"
                                        :class="{ 'is-invalid': form.errors.has('birthOrder')}" >
                                            <option value="">Choose</option>
                                            <option value="Eldest">Eldest</option>
                                            <option value="Middle Child">Middle Child</option>
                                            <option value="Youngest">Youngest</option>
                                            <option value="Only Child">Only Child</option>
                                        </select>
                                        <has-error :form="form" field="birthOrder"></has-error>
                                    </div>
                                    <div class="form-group">
                                        <label for="reasonEnrollingAtSPC">Reasons for enrolling at SPC</label>
                                        <input style="text-transform: uppercase" v-model="form.reasonEnrollingAtSPC" type="text" name="reasonEnrollingAtSPC" class="form-control" 
                                        :class="{ 'is-invalid': form.errors.has('reasonEnrollingAtSPC')}" id="reasonEnrollingAtSPC" uppercase>
                                        <has-error :form="form" field="reasonEnrollingAtSPC"></has-error>
                                    </div>
                                    <div class="form-group">
                                        <label for="birthOrder">Program</label>
                                        <select v-model="form.program_id" class="form-control" name="program_id" id="program_id"
                                        :class="{ 'is-invalid': form.errors.has('program_id')}" >
                                            <option value="">Choose</option>
                                            <option value="Test Program 1">Test Program 1</option>
                                            <option value="Test Program 2">Test Program 2</option>
                                            <option value="Test Program 3">Test Program 3</option>
                                            <option value="Test Program 4">Test Program 4</option>
                                        </select>
                                        <has-error :form="form" field="program_id"></has-error>
                                    </div>
                                    <div class="form-group">
                                        <label for="nationality">Nationality</label>
                                        <select v-model="form.nationality" class="form-control" name="nationality" id="nationality"
                                        :class="{ 'is-invalid': form.errors.has('nationality')}" >
                                            <option value="NONE">NONE</option>
                                            <option value="Filipino">Filipino</option>
                                            <option value="Indian">Indian</option>
                                        </select>
                                        <has-error :form="form" field="nationality"></has-error>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-switch">
                                            <input v-model="form.dualCitizenship" type="checkbox" name="dualCitizenship" class="custom-control-input" id="dualCitizenship"
                                            :class="{ 'is-invalid': form.errors.has('dualCitizenship')}" >
                                            <label class="custom-control-label" for="dualCitizenship">Dual Citizenship</label>
                                            <has-error :form="form" field="dualCitizenship"></has-error>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="tribe">Ethnic Group</label>
                                            <select v-model="form.tribe" class="form-control" name="tribe" id="tribe"
                                            :class="{ 'is-invalid': form.errors.has('tribe')}" >
                                                <option value="NONE">NONE</option>
                                                <option value="Lumad">Lumad</option>
                                                <option value="Ata">Ata</option>
                                            </select>
                                            <has-error :form="form" field="tribe"></has-error>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="religion">Religion</label>
                                        <select v-model="form.religion" class="form-control" name="religion" id="religion"
                                        :class="{ 'is-invalid': form.errors.has('religion')}" >
                                            <option value="NONE">NONE</option>
                                            <option value="Roman Catholic">Reman Catholic</option>
                                            <option value="Islam">Islam</option>
                                        </select>
                                        <has-error :form="form" field="religion"></has-error>
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="civilStatus">Civil Status </label>
                                        <select v-model="form.civilStatus" class="form-control" name="civilStatus" id="civilStatus"
                                        :class="{ 'is-invalid': form.errors.has('civilStatus')}" >
                                            <option value="">Choose</option>
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                            <option value="Separated">Separated</option>
                                            <option value="Widowed">Widowed</option>
                                        </select>
                                        <has-error :form="form" field="civilStatus"></has-error>
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="civilStatus">Civil Status </label>
                                        <select v-model="form.civilStatus" class="form-control" name="civilStatus" id="civilStatus"
                                        :class="{ 'is-invalid': form.errors.has('civilStatus')}" >
                                            <option value="">Choose</option>
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                            <option value="Separated">Separated</option>
                                            <option value="Widowed">Widowed</option>
                                        </select>
                                        <has-error :form="form" field="civilStatus"></has-error>
                                    </div>
                                    <div class="row">   
                                        <div class="col-sm-6">   
                                            <div class="form-group required">
                                                <label class="control-label" for="contacts1">Active Contact # 1 </label>
                                                <input v-model="form.contacts1" type="text" name="contacts1" class="form-control" 
                                                :class="{ 'is-invalid': form.errors.has('contacts1')}" id="contacts1">
                                                <has-error :form="form" field="contacts1"></has-error>
                                            </div>
                                        </div>
                                       <div class="col-sm-6"> 
                                           <div class="form-group">
                                                <label for="contacts2">Active Contact # 2 </label>
                                                <input v-model="form.contacts2" type="text" name="contacts2" class="form-control" 
                                                :class="{ 'is-invalid': form.errors.has('contacts2')}" id="contacts2">
                                                <has-error :form="form" field="contacts2"></has-error>
                                            </div>
                                       </div>
                                    </div>
                                    <div class="form-group required">
                                        <label for="email">(Email and Password are needed to access the SPC student portal)</label>
                                        <br>
                                        <label class="control-label" for="email">Email </label>
                                        <input v-model="form.email" type="email" name="email" class="form-control" 
                                        :class="{ 'is-invalid': form.errors.has('email')}" id="email" placeholder="Email">
                                        <has-error :form="form" field="email"></has-error>
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="password">Password </label>
                                        <input v-model="form.password" type="password" name="password" class="form-control" autocomplete="new-password"
                                        :class="{ 'is-invalid': form.errors.has('password')}" id="password" placeholder="Password">
                                        <has-error :form="form" field="password"></has-error>
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="password-confirm">Confirm Password </label>
                                        <input v-model="form.password_confirmation" type="password" name="password_confirmation" class="form-control" autocomplete="new-password"
                                        id="password_confirmation" placeholder="Confirm Password">
                                        <has-error :form="form" field="password-confirm"></has-error>
                                    </div>
                                    <hr>
                                    <label><u>Family Background</u></label>
                                    <div class="row">   
                                         <div class="col-sm-3">
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" v-model="form.FGplt" type="checkbox" id="FGplt" name="FGplt" value="1">
                                                    <label for="FGplt" class="custom-control-label">Parent ling together</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" v-model="form.FGps" type="checkbox" id="FGps" name="FGps" value="1">
                                                    <label for="FGps" class="custom-control-label">Parent separated</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" v-model="form.FGdf" type="checkbox" id="FGdf" name="FGdf" value="option3">
                                                    <label for="FGdf" class="custom-control-label">Deceased father</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" v-model="form.FDdm" type="checkbox" id="FDdm" name="FDdm" value="1">
                                                    <label for="FDdm" class="custom-control-label">Deceased mother</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" v-model="form.FGfr" type="checkbox" id="FGfr" name="FGfr" value="option3">
                                                    <label for="FGfr" class="custom-control-label">Father remarried</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" v-model="form.FGmr" type="checkbox" id="FGmr" name="FGmr" value="option4">
                                                    <label for="FGmr" class="custom-control-label">Mother remarried</label>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="col-sm-3">
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" v-model="form.FGfo" id="FGfo" name="FGfo" value="option3">
                                                    <label for="FGfo" class="custom-control-label">Father OFW</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" v-model="form.FGmo" id="FGmo" name="FGmo" value="option4">
                                                    <label for="FGmo" class="custom-control-label">Mother OFW</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <label><u>Father Information</u></label>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label for="fatherName">Name</label>
                                                <input v-model="form.fatherName" id="fatherName" name="fatherName" type="text" 
                                                class="form-control" :class="{ 'is-invalid': form.errors.has('fatherName')}">
                                                <has-error :form="form" field="fatherName"></has-error>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="fatherAddress">Address</label>
                                                <input v-model="form.fatherAddress" id="fatherAddress" name="fatherAddress" type="text"
                                                class="form-control" :class="{ 'is-invalid': form.errors.has('fatherAddress')}">
                                                <has-error :form="form" field="fatherAddress"></has-error>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label for="fatherOccupation">Occipation</label>
                                                <input v-model="form.fatherOccupation" id="fatherOccupation" name="fatherOccupation" type="text" 
                                                class="form-control" :class="{ 'is-invalid': form.errors.has('fatherOccupation')}">
                                                <has-error :form="form" field="fatherOccupation"></has-error>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="fatherContact">Contact #</label>
                                                <input v-model="form.fatherContact" id="fatherContact" name="fatherContact" type="text"
                                                class="form-control" :class="{ 'is-invalid': form.errors.has('fatherContact')}">
                                                <has-error :form="form" field="fatherContact"></has-error>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <label><u>Mother Information</u></label>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label for="motherName">Name</label>
                                                <input v-model="form.motherName" id="motherName" name="motherName" type="text" 
                                                class="form-control" :class="{ 'is-invalid': form.errors.has('motherName')}">
                                                <has-error :form="form" field="motherName"></has-error>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="motherAddress">Address</label>
                                                <input v-model="form.motherAddress" id="motherAddress" name="motherAddress" type="text"
                                                class="form-control" :class="{ 'is-invalid': form.errors.has('motherAddress')}">
                                                <has-error :form="form" field="motherAddress"></has-error>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label for="motherOccupation">Occipation</label>
                                                <input v-model="form.motherOccupation" id="motherOccupation" name="motherOccupation" type="text" 
                                                class="form-control" :class="{ 'is-invalid': form.errors.has('motherOccupation')}">
                                                <has-error :form="form" field="motherOccupation"></has-error>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="motherContact">Contact #</label>
                                                <input v-model="form.motherContact" id="motherContact" name="motherContact" type="text"
                                                class="form-control" :class="{ 'is-invalid': form.errors.has('motherContact')}">
                                                <has-error :form="form" field="motherContact"></has-error>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <label><u>SCHOLASTIC DATA</u></label>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label for="scholasticNameOfSchoolElementary">Elementary</label>
                                                <input v-model="form.scholasticNameOfSchoolElementary" id="scholasticNameOfSchoolElementary" name="scholasticNameOfSchoolElementary" type="text" 
                                                class="form-control" :class="{ 'is-invalid': form.errors.has('scholasticNameOfSchoolElementary')}"
                                                placeholder="Name of School">
                                                <has-error :form="form" field="scholasticNameOfSchoolElementary"></has-error>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="scholasticPubPriElementary">&nbsp</label>
                                                <select v-model="form.scholasticPubPriElementary" class="form-control" name="scholasticPubPriElementary" id="scholasticPubPriElementary"
                                                :class="{ 'is-invalid': form.errors.has('scholasticPubPriElementary')}" >
                                                    <option value="Public" selected>Public</option>
                                                    <option value="Private">Private</option>
                                                </select>
                                                <has-error :form="form" field="scholasticPubPriElementary"></has-error>
                                            </div>
                                        </div>
                                         <div class="col-sm-3">
                                            <div class="form-group">
                                                 <label for="scholasticYearGraduatedElementary">&nbsp</label>
                                                <input v-model="form.scholasticYearGraduatedElementary" @keypress="onlyNumber" id="scholasticYearGraduatedElementary" name="scholasticYearGraduatedElementary" type="text"
                                                class="form-control" :class="{ 'is-invalid': form.errors.has('motherAddress')}" maxlength="4"
                                                placeholder="Year Graduated">
                                                <has-error :form="form" field="scholasticYearGraduatedElementary"></has-error>
                                            </div>
                                        </div>
                                         <div class="col-sm-3">
                                            <div class="form-group">
                                                 <label for="motherName">&nbsp</label>
                                                <input v-model="form.motherAddress" id="motherAddress" name="motherAddress" type="text"
                                                class="form-control" :class="{ 'is-invalid': form.errors.has('motherAddress')}"
                                                placeholder="Honors Received">
                                                <has-error :form="form" field="scholasticHonorElementary"></has-error>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="scholasticNameOfSchoolJunior">Junior High School</label>
                                                <input v-model="form.scholasticNameOfSchoolJunior" id="scholasticNameOfSchoolJunior" name="scholasticNameOfSchoolJunior" type="text" 
                                                class="form-control" :class="{ 'is-invalid': form.errors.has('scholasticNameOfSchoolJunior')}"
                                                placeholder="Name of School">
                                                <has-error :form="form" field="scholasticNameOfSchoolJunior"></has-error>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                 <label for="scholasticPubPriJunior">&nbsp</label>
                                                <select v-model="form.scholasticPubPriJunior" class="form-control" name="scholasticPubPriJunior" id="scholasticPubPriJunior"
                                                :class="{ 'is-invalid': form.errors.has('scholasticPubPriJunior')}" >
                                                    <option value="Public" selected>Public</option>
                                                    <option value="Private">Private</option>
                                                </select>
                                                <has-error :form="form" field="scholasticPubPriJunior"></has-error>
                                            </div>
                                        </div>
                                         <div class="col-sm-3">
                                            <div class="form-group">
                                                 <label for="scholasticYearGraduatedJunior">&nbsp</label>
                                                <input v-model="form.scholasticYearGraduatedJunior" @keypress="onlyNumber" id="scholasticYearGraduatedJunior" name="scholasticYearGraduatedJunior" type="text"
                                                class="form-control" :class="{ 'is-invalid': form.errors.has('scholasticYearGraduatedJunior')}" maxlength="4"
                                                placeholder="Year Graduated">
                                                <has-error :form="form" field="scholasticYearGraduatedJunior"></has-error>
                                            </div>
                                        </div>
                                         <div class="col-sm-3">
                                            <div class="form-group">
                                                 <label for="scholasticHonorJunior">&nbsp</label>
                                                <input v-model="form.scholasticHonorJunior" id="scholasticHonorJunior" name="scholasticHonorJunior" type="text"
                                                class="form-control" :class="{ 'is-invalid': form.errors.has('scholasticHonorJunior')}"
                                                placeholder="Honors Received">
                                                <has-error :form="form" field="scholasticHonorJunior"></has-error>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label for="scholasticNameOfSchoolSenior">Senior High School</label>
                                                <input v-model="form.scholasticNameOfSchoolSenior" id="scholasticNameOfSchoolSenior" name="scholasticNameOfSchoolSenior" type="text" 
                                                class="form-control" :class="{ 'is-invalid': form.errors.has('scholasticNameOfSchoolSenior')}"
                                                placeholder="Name of School">
                                                <has-error :form="form" field="scholasticNameOfSchoolSenior"></has-error>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                 <label for="scholasticPubPriSenior">&nbsp</label>
                                                <select v-model="form.scholasticPubPriSenior" class="form-control" name="scholasticPubPriSenior" id="scholasticPubPriSenior"
                                                :class="{ 'is-invalid': form.errors.has('scholasticPubPriSenior')}" >
                                                    <option value="Public" selected>Public</option>
                                                    <option value="Private">Private</option>
                                                </select>
                                                <has-error :form="form" field="scholasticPubPriSenior"></has-error>
                                            </div>
                                        </div>
                                         <div class="col-sm-3">
                                            <div class="form-group">
                                                 <label for="scholasticYearGraduatedSenior">&nbsp</label>
                                                <input v-model="form.scholasticYearGraduatedSenior" @keypress="onlyNumber" id="scholasticYearGraduatedSenior" name="scholasticYearGraduatedSenior" type="text"
                                                class="form-control" :class="{ 'is-invalid': form.errors.has('scholasticYearGraduatedSenior')}" maxlength="4"
                                                placeholder="Year Graduated">
                                                <has-error :form="form" field="scholasticYearGraduatedSenior"></has-error>
                                            </div>
                                        </div>
                                         <div class="col-sm-3">
                                            <div class="form-group">
                                                 <label for="scholasticHonorSenior">&nbsp</label>
                                                <input v-model="form.scholasticHonorSenior" id="scholasticHonorSenior" name="scholasticHonorSenior" type="text"
                                                class="form-control" :class="{ 'is-invalid': form.errors.has('scholasticHonorSenior')}"
                                                placeholder="Honors Received">
                                                <has-error :form="form" field="scholasticHonorSenior"></has-error>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="scholasticTrackStrand">Track/Strand</label>
                                        <input style="text-transform: uppercase" v-model="form.scholasticTrackStrand" type="text" name="scholasticTrackStrand" class="form-control" 
                                        :class="{ 'is-invalid': form.errors.has('scholasticTrackStrand')}" id="scholasticTrackStrand" uppercase>
                                        <has-error :form="form" field="scholasticTrackStrand"></has-error>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label for="scholasticNameOfSchoolCollege">College</label>
                                                <input v-model="form.scholasticNameOfSchoolCollege" id="scholasticNameOfSchoolCollege" name="scholasticNameOfSchoolCollege" type="text" 
                                                class="form-control" :class="{ 'is-invalid': form.errors.has('scholasticNameOfSchoolCollege')}"
                                                placeholder="Name of School">
                                                <has-error :form="form" field="scholasticNameOfSchoolCollege"></has-error>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                 <label for="scholasticPubPriCollege">&nbsp</label>
                                                <select v-model="form.scholasticPubPriCollege" class="form-control" name="scholasticPubPriCollege" id="scholasticPubPriCollege"
                                                :class="{ 'is-invalid': form.errors.has('scholasticPubPriCollege')}" >
                                                    <option value="Public" selected>Public</option>
                                                    <option value="Private">Private</option>
                                                </select>
                                                <has-error :form="form" field="scholasticPubPriCollege"></has-error>
                                            </div>
                                        </div>
                                         <div class="col-sm-3">
                                            <div class="form-group">
                                                 <label for="scholasticYearGraduatedCollege">&nbsp</label>
                                                <input v-model="form.scholasticYearGraduatedCollege" @keypress="onlyNumber" id="scholasticYearGraduatedCollege" name="scholasticYearGraduatedCollege" type="text"
                                                class="form-control" :class="{ 'is-invalid': form.errors.has('scholasticYearGraduatedCollege')}" maxlength="4"
                                                placeholder="Year Graduated">
                                                <has-error :form="form" field="scholasticYearGraduatedCollege"></has-error>
                                            </div>
                                        </div>
                                         <div class="col-sm-3">
                                            <div class="form-group">
                                                 <label for="scholasticHonorCollege">&nbsp</label>
                                                <input v-model="form.scholasticHonorCollege" id="scholasticHonorCollege" name="scholasticHonorCollege" type="text"
                                                class="form-control" :class="{ 'is-invalid': form.errors.has('scholasticHonorCollege')}"
                                                placeholder="Honors Received">
                                                <has-error :form="form" field="scholasticHonorCollege"></has-error>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="scholasticProgram">Program/Course</label>
                                        <input style="text-transform: uppercase" v-model="form.scholasticProgram" type="text" name="placescholasticProgramOfbirth" class="form-control" 
                                        :class="{ 'is-invalid': form.errors.has('scholasticProgram')}" id="scholasticProgram" uppercase>
                                        <has-error :form="form" field="scholasticProgram"></has-error>
                                    </div>
                                    <hr>
                                    <label><u>Varsity Player Only (Sports/Events)</u></label>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input v-model="form.varsity1" id="varsity1" name="varsity1" type="text" 
                                                class="form-control" :class="{ 'is-invalid': form.errors.has('varsity1')}">
                                                <has-error :form="form" field="varsity1"></has-error>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input v-model="form.varsity2" id="varsity2" name="varsity2" type="text" 
                                                class="form-control" :class="{ 'is-invalid': form.errors.has('varsity2')}">
                                                <has-error :form="form" field="varsity2"></has-error>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input v-model="form.varsity3" id="varsity3" name="varsity3" type="text"
                                                class="form-control" :class="{ 'is-invalid': form.errors.has('varsity3')}">
                                                <has-error :form="form" field="varsity3"></has-error>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input v-model="form.varsity4" id="varsity4" name="varsity4" type="text" 
                                                class="form-control" :class="{ 'is-invalid': form.errors.has('varsity4')}">
                                                <has-error :form="form" field="varsity4"></has-error>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input v-model="form.varsity5" id="varsity5" name="varsity5" type="text" 
                                                class="form-control" :class="{ 'is-invalid': form.errors.has('varsity5')}">
                                                <has-error :form="form" field="varsity5"></has-error>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input v-model="form.varsity6" id="varsity6" name="varsity6" type="text"
                                                class="form-control" :class="{ 'is-invalid': form.errors.has('varsity6')}">
                                                <has-error :form="form" field="varsity6"></has-error>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <label><u>Person to be contacted in case of emergency</u></label>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input v-model="form.personContactName" id="personContactName" name="personContactName" type="text" 
                                                class="form-control" :class="{ 'is-invalid': form.errors.has('personContactName')}"
                                                placeholder="Name">
                                                <has-error :form="form" field="personContactName"></has-error>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input v-model="form.personContactRelationship" id="personContactRelationship" name="personContactRelationship" type="text" 
                                                class="form-control" :class="{ 'is-invalid': form.errors.has('personContactRelationship')}"
                                                placeholder="Relationship">
                                                <has-error :form="form" field="personContactRelationship"></has-error>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input v-model="form.personContactAddress" id="personContactAddress" name="personContactAddress" type="text" 
                                                class="form-control" :class="{ 'is-invalid': form.errors.has('personContactAddress')}"
                                                placeholder="Address">
                                                <has-error :form="form" field="personContactAddress"></has-error>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input v-model="form.personContactContact" id="personContactContact" name="personContactContact" type="text" 
                                                class="form-control" :class="{ 'is-invalid': form.errors.has('personContactContact')}"
                                                 placeholder="Active Contact #">
                                                 <has-error :form="form" field="personContactContact"></has-error>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <label><u>File Attachment (Requirement/s)</u></label>
                                    <div class="form-group required" v-show="form.applicantType == 'Senior High' ? true:false">
                                        <label class="control-label" for="customFile" >Report card </label>
                                        <br>
                                        <input type="file" id="reportCard" name="reportCard"><br>
                                    </div>
                                    <hr v-show="form.applicantType == 'College' ? true:false">
                                    <div class="form-group required" v-show="form.applicantType == 'College' ? true:false">
                                        <label class="control-label" for="customFile">Transcript of records </label>
                                        <br>
                                        <input type="file" id="transcriptRecords" name="transcriptRecords"><br>
                                    </div>
                                    <div class="form-group required" v-show="form.applicantType == 'College' ? true:false">
                                        <label class="control-label" for="customFile">Honorable dismissal </label>
                                        <br>
                                        <input type="file" id="honorableDismissal" name="honorableDismissal"><br>
                                    </div>
                                    <hr v-show="form.applicantType == 'College' ? true:false">
                                    <div class="form-group required">
                                        <label class="control-label" for="customFile">Medical Certificate </label>
                                        <br>
                                        <input type="file" id="medicalCertificate" name="medicalCertificate"><br>
                                    </div>
                                      <div class="form-group required">
                                        <label class="control-label" for="customFile">Payment Receipt </label>
                                        <br>
                                        <input type="file" id="paymentReceipt" name="paymentReceipt"><br>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fas fa-window-close"></i> Close</button>
                                        <button type="submit" class="btn btn-primary">Submit <i class="fas fa-save"></i></button>
                                    </div>
                                    </div>
                                </form>
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
                    heightFeet: '0',
                    heightIn: '0',
                    weight: '0',
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
                    reportCard:'',
                    transcriptRecords:'',
                    honorableDismissal:'',
                    medicalCertificate:'',
                }),
                programs :{},
            }
        },
        methods:{
            createMode(){
                this.$Progress.start();
                this.form.put('/applicant')
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
            setName(){
                this.form.name = this.form.lastName+', '+this.form.firstName+' '+this.form.extensionName+' '+this.form.middleName;
            },
            onlyNumber ($event) {
            //console.log($event.keyCode); //keyCodes value
                let keyCode = ($event.keyCode ? $event.keyCode : $event.which);
                if ((keyCode < 48 || keyCode > 57) && keyCode !== 46) { // 46 is dot
                    $event.preventDefault();
                }
            }
        },
        mounted() {
            console.log('Registration Component mounted.')
        }
    }
</script>

