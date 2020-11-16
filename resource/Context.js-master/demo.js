$(document).ready(function(){

	context.init({preventDoubleContext: false});

	context.attach('body', [

		{header: 'Deshboard'},
		
		{text: 'Setting', subMenu: [
		//	{header: 'Requires jQuery'},
			{text: '<span class="glyphicon glyphicon-cog"></span> Add More Setting', href: 'http://localhost/HPDM/welcome/setting.html', target:'', action: function(e){
				_gaq.push(['_trackEvent', 'ContextJS Download', this.pathname, this.innerHTML]);
			}},
			{text: '<span class="glyphicon glyphicon-cog"></span> Add Cusotmized Information', href: 'http://localhost/HPDM/welcome/my_dictonary.html', target:'', action: function(e){
				_gaq.push(['_trackEvent', 'ContextJS Standalone CSS Download', this.pathname, this.innerHTML]);
			}},
			{text: '<span class="glyphicon glyphicon-cog"></span> Add New User', href: 'http://localhost/HPDM/welcome/user_registration.html', target:'', action: function(e){
				_gaq.push(['_trackEvent', 'ContextJS Standalone CSS Download', this.pathname, this.innerHTML]);
			}}
			 
		]},
		{text: 'Prescription', subMenu: [

			{text: '<span class="glyphicon glyphicon-pencil"></span> New Prescription', href: 'http://localhost/HPDM/welcome/patient_informaiton_record.html', target:'', action: function(e){
				_gaq.push(['_trackEvent', 'ContextJS Bootstrap CSS Download', this.pathname, this.innerHTML]);
			}},

			{text: '<span class="glyphicon glyphicon-pencil"></span> Re-Visit Prescription', href: 'http://localhost/HPDM/welcome/re_visit_patient.html', target:'', action: function(e){
				_gaq.push(['_trackEvent', 'ContextJS Standalone CSS Download', this.pathname, this.innerHTML]);
			}}
		]},
		 
		{header: 'Data Searching'},
		{text: 'Find Patient Info', subMenu: [
			{header: 'Patient Data Search'},
			{text: '<span class="glyphicon glyphicon-search"></span> Find Patient', href: 'http://localhost/HPDM/welcome/patient_date_to_date_searching.html', target: ''},
			{text: '<span class="glyphicon glyphicon-search"></span> Find Patient History', href: 'http://localhost/HPDM/welcome/presenting_complaint_search.html', target: ''},
			{text: '', action: function(e){
				e.preventDefault();
				$('#donate').submit();
			}}
		]},
		//{divider: true},
		{header: 'Investigation Searching'},
		{text: 'Find Investigation', subMenu: [
			{header: 'Find Investigation'},
			{text: '<span class="glyphicon glyphicon-search"></span>&nbsp;Find Investigation', href: 'http://localhost/HPDM/welcome/patient_find_investigation.html', target: ''},
 
			
			{text: '', action: function(e){
				e.preventDefault();
				$('#donate').submit();
			}}
		]},
		 /*
		{text: 'Hmm?', subMenu: [
			{header: 'Well, thats lovely.'},
			{text: '2nd Level', subMenu: [
				{header: 'You like?'},
				{text: '3rd Level!?', subMenu: [
					{header: 'Of course you do'},
					{text: 'MENUCEPTION', subMenu: [
						{header:'FUCK'},
						{text: 'MAKE IT STOP!', subMenu: [
							{header: 'NEVAH!'},
							{text: 'Shieeet', subMenu: [
								{header: 'WIN'},
								{text: 'Dont Click Me', href: 'http://bit.ly/1dH1Zh1', target:'_blank', action: function(){
									console.log(this);
								}}
							]}
						]}
					]}
				]}
			]}
		]}
		
		*/
	]);

});

