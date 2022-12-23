<fieldset id="fieldsettwo">
    <div class="form-card">
        <h2 class="fs-title" style="text-align: center;">SECTION 2:</h2>

        <div class="row">
            <div class="col-7">
                <h2 class="fs-title">NOMINATION – POSITION NEEDED</h2>
            </div>
            <div class="col-5">
                <h2 class="steps">Step 2 - 4</h2>
            </div>
        </div>


        <h2 class="fs-title"> DETAILS OF THE POSITION YOU ARE WILLING TO OFFER </h2>

        <table>


            <tbody>
                <tr>
                    <td> Indicate where the visa applicant will be
                        working (full address)</td>
                    <td> <input type="text" name="nomination_visa_appliciant" id="nomination_visa_appliciant" @if(isset($data->nomination_visa_appliciant)) value="{{$data->nomination_visa_appliciant}}" @endif/> </td>
                </tr>


                <tr>
                    <td> Is this an intra-company transfer? (when
                        the applicant has been working for a
                        subsidiary and/or branch of the Australian
                        company outside of Australia)
                    </td>
                    <td> 
                    <select name="nomination_intra_company_transfer" id="nomination_intra_company_transfer" class="form-control">
                            <option value=""> Select Option </option>

                            @if(!empty(isset($data->nomination_intra_company_transfer)))
                            <option value="{{$data->nomination_intra_company_transfer}}" selected>{{$data->nomination_intra_company_transfer}}</option>
                            @endif
                            <option value="Yes">Yes </option>
                            <option value="No"> No </option>
                        </select>    
                    </td>
                </tr>


                <tr>
                    <td> Indicate the annual turnover of the
                        business for the last financial year
                    </td>
                    <td> <input type="text" name="nomination_financial_year" id="nomination_financial_year" @if(isset($data->nomination_financial_year)) value="{{$data->nomination_financial_year}}" @endif/> </td>
                </tr>

                <tr>
                    <td> What is the job title you are offering to the
                        visa applicant
                    </td>
                    <td> <input type="text" name="nomination_job_offering" id="nomination_job_offering" @if(isset($data->nomination_job_offering)) value="{{$data->nomination_job_offering}}" @endif/> </td>
                </tr>


                <tr>
                    <td>Are you able to find the most suitable
                        occupation from this dropdown menu? If
                        so, please select it</td>

                    <td>

                        <select class="form-control" id="nomination_job_occupation" name="nomination_job_occupation">
                            <option value="">SELECT </option>
                            @if(!empty(isset($data->nomination_job_occupation)))
                            <option value="{{$data->nomination_job_occupation}}" selected>{{$data->nomination_job_occupation}}</option>
                            @endif
                            <option value="Chief Executive / Managing Director">Chief Executive / Managing Director</option>
                            <option value="Corporate General Manager">Corporate General Manager</option>
                            <option value="Defence Force Senior Officer">Defence Force Senior Officer</option>
                            <option value="Local Government Legislator">Local Government Legislator</option>
                            <option value="Member Of Parliament">Member Of Parliament</option>
                            <option value="Legislators (nec)">Legislators (nec)</option>
                            <option value="Aquaculture Farmer">Aquaculture Farmer</option>
                            <option value="Cotton Grower">Cotton Grower</option>
                            <option value="Flower Grower">Flower Grower</option>
                            <option value="Fruit / Nut Grower">Fruit / Nut Grower</option>
                            <option value="Grain">Oilseed / Pasture Grower (AUS) / Field Crop Grower (NZ)</option>
                            <option value="Grape Grower">Grape Grower</option>
                            <option value="Mixed Crop Farmer">Mixed Crop Farmer</option>
                            <option value="Sugar Cane Grower">Sugar Cane Grower</option>
                            <option value="Turf Grower">Turf Grower</option>
                            <option value="Vegetable Grower (AUS) / Market Gardener (NZ)">Vegetable Grower (AUS) / Market Gardener (NZ)</option>
                            <option value="Crop Farmers (nec)">Crop Farmers (nec)</option>
                            <option value="Apiarist">Apiarist</option>
                            <option value="Beef Cattle Farmer">Beef Cattle Farmer</option>
                            <option value="Dairy Cattle Farmer">Dairy Cattle Farmer</option>
                            <option value="Deer Farmer">Deer Farmer</option>
                            <option value="Goat Farmer">Goat Farmer</option>
                            <option value="Horse Breeder">Horse Breeder</option>
                            <option value="Mixed Livestock Farmer">Mixed Livestock Farmer</option>
                            <option value="Pig Farmer">Pig Farmer</option>
                            <option value="Poultry Farmer">Poultry Farmer</option>
                            <option value="Sheep Farmer">Sheep Farmer</option>
                            <option value="Livestock Farmers (nec)">Livestock Farmers (nec)</option>
                            <option value="Mixed Crop & Livestock Farmer">Mixed Crop & Livestock Farmer</option>
                            <option value="Sales & Marketing Manager">Sales & Marketing Manager</option>
                            <option value="Advertising Manager">Advertising Manager</option>
                            <option value="Public Relations Manager">Public Relations Manager</option>
                            <option value="Corporate Services Manager">Corporate Services Manager</option>
                            <option value="Finance Manager">Finance Manager</option>
                            <option value="Human Resource Manager">Human Resource Manager</option>
                            <option value="Policy & Planning Manager">Policy & Planning Manager</option>
                            <option value="Research & Development Manager">Research & Development Manager</option>
                            <option value="Construction Project Manager">Construction Project Manager</option>
                            <option value="Project Builder">Project Builder</option>
                            <option value="Engineering Manager">Engineering Manager</option>
                            <option value="Importer / Exporter">Importer / Exporter</option>
                            <option value="Wholesaler">Wholesaler</option>
                            <option value="Manufacturer">Manufacturer</option>
                            <option value="Production Manager (Forestry)">Production Manager (Forestry)</option>
                            <option value="Production Manager (Manufacturing)">Production Manager (Manufacturing)</option>
                            <option value="Production Manager (Mining)">Production Manager (Mining)</option>
                            <option value="Supply & Distribution Manager">Supply & Distribution Manager</option>
                            <option value="Procurement Manager">Procurement Manager</option>
                            <option value="Child Care Centre Manager">Child Care Centre Manager</option>
                            <option value="Medical Administrator">Medical Administrator</option>
                            <option value="Medical Administrator (AUS) / Medical Superintendent (NZ)">Medical Administrator (AUS) / Medical Superintendent (NZ)</option>
                            <option value="Nursing Clinical Director">Nursing Clinical Director</option>
                            <option value="Primary Health Organisation Manager">Primary Health Organisation Manager</option>
                            <option value="Welfare Centre Manager">Welfare Centre Manager</option>
                            <option value="Health & Welfare Services Managers (nec)">Health & Welfare Services Managers (nec)</option>
                            <option value="School Principal">School Principal</option>
                            <option value="Faculty Head">Faculty Head</option>
                            <option value="Regional Education Manager">Regional Education Manager</option>
                            <option value="Education Managers (nec)">Education Managers (nec)</option>
                            <option value="Chief Information Officer">Chief Information Officer</option>
                            <option value="ICT Project Manager">ICT Project Manager</option>
                            <option value="ICT Managers (nec)">ICT Managers (nec)</option>
                            <option value="Commissioned Defence Force Officer">Commissioned Defence Force Officer</option>
                            <option value="Commissioned Fire Officer">Commissioned Fire Officer</option>
                            <option value="Commissioned Police Officer">Commissioned Police Officer</option>
                            <option value="Senior Non‑Commissioned Defence Force Member">Senior Non‑Commissioned Defence Force Member</option>
                            <option value="Arts Administrator / Manager">Arts Administrator / Manager</option>
                            <option value="Environmental Manager">Environmental Manager</option>
                            <option value="Laboratory Manager">Laboratory Manager</option>
                            <option value="Quality Assurance Manager">Quality Assurance Manager</option>
                            <option value="Sports Administrator">Sports Administrator</option>
                            <option value="Specialist Managers (nec) Except: Ambassador" title="Bishop">Archbishop</option>
                            <option value="Specialist Managers (nec)">Specialist Managers (nec)</option>
                            <option value="Cafe / Restaurant Manager">Cafe / Restaurant Manager</option>
                            <option value="Caravan Park & Camping Ground Manager">Caravan Park & Camping Ground Manager</option>
                            <option value="Hotel / Motel Manager">Hotel / Motel Manager</option>
                            <option value="Licensed Club Manager">Licensed Club Manager</option>
                            <option value="Bed & Breakfast Operator">Bed & Breakfast Operator</option>
                            <option value="Retirement Village Manager">Retirement Village Manager</option>
                            <option value="Accommodation & Hospitality Managers (nec)">Accommodation & Hospitality Managers (nec)</option>
                            <option value="Retail Manager (General)">Retail Manager (General)</option>
                            <option value="Antique Dealer">Antique Dealer</option>
                            <option value="Betting Agency Manager">Betting Agency Manager</option>
                            <option value="Hair / Beauty Salon Manager">Hair / Beauty Salon Manager</option>
                            <option value="Post Office Manager">Post Office Manager</option>
                            <option value="Travel Agency Manager">Travel Agency Manager</option>
                            <option value="Amusement Centre Manager">Amusement Centre Manager</option>
                            <option value="Fitness Centre Manager">Fitness Centre Manager</option>
                            <option value="Sports Centre Manager">Sports Centre Manager</option>
                            <option value="Call / Contact Centre Manager">Call / Contact Centre Manager</option>
                            <option value="Customer Service Manager">Customer Service Manager</option>
                            <option value="Conference & Event Organiser">Conference & Event Organiser</option>
                            <option value="Fleet Manager">Fleet Manager</option>
                            <option value="Railway Station Manager">Railway Station Manager</option>
                            <option value="Transport Company Manager">Transport Company Manager</option>
                            <option value="Boarding Kennel / Cattery Operator">Boarding Kennel / Cattery Operator</option>
                            <option value="Cinema / Theatre Manager">Cinema / Theatre Manager</option>
                            <option value="Facilities Manager">Facilities Manager</option>
                            <option value="Financial Institution Branch Manager">Financial Institution Branch Manager</option>
                            <option value="Equipment Hire Manager">Equipment Hire Manager</option>
                            <option value="Hospitality">Retail & Service Managers (nec)</option>
                            <option value="Actor">Actor</option>
                            <option value="Dancer / Choreographer">Dancer / Choreographer</option>
                            <option value="Entertainer / Variety Artist">Entertainer / Variety Artist</option>
                            <option value="Actors">Dancers & Other Entertainers (nec)</option>
                            <option value="Composer">Composer</option>
                            <option value="Music Director">Music Director</option>
                            <option value="Musician (Instrumental)">Musician (Instrumental)</option>
                            <option value="Singer">Singer</option>
                            <option value="Music Professionals (nec)">Music Professionals (nec)</option>
                            <option value="Photographer">Photographer</option>
                            <option value="Painter (Visual Arts)">Painter (Visual Arts)</option>
                            <option value="Potter / Ceramic Artist">Potter / Ceramic Artist</option>
                            <option value="Sculptor">Sculptor</option>
                            <option value="Visual Arts & Crafts Professionals (nec)">Visual Arts & Crafts Professionals (nec)</option>
                            <option value="Artistic Director">Artistic Director</option>
                            <option value="Media Producer (Excluding Video)">Media Producer (Excluding Video)</option>
                            <option value="Radio Presenter">Radio Presenter</option>
                            <option value="Television Presenter">Television Presenter</option>
                            <option value="Author">Author</option>
                            <option value="Book / Script Editor">Book / Script Editor</option>
                            <option value="Art Director (Film">Television / Stage)</option>
                            <option value="Director (Film" title="Radio / Stage)">Television</option>
                            <option value="Director Of Photography">Director Of Photography</option>
                            <option value="Film & Video Editor">Film & Video Editor</option>
                            <option value="Program Director (Television / Radio)">Program Director (Television / Radio)</option>
                            <option value="Stage Manager">Stage Manager</option>
                            <option value="Technical Director">Technical Director</option>
                            <option value="Video Producer">Video Producer</option>
                            <option value="Film" title="Radio & Stage Directors (nec)">Television</option>
                            <option value="Copywriter">Copywriter</option>
                            <option value="Newspaper / Periodical Editor">Newspaper / Periodical Editor</option>
                            <option value="Print Journalist">Print Journalist</option>
                            <option value="Radio Journalist">Radio Journalist</option>
                            <option value="Technical Writer">Technical Writer</option>
                            <option value="Television Journalist">Television Journalist</option>
                            <option value="Journalists & Other Writers (nec)">Journalists & Other Writers (nec)</option>
                            <option value="Accountant (General)">Accountant (General)</option>
                            <option value="Management Accountant">Management Accountant</option>
                            <option value="Taxation Accountant">Taxation Accountant</option>
                            <option value="Company Secretary">Company Secretary</option>
                            <option value="Corporate Treasurer">Corporate Treasurer</option>
                            <option value="External Auditor">External Auditor</option>
                            <option value="Internal Auditor">Internal Auditor</option>
                            <option value="Commodities Trader">Commodities Trader</option>
                            <option value="Finance Broker">Finance Broker</option>
                            <option value="Insurance Broker">Insurance Broker</option>
                            <option value="Financial Brokers (nec)">Financial Brokers (nec)</option>
                            <option value="Financial Market Dealer">Financial Market Dealer</option>
                            <option value="Futures Trader">Futures Trader</option>
                            <option value="Stockbroking Dealer">Stockbroking Dealer</option>
                            <option value="Financial Dealers (nec)">Financial Dealers (nec)</option>
                            <option value="Financial Investment Adviser">Financial Investment Adviser</option>
                            <option value="Financial Investment Manager">Financial Investment Manager</option>
                            <option value="Human Resource Adviser">Human Resource Adviser</option>
                            <option value="Recruitment Consultant">Recruitment Consultant</option>
                            <option value="Workplace Relations Adviser">Workplace Relations Adviser</option>
                            <option value="ICT Trainer">ICT Trainer</option>
                            <option value="Training & Development Professional">Training & Development Professional</option>
                            <option value="Actuary">Actuary</option>
                            <option value="Mathematician">Mathematician</option>
                            <option value="Statistician">Statistician</option>
                            <option value="Archivist">Archivist</option>
                            <option value="Gallery / Museum Curator">Gallery / Museum Curator</option>
                            <option value="Health Information Manager">Health Information Manager</option>
                            <option value="Records Manager">Records Manager</option>
                            <option value="Economist">Economist</option>
                            <option value="Intelligence Officer">Intelligence Officer</option>
                            <option value="Policy Analyst">Policy Analyst</option>
                            <option value="Land Economist">Land Economist</option>
                            <option value="Valuer">Valuer</option>
                            <option value="Librarian">Librarian</option>
                            <option value="Management Consultant">Management Consultant</option>
                            <option value="Organisation & Methods Analyst">Organisation & Methods Analyst</option>
                            <option value="Electorate Officer">Electorate Officer</option>
                            <option value="Liaison Officer">Liaison Officer</option>
                            <option value="Migration Agent (AUS) / Immigration Consultant (NZ)">Migration Agent (AUS) / Immigration Consultant (NZ)</option>
                            <option value="Patents Examiner">Patents Examiner</option>
                            <option value="Information & Organisation Professionals (nec)">Information & Organisation Professionals (nec)</option>
                            <option value="Advertising Specialist">Advertising Specialist</option>
                            <option value="Market Research Analyst">Market Research Analyst</option>
                            <option value="Marketing Specialist">Marketing Specialist</option>
                            <option value="ICT Account Manager">ICT Account Manager</option>
                            <option value="ICT Business Development Manager">ICT Business Development Manager</option>
                            <option value="ICT Sales Representative">ICT Sales Representative</option>
                            <option value="Public Relations Professional">Public Relations Professional</option>
                            <option value="Sales Representative (Industrial Products)">Sales Representative (Industrial Products)</option>
                            <option value="Sales Representative (Medical & Pharmaceutical Products)">Sales Representative (Medical & Pharmaceutical Products)</option>
                            <option value="Technical Sales Representatives (nec) Including Education Sales Representatives">Technical Sales Representatives (nec) Including Education Sales Representatives</option>
                            <option value="Aeroplane Pilot">Aeroplane Pilot</option>
                            <option value="Air Traffic Controller">Air Traffic Controller</option>
                            <option value="Flying Instructor">Flying Instructor</option>
                            <option value="Helicopter Pilot">Helicopter Pilot</option>
                            <option value="Air Transport Professionals (nec)">Air Transport Professionals (nec)</option>
                            <option value="Master Fisher">Master Fisher</option>
                            <option value="Ship’S Engineer">Ship’S Engineer</option>
                            <option value="Ship’S Master">Ship’S Master</option>
                            <option value="Ship’S Officer">Ship’S Officer</option>
                            <option value="Marine Surveyor">Marine Surveyor</option>
                            <option value="Marine Transport Professionals (nec)">Marine Transport Professionals (nec)</option>
                            <option value="Architect">Architect</option>
                            <option value="Landscape Architect">Landscape Architect</option>
                            <option value="Surveyor">Surveyor</option>
                            <option value="Cartographer">Cartographer</option>
                            <option value="Other Spatial Scientist">Other Spatial Scientist</option>
                            <option value="Fashion Designer">Fashion Designer</option>
                            <option value="Industrial Designer">Industrial Designer</option>
                            <option value="Jewellery Designer">Jewellery Designer</option>
                            <option value="Graphic Designer">Graphic Designer</option>
                            <option value="Illustrator">Illustrator</option>
                            <option value="Multimedia Designer">Multimedia Designer</option>
                            <option value="Web Designer">Web Designer</option>
                            <option value="Interior Designer">Interior Designer</option>
                            <option value="Urban & Regional Planner">Urban & Regional Planner</option>
                            <option value="Chemical Engineer">Chemical Engineer</option>
                            <option value="Materials Engineer">Materials Engineer</option>
                            <option value="Civil Engineer">Civil Engineer</option>
                            <option value="Geotechnical Engineer">Geotechnical Engineer</option>
                            <option value="Quantity Surveyor">Quantity Surveyor</option>
                            <option value="Structural Engineer">Structural Engineer</option>
                            <option value="Transport Engineer">Transport Engineer</option>
                            <option value="Electrical Engineer">Electrical Engineer</option>
                            <option value="Electronics Engineer">Electronics Engineer</option>
                            <option value="Industrial Engineer">Industrial Engineer</option>
                            <option value="Mechanical Engineer">Mechanical Engineer</option>
                            <option value="Production / Plant Engineer">Production / Plant Engineer</option>
                            <option value="Mining Engineer (Excluding Petroleum)">Mining Engineer (Excluding Petroleum)</option>
                            <option value="Petroleum Engineer">Petroleum Engineer</option>
                            <option value="Aeronautical Engineer">Aeronautical Engineer</option>
                            <option value="Agricultural Engineer">Agricultural Engineer</option>
                            <option value="Biomedical Engineer">Biomedical Engineer</option>
                            <option value="Engineering Technologist">Engineering Technologist</option>
                            <option value="Environmental Engineer">Environmental Engineer</option>
                            <option value="Naval Architect">Naval Architect</option>
                            <option value="Engineering Professionals (nec)">Engineering Professionals (nec)</option>
                            <option value="Agricultural Consultant">Agricultural Consultant</option>
                            <option value="Agricultural Scientist">Agricultural Scientist</option>
                            <option value="Forester">Forester</option>
                            <option value="Chemist">Chemist</option>
                            <option value="Food Technologist">Food Technologist</option>
                            <option value="Wine Maker">Wine Maker</option>
                            <option value="Conservation Officer">Conservation Officer</option>
                            <option value="Environmental Consultant">Environmental Consultant</option>
                            <option value="Environmental Research Scientist">Environmental Research Scientist</option>
                            <option value="Park Ranger">Park Ranger</option>
                            <option value="Environmental Scientists (nec)">Environmental Scientists (nec)</option>
                            <option value="Geologist">Geologist</option>
                            <option value="Geophysicist">Geophysicist</option>
                            <option value="Hydrogeologist">Hydrogeologist</option>
                            <option value="Life Scientist (General)">Life Scientist (General)</option>
                            <option value="Biochemist">Biochemist</option>
                            <option value="Biotechnologist">Biotechnologist</option>
                            <option value="Botanist">Botanist</option>
                            <option value="Marine Biologist">Marine Biologist</option>
                            <option value="Microbiologist">Microbiologist</option>
                            <option value="Zoologist">Zoologist</option>
                            <option value="Life Scientists (nec)">Life Scientists (nec)</option>
                            <option value="Medical Laboratory Scientist">Medical Laboratory Scientist</option>
                            <option value="Veterinarian">Veterinarian</option>
                            <option value="Conservator">Conservator</option>
                            <option value="Metallurgist">Metallurgist</option>
                            <option value="Meteorologist">Meteorologist</option>
                            <option value="Physicist (Medical)">Physicist (Medical)</option>
                            <option value="Physicist (Non-Medical)">Physicist (Non-Medical)</option>
                            <option value="Exercise Physiologist">Exercise Physiologist</option>
                            <option value="Natural & Physical Science Professionals (nec)">Natural & Physical Science Professionals (nec)</option>
                            <option value="Early Childhood (Pre‑Primary School) Teacher">Early Childhood (Pre‑Primary School) Teacher</option>
                            <option value="Kaiako Kohanga Reo (Maori Language Nest Teacher)">Kaiako Kohanga Reo (Maori Language Nest Teacher)</option>
                            <option value="Kaiako Kura Kaupapa Maori (Maori‑Medium Primary School Teacher)">Kaiako Kura Kaupapa Maori (Maori‑Medium Primary School Teacher)</option>
                            <option value="Pouako Kura Kaupapa Maori (Maori‑Medium Primary School Senior Teacher)">Pouako Kura Kaupapa Maori (Maori‑Medium Primary School Senior Teacher)</option>
                            <option value="Primary School Teacher">Primary School Teacher</option>
                            <option value="Middle School Teacher (AUS) / Intermediate School Teacher (NZ)">Middle School Teacher (AUS) / Intermediate School Teacher (NZ)</option>
                            <option value="Secondary School Teacher">Secondary School Teacher</option>
                            <option value="Special Needs Teacher">Special Needs Teacher</option>
                            <option value="Teacher Of The Hearing Impaired">Teacher Of The Hearing Impaired</option>
                            <option value="Teacher Of The Sight Impaired">Teacher Of The Sight Impaired</option>
                            <option value="Special Education Teachers (nec)">Special Education Teachers (nec)</option>
                            <option value="University Lecturer">University Lecturer</option>
                            <option value="University Tutor">University Tutor</option>
                            <option value="Vocational Education Teacher">Vocational Education Teacher</option>
                            <option value="Vocational Education Teacher (AUS) / Polytechnic Teacher (NZ)">Vocational Education Teacher (AUS) / Polytechnic Teacher (NZ)</option>
                            <option value="Education Adviser">Education Adviser</option>
                            <option value="Education Reviewer">Education Reviewer</option>
                            <option value="Art Teacher (Private Tuition)">Art Teacher (Private Tuition)</option>
                            <option value="Dance Teacher (Private Tuition)">Dance Teacher (Private Tuition)</option>
                            <option value="Drama Teacher (Private Tuition)">Drama Teacher (Private Tuition)</option>
                            <option value="Music Teacher (Private Tuition)">Music Teacher (Private Tuition)</option>
                            <option value="Private Tutors & Teachers (nec)">Private Tutors & Teachers (nec)</option>
                            <option value="Teacher Of English To Speakers Of Other Languages">Teacher Of English To Speakers Of Other Languages</option>
                            <option value="Dietitian">Dietitian</option>
                            <option value="Nutritionist">Nutritionist</option>
                            <option value="Medical Diagnostic Radiographer">Medical Diagnostic Radiographer</option>
                            <option value="Medical Radiation Therapist">Medical Radiation Therapist</option>
                            <option value="Nuclear Medicine Technologist">Nuclear Medicine Technologist</option>
                            <option value="Sonographer">Sonographer</option>
                            <option value="Environmental Health Officer">Environmental Health Officer</option>
                            <option value="Occupational Health & Safety Adviser">Occupational Health & Safety Adviser</option>
                            <option value="Optometrist">Optometrist</option>
                            <option value="Orthoptist">Orthoptist</option>
                            <option value="Hospital Pharmacist">Hospital Pharmacist</option>
                            <option value="Industrial Pharmacist">Industrial Pharmacist</option>
                            <option value="Retail Pharmacist">Retail Pharmacist</option>
                            <option value="Health Promotion Officer">Health Promotion Officer</option>
                            <option value="Orthotist / Prosthetist">Orthotist / Prosthetist</option>
                            <option value="Health Diagnostic & Promotion Professionals (nec)">Health Diagnostic & Promotion Professionals (nec)</option>
                            <option value="Chiropractor">Chiropractor</option>
                            <option value="Osteopath">Osteopath</option>
                            <option value="Acupuncturist">Acupuncturist</option>
                            <option value="Homoeopath">Homoeopath</option>
                            <option value="Naturopath">Naturopath</option>
                            <option value="Traditional Chinese Medicine Practitioner">Traditional Chinese Medicine Practitioner</option>
                            <option value="Traditional Maori Health Practitioner">Traditional Maori Health Practitioner</option>
                            <option value="Complementary Health Therapists (nec)">Complementary Health Therapists (nec)</option>
                            <option value="Dental Specialist">Dental Specialist</option>
                            <option value="Dentist">Dentist</option>
                            <option value="Occupational Therapist">Occupational Therapist</option>
                            <option value="Physiotherapist">Physiotherapist</option>
                            <option value="Podiatrist">Podiatrist</option>
                            <option value="Audiologist">Audiologist</option>
                            <option value="Speech Pathologist">Speech Pathologist</option>
                            <option value="General Practitioner">General Practitioner</option>
                            <option value="Resident Medical Officer">Resident Medical Officer</option>
                            <option value="Anaesthetist">Anaesthetist</option>
                            <option value="Specialist Physician (General Medicine)">Specialist Physician (General Medicine)</option>
                            <option value="Cardiologist">Cardiologist</option>
                            <option value="Clinical Haematologist">Clinical Haematologist</option>
                            <option value="Medical Oncologist">Medical Oncologist</option>
                            <option value="Endocrinologist">Endocrinologist</option>
                            <option value="Gastroenterologist">Gastroenterologist</option>
                            <option value="Intensive Care Specialist">Intensive Care Specialist</option>
                            <option value="Neurologist">Neurologist</option>
                            <option value="Paediatrician">Paediatrician</option>
                            <option value="Renal Medicine Specialist">Renal Medicine Specialist</option>
                            <option value="Rheumatologist">Rheumatologist</option>
                            <option value="Thoracic Medicine Specialist">Thoracic Medicine Specialist</option>
                            <option value="Specialist Physicians (nec)">Specialist Physicians (nec)</option>
                            <option value="Psychiatrist">Psychiatrist</option>
                            <option value="Surgeon (General)">Surgeon (General)</option>
                            <option value="Cardiothoracic Surgeon">Cardiothoracic Surgeon</option>
                            <option value="Neurosurgeon">Neurosurgeon</option>
                            <option value="Orthopaedic Surgeon">Orthopaedic Surgeon</option>
                            <option value="Otorhinolaryngologist">Otorhinolaryngologist</option>
                            <option value="Paediatric Surgeon">Paediatric Surgeon</option>
                            <option value="Plastic & Reconstructive Surgeon">Plastic & Reconstructive Surgeon</option>
                            <option value="Urologist">Urologist</option>
                            <option value="Vascular Surgeon">Vascular Surgeon</option>
                            <option value="Dermatologist">Dermatologist</option>
                            <option value="Emergency Medicine Specialist">Emergency Medicine Specialist</option>
                            <option value="Obstetrician & Gynaecologist">Obstetrician & Gynaecologist</option>
                            <option value="Ophthalmologist">Ophthalmologist</option>
                            <option value="Pathologist">Pathologist</option>
                            <option value="Diagnostic & Interventional Radiologist">Diagnostic & Interventional Radiologist</option>
                            <option value="Radiation Oncologist">Radiation Oncologist</option>
                            <option value="Medical Practitioners (nec)">Medical Practitioners (nec)</option>
                            <option value="Midwife">Midwife</option>
                            <option value="Nurse Educator">Nurse Educator</option>
                            <option value="Nurse Researcher">Nurse Researcher</option>
                            <option value="Nurse Manager">Nurse Manager</option>
                            <option value="Nurse Practitioner">Nurse Practitioner</option>
                            <option value="Registered Nurse (Aged Care)">Registered Nurse (Aged Care)</option>
                            <option value="Registered Nurse (Child & Family Health)">Registered Nurse (Child & Family Health)</option>
                            <option value="Registered Nurse (Community Health)">Registered Nurse (Community Health)</option>
                            <option value="Registered Nurse (Critical Care & Emergency)">Registered Nurse (Critical Care & Emergency)</option>
                            <option value="Registered Nurse (Developmental Disability)">Registered Nurse (Developmental Disability)</option>
                            <option value="Registered Nurse (Disability & Rehabilitation)">Registered Nurse (Disability & Rehabilitation)</option>
                            <option value="Registered Nurse (Medical)">Registered Nurse (Medical)</option>
                            <option value="Registered Nurse (Medical Practice)">Registered Nurse (Medical Practice)</option>
                            <option value="Registered Nurse (Mental Health)">Registered Nurse (Mental Health)</option>
                            <option value="Registered Nurse (Perioperative)">Registered Nurse (Perioperative)</option>
                            <option value="Registered Nurse (Surgical)">Registered Nurse (Surgical)</option>
                            <option value="Registered Nurse (Paediatrics)">Registered Nurse (Paediatrics)</option>
                            <option value="Registered Nurses (nec)">Registered Nurses (nec)</option>
                            <option value="ICT Business Analyst">ICT Business Analyst</option>
                            <option value="Systems Analyst">Systems Analyst</option>
                            <option value="Multimedia Specialist">Multimedia Specialist</option>
                            <option value="Web Developer">Web Developer</option>
                            <option value="Analyst Programmer">Analyst Programmer</option>
                            <option value="Developer Programmer">Developer Programmer</option>
                            <option value="Software Engineer">Software Engineer</option>
                            <option value="Software Tester">Software Tester</option>
                            <option value="Software & Applications Programmers (nec)">Software & Applications Programmers (nec)</option>
                            <option value="Database Administrator">Database Administrator</option>
                            <option value="ICT Security Specialist">ICT Security Specialist</option>
                            <option value="Systems Administrator">Systems Administrator</option>
                            <option value="Computer Network & Systems Engineer">Computer Network & Systems Engineer</option>
                            <option value="Network Administrator">Network Administrator</option>
                            <option value="Network Analyst">Network Analyst</option>
                            <option value="ICT Quality Assurance Engineer">ICT Quality Assurance Engineer</option>
                            <option value="ICT Support Engineer">ICT Support Engineer</option>
                            <option value="ICT Systems Test Engineer">ICT Systems Test Engineer</option>
                            <option value="ICT Support & Test Engineers (nec)">ICT Support & Test Engineers (nec)</option>
                            <option value="Telecommunications Engineer">Telecommunications Engineer</option>
                            <option value="Telecommunications Network Engineer">Telecommunications Network Engineer</option>
                            <option value="Barrister">Barrister</option>
                            <option value="Judge">Judge</option>
                            <option value="Magistrate">Magistrate</option>
                            <option value="Tribunal Member">Tribunal Member</option>
                            <option value="Intellectual Property Lawyer">Intellectual Property Lawyer</option>
                            <option value="Judicial & Other Legal Professionals (nec)">Judicial & Other Legal Professionals (nec)</option>
                            <option value="Solicitor">Solicitor</option>
                            <option value="Careers Counsellor">Careers Counsellor</option>
                            <option value="Drug & Alcohol Counsellor">Drug & Alcohol Counsellor</option>
                            <option value="Family & Marriage Counsellor">Family & Marriage Counsellor</option>
                            <option value="Rehabilitation Counsellor">Rehabilitation Counsellor</option>
                            <option value="Student Counsellor">Student Counsellor</option>
                            <option value="Counsellors (nec)">Counsellors (nec)</option>
                            <option value="Clinical Psychologist">Clinical Psychologist</option>
                            <option value="Educational Psychologist">Educational Psychologist</option>
                            <option value="Organisational Psychologist">Organisational Psychologist</option>
                            <option value="Psychotherapist">Psychotherapist</option>
                            <option value="Psychologists (nec)">Psychologists (nec)</option>
                            <option value="Historian">Historian</option>
                            <option value="Interpreter">Interpreter</option>
                            <option value="Translator">Translator</option>
                            <option value="Archaeologist">Archaeologist</option>
                            <option value="Social Professionals (nec)">Social Professionals (nec)</option>
                            <option value="Social Worker">Social Worker</option>
                            <option value="Community Arts Worker">Community Arts Worker</option>
                            <option value="Recreation Officer">Recreation Officer</option>
                            <option value="Recreation Officer (AUS) / Recreation Coordinator (NZ)">Recreation Officer (AUS) / Recreation Coordinator (NZ)</option>
                            <option value="Welfare Worker">Welfare Worker</option>
                            <option value="Agricultural Technician">Agricultural Technician</option>
                            <option value="Anaesthetic Technician">Anaesthetic Technician</option>
                            <option value="Cardiac Technician">Cardiac Technician</option>
                            <option value="Medical Laboratory Technician">Medical Laboratory Technician</option>
                            <option value="Operating Theatre Technician">Operating Theatre Technician</option>
                            <option value="Pharmacy Technician">Pharmacy Technician</option>
                            <option value="Pathology Collector">Pathology Collector</option>
                            <option value="Pathology Collector (AUS) / Phlebotomist (NZ)">Pathology Collector (AUS) / Phlebotomist (NZ)</option>
                            <option value="Medical Technicians (nec)">Medical Technicians (nec)</option>
                            <option value="Fisheries Officer">Fisheries Officer</option>
                            <option value="Meat Inspector">Meat Inspector</option>
                            <option value="Quarantine Officer">Quarantine Officer</option>
                            <option value="Primary Products Inspectors (nec)">Primary Products Inspectors (nec)</option>
                            <option value="Chemistry Technician">Chemistry Technician</option>
                            <option value="Earth Science Technician">Earth Science Technician</option>
                            <option value="Life Science Technician">Life Science Technician</option>
                            <option value="School Laboratory Technician">School Laboratory Technician</option>
                            <option value="Hydrographer">Hydrographer</option>
                            <option value="Science Technicians (nec)">Science Technicians (nec)</option>
                            <option value="Architectural Draftsperson">Architectural Draftsperson</option>
                            <option value="Building Associate">Building Associate</option>
                            <option value="Building Inspector">Building Inspector</option>
                            <option value="Construction Estimator">Construction Estimator</option>
                            <option value="Plumbing Inspector">Plumbing Inspector</option>
                            <option value="Surveying / Spatial Science Technician">Surveying / Spatial Science Technician</option>
                            <option value="Architectural">Building & Surveying Technicians (nec)</option>
                            <option value="Civil Engineering Draftsperson">Civil Engineering Draftsperson</option>
                            <option value="Civil Engineering Technician">Civil Engineering Technician</option>
                            <option value="Electrical Engineering Draftsperson">Electrical Engineering Draftsperson</option>
                            <option value="Electrical Engineering Technician">Electrical Engineering Technician</option>
                            <option value="Electronic Engineering Draftsperson">Electronic Engineering Draftsperson</option>
                            <option value="Electronic Engineering Technician">Electronic Engineering Technician</option>
                            <option value="Mechanical Engineering Draftsperson">Mechanical Engineering Draftsperson</option>
                            <option value="Mechanical Engineering Technician">Mechanical Engineering Technician</option>
                            <option value="Safety Inspector">Safety Inspector</option>
                            <option value="Maintenance Planner">Maintenance Planner</option>
                            <option value="Metallurgical / Materials Technician">Metallurgical / Materials Technician</option>
                            <option value="Mine Deputy">Mine Deputy</option>
                            <option value="Building & Engineering Technicians (nec)">Building & Engineering Technicians (nec)</option>
                            <option value="Hardware Technician">Hardware Technician</option>
                            <option value="ICT Customer Support Officer">ICT Customer Support Officer</option>
                            <option value="Web Administrator">Web Administrator</option>
                            <option value="ICT Support Technicians (nec)">ICT Support Technicians (nec)</option>
                            <option value="Radio Communications Technician">Radio Communications Technician</option>
                            <option value="Telecommunications Field Engineer">Telecommunications Field Engineer</option>
                            <option value="Telecommunications Network Planner">Telecommunications Network Planner</option>
                            <option value="Telecommunications Technical Officer / Technologist">Telecommunications Technical Officer / Technologist</option>
                            <option value="Automotive Electrician">Automotive Electrician</option>
                            <option value="Motor Mechanic (General)">Motor Mechanic (General)</option>
                            <option value="Diesel Motor Mechanic">Diesel Motor Mechanic</option>
                            <option value="Motorcycle Mechanic">Motorcycle Mechanic</option>
                            <option value="Small Engine Mechanic">Small Engine Mechanic</option>
                            <option value="Blacksmith">Blacksmith</option>
                            <option value="Electroplater">Electroplater</option>
                            <option value="Farrier">Farrier</option>
                            <option value="Metal Casting Trades Worker">Metal Casting Trades Worker</option>
                            <option value="Metal Polisher">Metal Polisher</option>
                            <option value="Sheetmetal Trades Worker">Sheetmetal Trades Worker</option>
                            <option value="Metal Fabricator">Metal Fabricator</option>
                            <option value="Pressure Welder">Pressure Welder</option>
                            <option value="Welder (First Class)">Welder (First Class)</option>
                            <option value="Aircraft Maintenance Engineer (Avionics)">Aircraft Maintenance Engineer (Avionics)</option>
                            <option value="Aircraft Maintenance Engineer (Mechanical)">Aircraft Maintenance Engineer (Mechanical)</option>
                            <option value="Aircraft Maintenance Engineer (Structures)">Aircraft Maintenance Engineer (Structures)</option>
                            <option value="Fitter (General)">Fitter (General)</option>
                            <option value="Fitter & Turner">Fitter & Turner</option>
                            <option value="Fitter‑Welder">Fitter‑Welder</option>
                            <option value="Metal Machinist (First Class)">Metal Machinist (First Class)</option>
                            <option value="Textile">Clothing & Footwear Mechanic</option>
                            <option value="Metal Fitters & Machinists (nec)">Metal Fitters & Machinists (nec)</option>
                            <option value="Engraver">Engraver</option>
                            <option value="Gunsmith">Gunsmith</option>
                            <option value="Locksmith">Locksmith</option>
                            <option value="Precision Instrument Maker & Repairer">Precision Instrument Maker & Repairer</option>
                            <option value="Saw Maker & Repairer">Saw Maker & Repairer</option>
                            <option value="Watch & Clock Maker & Repairer">Watch & Clock Maker & Repairer</option>
                            <option value="Engineering Patternmaker">Engineering Patternmaker</option>
                            <option value="Toolmaker">Toolmaker</option>
                            <option value="Panelbeater">Panelbeater</option>
                            <option value="Vehicle Body Builder">Vehicle Body Builder</option>
                            <option value="Vehicle Trimmer">Vehicle Trimmer</option>
                            <option value="Vehicle Painter">Vehicle Painter</option>
                            <option value="Bricklayer">Bricklayer</option>
                            <option value="Stonemason">Stonemason</option>
                            <option value="Carpenter & Joiner">Carpenter & Joiner</option>
                            <option value="Carpenter">Carpenter</option>
                            <option value="Joiner">Joiner</option>
                            <option value="Floor Finisher">Floor Finisher</option>
                            <option value="Painting Trades Worker">Painting Trades Worker</option>
                            <option value="Glazier">Glazier</option>
                            <option value="Fibrous Plasterer">Fibrous Plasterer</option>
                            <option value="Solid Plasterer">Solid Plasterer</option>
                            <option value="Roof Tiler">Roof Tiler</option>
                            <option value="Wall & Floor Tiler">Wall & Floor Tiler</option>
                            <option value="Plumber (General)">Plumber (General)</option>
                            <option value="Airconditioning & Mechanical Services Plumber">Airconditioning & Mechanical Services Plumber</option>
                            <option value="Drainer">Drainer</option>
                            <option value="Gasfitter">Gasfitter</option>
                            <option value="Roof Plumber">Roof Plumber</option>
                            <option value="Electrician (General)">Electrician (General)</option>
                            <option value="Electrician (Special Class)">Electrician (Special Class)</option>
                            <option value="Lift Mechanic">Lift Mechanic</option>
                            <option value="Airconditioning & Refrigeration Mechanic">Airconditioning & Refrigeration Mechanic</option>
                            <option value="Electrical Linesworker">Electrical Linesworker</option>
                            <option value="Electrical Linesworker (AUS) / Electrical Line Mechanic (NZ)">Electrical Linesworker (AUS) / Electrical Line Mechanic (NZ)</option>
                            <option value="Technical Cable Jointer">Technical Cable Jointer</option>
                            <option value="Business Machine Mechanic">Business Machine Mechanic</option>
                            <option value="Communications Operator">Communications Operator</option>
                            <option value="Electronic Equipment Trades Worker">Electronic Equipment Trades Worker</option>
                            <option value="Electronic Instrument Trades Worker (General)">Electronic Instrument Trades Worker (General)</option>
                            <option value="Electronic Instrument Trades Worker (Special Class)">Electronic Instrument Trades Worker (Special Class)</option>
                            <option value="Cabler (Data & Telecommunications)">Cabler (Data & Telecommunications)</option>
                            <option value="Telecommunications Cable Jointer">Telecommunications Cable Jointer</option>
                            <option value="Telecommunications Linesworker">Telecommunications Linesworker</option>
                            <option value="Telecommunications Linesworker (AUS) / Telecommunications Line Mechanic (NZ)">Telecommunications Linesworker (AUS) / Telecommunications Line Mechanic (NZ)</option>
                            <option value="Telecommunications Technician">Telecommunications Technician</option>
                            <option value="Baker">Baker</option>
                            <option value="Pastrycook">Pastrycook</option>
                            <option value="Butcher / Smallgoods Maker">Butcher / Smallgoods Maker</option>
                            <option value="Chef">Chef</option>
                            <option value="Cook">Cook</option>
                            <option value="Dog Handler / Trainer">Dog Handler / Trainer</option>
                            <option value="Horse Trainer">Horse Trainer</option>
                            <option value="Pet Groomer">Pet Groomer</option>
                            <option value="Zookeeper">Zookeeper</option>
                            <option value="Kennel Hand">Kennel Hand</option>
                            <option value="Animal Attendants & Trainers (nec)">Animal Attendants & Trainers (nec)</option>
                            <option value="Shearer">Shearer</option>
                            <option value="Veterinary Nurse">Veterinary Nurse</option>
                            <option value="Florist">Florist</option>
                            <option value="Gardener (General)">Gardener (General)</option>
                            <option value="Arborist">Arborist</option>
                            <option value="Landscape Gardener">Landscape Gardener</option>
                            <option value="Greenkeeper">Greenkeeper</option>
                            <option value="Nurseryperson">Nurseryperson</option>
                            <option value="Hairdresser">Hairdresser</option>
                            <option value="Print Finisher">Print Finisher</option>
                            <option value="Screen Printer">Screen Printer</option>
                            <option value="Graphic Pre‑Press Trades Worker">Graphic Pre‑Press Trades Worker</option>
                            <option value="Printing Machinist">Printing Machinist</option>
                            <option value="Small Offset Printer">Small Offset Printer</option>
                            <option value="Canvas Goods Fabricator">Canvas Goods Fabricator</option>
                            <option value="Leather Goods Maker">Leather Goods Maker</option>
                            <option value="Sail Maker">Sail Maker</option>
                            <option value="Shoemaker">Shoemaker</option>
                            <option value="Apparel Cutter">Apparel Cutter</option>
                            <option value="Clothing Patternmaker">Clothing Patternmaker</option>
                            <option value="Dressmaker / Tailor">Dressmaker / Tailor</option>
                            <option value="Clothing Trades Workers (nec)">Clothing Trades Workers (nec)</option>
                            <option value="Upholsterer">Upholsterer</option>
                            <option value="Cabinetmaker">Cabinetmaker</option>
                            <option value="Furniture Finisher">Furniture Finisher</option>
                            <option value="Picture Framer">Picture Framer</option>
                            <option value="Wood Machinist">Wood Machinist</option>
                            <option value="Wood Turner">Wood Turner</option>
                            <option value="Wood Machinists & Other Wood Trades Workers (nec)">Wood Machinists & Other Wood Trades Workers (nec)</option>
                            <option value="Boat Builder & Repairer">Boat Builder & Repairer</option>
                            <option value="Shipwright">Shipwright</option>
                            <option value="Chemical Plant Operator">Chemical Plant Operator</option>
                            <option value="Gas / Petroleum Operator">Gas / Petroleum Operator</option>
                            <option value="Power Generation Plant Operator">Power Generation Plant Operator</option>
                            <option value="Gallery / Museum Technician">Gallery / Museum Technician</option>
                            <option value="Library Technician">Library Technician</option>
                            <option value="Jeweller">Jeweller</option>
                            <option value="Broadcast Transmitter Operator">Broadcast Transmitter Operator</option>
                            <option value="Camera Operator (Film">Television / Video)</option>
                            <option value="Light Technician">Light Technician</option>
                            <option value="Make Up Artist">Make Up Artist</option>
                            <option value="Musical Instrument Maker / Repairer">Musical Instrument Maker / Repairer</option>
                            <option value="Sound Technician">Sound Technician</option>
                            <option value="Television Equipment Operator">Television Equipment Operator</option>
                            <option value="Performing Arts Technicians (nec)">Performing Arts Technicians (nec)</option>
                            <option value="Signwriter">Signwriter</option>
                            <option value="Diver">Diver</option>
                            <option value="Interior Decorator">Interior Decorator</option>
                            <option value="Optical Dispenser (AUS) / Dispensing Optician (NZ)">Optical Dispenser (AUS) / Dispensing Optician (NZ)</option>
                            <option value="Optical Mechanic">Optical Mechanic</option>
                            <option value="Photographer’s Assistant">Photographer’s Assistant</option>
                            <option value="Plastics Technician">Plastics Technician</option>
                            <option value="Wool Classer">Wool Classer</option>
                            <option value="Fire Protection Equipment Technician">Fire Protection Equipment Technician</option>
                            <option value="Technicians & Trades Workers (nec)">Technicians & Trades Workers (nec)</option>
                            <option value="Ambulance Officer">Ambulance Officer</option>
                            <option value="Intensive Care Ambulance Paramedic">Intensive Care Ambulance Paramedic</option>
                            <option value="Intensive Care Ambulance Paramedic (AUS) / Ambulance Paramedic (NZ)">Intensive Care Ambulance Paramedic (AUS) / Ambulance Paramedic (NZ)</option>
                            <option value="Dental Hygienist">Dental Hygienist</option>
                            <option value="Dental Prosthetist">Dental Prosthetist</option>
                            <option value="Dental Technician">Dental Technician</option>
                            <option value="Dental Therapist">Dental Therapist</option>
                            <option value="Diversional Therapist">Diversional Therapist</option>
                            <option value="Enrolled Nurse">Enrolled Nurse</option>
                            <option value="Mothercraft Nurse">Mothercraft Nurse</option>
                            <option value="Aboriginal & Torres Strait Islander Health Worker">Aboriginal & Torres Strait Islander Health Worker</option>
                            <option value="Kaiawhina (Hauora) (Maori Health Assistant)">Kaiawhina (Hauora) (Maori Health Assistant)</option>
                            <option value="Massage Therapist">Massage Therapist</option>
                            <option value="Community Worker">Community Worker</option>
                            <option value="Disabilities Services Officer">Disabilities Services Officer</option>
                            <option value="Family Support Worker">Family Support Worker</option>
                            <option value="Parole / Probation Officer">Parole / Probation Officer</option>
                            <option value="Residential Care Officer">Residential Care Officer</option>
                            <option value="Youth Worker">Youth Worker</option>
                            <option value="Child Care Worker (Group Leaders Only)">Child Care Worker (Group Leaders Only)</option>
                            <option value="Hotel Service Manager">Hotel Service Manager</option>
                            <option value="Defence Force Member ‑ Other Ranks">Defence Force Member ‑ Other Ranks</option>
                            <option value="Emergency Service Worker">Emergency Service Worker</option>
                            <option value="Fire Fighter">Fire Fighter</option>
                            <option value="Detective">Detective</option>
                            <option value="Police Officer">Police Officer</option>
                            <option value="Security Consultant">Security Consultant</option>
                            <option value="Driving Instructor">Driving Instructor</option>
                            <option value="Funeral Director">Funeral Director</option>
                            <option value="Funeral Workers (nec)">Funeral Workers (nec)</option>
                            <option value="Flight Attendant">Flight Attendant</option>
                            <option value="Travel Attendants (nec)">Travel Attendants (nec)</option>
                            <option value="First Aid Trainer">First Aid Trainer</option>
                            <option value="Diving Instructor (Open Water)">Diving Instructor (Open Water)</option>
                            <option value="Gymnastics Coach / Instructor">Gymnastics Coach / Instructor</option>
                            <option value="Horse Riding Coach / Instructor">Horse Riding Coach / Instructor</option>
                            <option value="Snowsport Instructor">Snowsport Instructor</option>
                            <option value="Swimming Coach / Instructor">Swimming Coach / Instructor</option>
                            <option value="Tennis Coach">Tennis Coach</option>
                            <option value="Other Sports Coach / Instructor">Other Sports Coach / Instructor</option>
                            <option value="Dog / Horse Racing Official">Dog / Horse Racing Official</option>
                            <option value="Sports Development Officer">Sports Development Officer</option>
                            <option value="Sports Umpire">Sports Umpire</option>
                            <option value="Other Sports Official">Other Sports Official</option>
                            <option value="Footballer">Footballer</option>
                            <option value="Golfer">Golfer</option>
                            <option value="Jockey">Jockey</option>
                            <option value="Lifeguard">Lifeguard</option>
                            <option value="Sportspersons (nec)">Sportspersons (nec)</option>
                            <option value="Contract Administrator">Contract Administrator</option>
                            <option value="Program / Project Administrator">Program / Project Administrator</option>
                            <option value="Office Manager">Office Manager</option>
                            <option value="Health Practice Manager">Health Practice Manager</option>
                            <option value="Practice Managers (nec)">Practice Managers (nec)</option>
                            <option value="Personal Assistant">Personal Assistant</option>
                            <option value="Secretary (General)">Secretary (General)</option>
                            <option value="Legal Secretary">Legal Secretary</option>
                            <option value="Call / Contact Centre Team Leader">Call / Contact Centre Team Leader</option>
                            <option value="Conveyancer">Conveyancer</option>
                            <option value="Legal Executive">Legal Executive</option>
                            <option value="Clerk Of Court">Clerk Of Court</option>
                            <option value="Court Bailiff / Sheriff (AUS) / Court Collections Officer (NZ)">Court Bailiff / Sheriff (AUS) / Court Collections Officer (NZ)</option>
                            <option value="Court Orderly (AUS) / Court Registry Officer (NZ)">Court Orderly (AUS) / Court Registry Officer (NZ)</option>
                            <option value="Law Clerk">Law Clerk</option>
                            <option value="Trust Officer">Trust Officer</option>
                            <option value="Insurance Investigator">Insurance Investigator</option>
                            <option value="Insurance Loss Adjuster">Insurance Loss Adjuster</option>
                            <option value="Insurance Risk Surveyor">Insurance Risk Surveyor</option>
                            <option value="Clinical Coder">Clinical Coder</option>
                            <option value="Auctioneer">Auctioneer</option>
                            <option value="Stock & Station Agent">Stock & Station Agent</option>
                            <option value="Insurance Agent">Insurance Agent</option>
                            <option value="Business Broker">Business Broker</option>
                            <option value="Property Manager">Property Manager</option>
                            <option value="Real Estate Agency Principal (AUS) / Real Estate Agency Licensee (NZ)">Real Estate Agency Principal (AUS) / Real Estate Agency Licensee (NZ)</option>
                            <option value="Real Estate Agent">Real Estate Agent</option>
                            <option value="Real Estate Representative">Real Estate Representative</option>
                            <option value="Retail Buyer">Retail Buyer</option>
                            <option value="Wool Buyer">Wool Buyer</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Indicate the main duties and responsibilities
                        that the applicant will be performing
                        (ideally please indicate 5 duties)
                    </td>
                    <td> <input type="text" name="nomination_responsibilities" id="nomination_responsibilities" @if(isset($data->nomination_responsibilities)) value="{{$data->nomination_responsibilities}}" @endif/> </td>
                </tr>


                <tr>
                    <td>Indicate the main tasks to be performed
                    </td>
                    <td> <input type="text" name="nomination_performed" id="nomination_performed" @if(isset($data->nomination_performed)) value="{{$data->nomination_performed}}" @endif/> </td>
                </tr>

                <tr>
                    <td>Other information about the position,
                        including information about why this position cannot be filled from the local
                        labour market:

                    </td>
                    <td> <input type="text" name="nomination_position" id="nomination_position" @if(isset($data->nomination_position)) value="{{$data->nomination_position}}" @endif/> </td>
                </tr>


            </tbody>
        </table>

        <h2 class="fs-title"> QUALIFICATIONS AND EXPERIENCE NEEDED FOR THE POSITION NEEDED </h2>

        <p> Describe the qualifications, relevant skills, employment experience and
            registrations/licenses required to be held by the nominee </p>

        <table>

            <tbody>

                <tr>
                    <td> Relevant qualifications needed</td>
                    <td> <input type="text" name="qua_and_exp_relevant" id="qua_and_exp_relevant" @if(isset($data->qua_and_exp_relevant)) value="{{$data->qua_and_exp_relevant}}" @endif/> </td>
                </tr>


                <tr>
                    <td>Relevant skills needed</td>
                    <td> <input type="text" name="qua_and_exp_skills" id="qua_and_exp_skills" @if(isset($data->qua_and_exp_skills)) value="{{$data->qua_and_exp_skills}}" @endif/> </td>
                </tr>

                <tr>
                    <td>Does the position require the applicant to
                        hold a licence, registration or professional
                        membership? If so, please specify. Also,
                        please specify if the applicant can perform
                        work under supervision of another person
                        who holds licence/registration</td>
                    <td> 
                    <select name="qua_and_exp_license" id="qua_and_exp_license" class="form-control">
                            <option value=""> Select Option </option>

                            @if(!empty(isset($data->qua_and_exp_license)))
                            <option value="{{$data->qua_and_exp_license}}" selected>{{$data->qua_and_exp_license}}</option>
                            @endif
                            <option value="Yes">Yes </option>
                            <option value="No"> No </option>
                        </select>    
                   </td>
                </tr>


                <tr>
                    <td>Has your business retrenched any Australian
                        citizens or Australian permanent residents in
                        the nominated occupation, or made their
                        positions redundant, in the last four months?</td>
                    <td>
                    <select name="qua_and_exp_four_month" id="qua_and_exp_four_month" class="form-control">
                            <option value=""> Select Option </option>

                            @if(!empty(isset($data->qua_and_exp_four_month)))
                            <option value="{{$data->qua_and_exp_four_month}}" selected>{{$data->qua_and_exp_four_month}}</option>
                            @endif
                            <option value="Yes">Yes </option>
                            <option value="No"> No </option>
                        </select>  
                 </td>
                </tr>

                <tr>
                    <td>Does your business operate in the
                        Agricultural sector?</td>
                    <td> 
                    <select name="qua_and_exp_agriculture" id="qua_and_exp_agriculture" class="form-control">
                            <option value=""> Select Option </option>

                            @if(!empty(isset($data->qua_and_exp_agriculture)))
                            <option value="{{$data->qua_and_exp_agriculture}}" selected>{{$data->qua_and_exp_agriculture}}</option>
                            @endif
                            <option value="Yes">Yes </option>
                            <option value="No"> No </option>
                        </select>     
                    </td>
                </tr>

            </tbody>
        </table>


        <h2 class="fs-title"> SALARY FOR THE POSITION NEEDED </h2>

        <table>
            <tbody>

                <tr>
                    <td> What annual salary will you be offering the visa applicant? Please indicate the net salary offered to the applicant NOT including superannuation
                    </td>
                    <td> <input type="text" name="salary_offering_visa_applicant" id="salary_offering_visa_applicant" @if(isset($data->salary_offering_visa_applicant)) value="{{$data->salary_offering_visa_applicant}}" @endif/> </td>
                </tr>

                <tr>
                    <td> Are there any non-monetary components of
                        the nominee’s salary?
                    </td>
                    <td>
                        <select name="salary_non_monetary" id="salary_non_monetary" class="form-control">
                            <option value=""> Select Option </option>

                            @if(!empty(isset($data->salary_non_monetary)))
                            <option value="{{$data->salary_non_monetary}}" selected>{{$data->salary_non_monetary}}</option>
                            @endif

                            <option value="Yes"> Yes </option>
                            <option value="No"> No </option>
                        </select>

                    </td>
                </tr>

                <tr>
                    <td> If Yes, please specify
                    </td>
                    <td> <input type="text" name="salary_offering_visa_applicant_specify" id="salary_offering_visa_applicant_specify" @if(isset($data->salary_offering_visa_applicant_specify)) value="{{$data->salary_offering_visa_applicant_specify}}" @endif/> </td>
                </tr>


                <tr>
                    <td>How many years of contract are you willing
                        to offer the visa applicant
                    </td>
                    <td>
                        <select name="salary_year_of_contract" id="salary_year_of_contract-monetary" class="form-control">
                            <option value=""> Select Option </option>

                            @if(!empty(isset($data->salary_year_of_contract)))
                            <option value="{{$data->salary_year_of_contract}}" selected>{{$data->salary_year_of_contract}}</option>
                            @endif
                            <option value="1 year"> 1 year </option>
                            <option value="2 year"> 2 year </option>
                            <option value="3 year"> 3 year </option>
                            <option value="4 year"> 4 year </option>
                        </select>

                    </td>
                </tr>


                <!-- <tr>
                    <td> What annual salary will you be offering the
                        visa applicant? Please indicate the net salary
                        offered to the applicant NOT including
                        superannuation

                    </td>
                    <td> <input type="text" name="salary_annual" id="salary_annual" @if(isset($data->salary_annual)) value="{{$data->salary_annual}}" @endif/> </td>
                </tr> -->

                <tr>
                    <td> How many hours per week will the applicant
                        be working (please note that a minimum of
                        38 hours per week is required)

                    </td>
                    <td> <input type="text" name="salary_hours_per_week" id="salary_hours_per_week" @if(isset($data->salary_hours_per_week)) value="{{$data->salary_hours_per_week}}" @endif/> </td>
                </tr>

                <tr>
                    <td>Are you able to indicate how you elaborated
                        the annual salary rate you are willing to
                        offer the visa applicant?

                    </td>
                    <td> <input type="text" name="salary_eloborate_annual_salary" id="salary_eloborate_annual_salary" @if(isset($data->salary_eloborate_annual_salary)) value="{{$data->salary_eloborate_annual_salary}}" @endif/> </td>
                </tr>

                <tr>
                    <td> Do you already have an Australian citizen
                        and/or a Permanent resident working in the
                        same position offered to the visa applicant?
                    </td>
                    <td>
                        <select name="salary_permanent_resident" id="salary_permanent_resident" class="form-control">
                            <option value=""> Select Option </option>
                            @if(!empty(isset($data->salary_permanent_resident)))
                            <option value="{{$data->salary_permanent_resident}}" selected>{{$data->salary_permanent_resident}}</option>
                            @endif

                            <option value="Yes"> Yes </option>
                            <option value="No"> No </option>
                        </select>

                    </td>
                </tr>

                <tr>
                    <td>If yes, please indicate the annual salary of
                        this person

                    </td>
                    <td> <input type="text" name="salary_permanent_resident_indicate" id="salary_permanent_resident_indicate" @if(isset($data->salary_permanent_resident_indicate)) value="{{$data->salary_permanent_resident_indicate}}" @endif/> </td>
                </tr>


                <tr>
                    <td> If you do have an Australian citizen and/or
                        PR resident, are you willing to pay the visa
                        applicant the same annual salary?
                    </td>
                    <td>
                        <select name="salary_citizen" id="salary_citizen" class="form-control">
                            <option value=""> Select Option </option>
                            @if(!empty(isset($data->salary_citizen)))
                            <option value="{{$data->salary_citizen}}" selected>{{$data->salary_citizen}}</option>
                            @endif
                            <option value="Yes"> Yes </option>
                            <option value="No"> No </option>
                        </select>

                    </td>
                </tr>

            </tbody>
        </table>


        <h2 class="fs-title" style="margin-top: 10px;">NOMINATION – DOCS TO UPLOAD FOR THE POSITION NEEDED
        </h2>


        <table>
            <tbody>

                <tr>
                    <td> Job description/Duty Statement of the
                        position to be offered to the applicant </td>
                    <td> <input type="file" name="nomination_job_description" id="nomination_job_description">

                        @if (array_key_exists('nomination_job_description', $docdataemployerform))

                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/employerform/'.$data->user_id.'/nomination_job_description/'.$docdataemployerform['nomination_job_description'])  }}">
                            @if(str_contains($docdataemployerform['nomination_job_description'] , '.pdf'))
                            <img class="imgfile" src="{{asset('pdficon.png')}}" />
                            @else
                            <img class="imgfile" src="{{  asset('/storage/employerform/'.$data->user_id.'/nomination_job_description/'.$docdataemployerform['nomination_job_description'])  }}" />
                            @endif
                        </a>


                        @endif
                    </td>
                </tr>
            </tbody>
        </table>

      


        <table>
            <tbody>
                <tr>
                            <td>   Employment contract to be offered to the
                    applicant. Please note the contract must
                    be:  <br> 1) Dated after the 28 days period of
                                the job ads 
                                <br>
                                2) Indicate the name and surname of
                                the applicant
                                <br>
                                3) Indicate "upon visa approval" for
                                the Start date
                                <br>
                                4) Indicate the gross annual salary rate
                                <br>
                                5) Indicate the super annuation in
                                addition to the gross annual salary
                                rate 
                                <br>
                                6) Indicate any other monetary
                                components as a separate figure to
                                the annual gross salary           
                    </td>
                    <td> <input type="file" name="nomination_period_of_job" id="nomination_period_of_job">

                        @if (array_key_exists('nomination_period_of_job', $docdataemployerform))

                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/employerform/'.$data->user_id.'/nomination_period_of_job/'.$docdataemployerform['nomination_period_of_job'])  }}">
                            @if(str_contains($docdataemployerform['nomination_period_of_job'] , '.pdf'))
                            <img class="imgfile" src="{{asset('pdficon.png')}}" />
                            @else
                            <img class="imgfile" src="{{  asset('/storage/employerform/'.$data->user_id.'/nomination_period_of_job/'.$docdataemployerform['nomination_period_of_job'])  }}" />
                            @endif
                        </a>


                        @endif
                    </td>
                </tr>

                <!-- <tr>
                    <td> 2) Indicate the name and surname of
                        the applicant</td>
                    <td> <input type="file" name="nomination_name_and_surname" id="nomination_name_and_surname">

                        @if (array_key_exists('nomination_name_and_surname', $docdataemployerform))

                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/employerform/'.$data->user_id.'/nomination_name_and_surname/'.$docdataemployerform['nomination_name_and_surname'])  }}">
                            @if(str_contains($docdataemployerform['nomination_name_and_surname'] , '.pdf'))
                            <img class="imgfile" src="{{asset('pdficon.png')}}" />
                            @else
                            <img class="imgfile" src="{{  asset('/storage/employerform/'.$data->user_id.'/nomination_name_and_surname/'.$docdataemployerform['nomination_name_and_surname'])  }}" />
                            @endif
                        </a>


                        @endif
                    </td>
                </tr>

                <tr>
                    <td> 3) Indicate "upon visa approval" for
                        the Start date</td>
                    <td> <input type="file" name="nomination_start_date_doc" id="nomination_start_date_doc">


                        @if (array_key_exists('nomination_start_date_doc', $docdataemployerform))

                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/employerform/'.$data->user_id.'/nomination_start_date_doc/'.$docdataemployerform['nomination_start_date_doc'])  }}">
                            @if(str_contains($docdataemployerform['nomination_start_date_doc'] , '.pdf'))
                            <img class="imgfile" src="{{asset('pdficon.png')}}" />
                            @else
                            <img class="imgfile" src="{{  asset('/storage/employerform/'.$data->user_id.'/nomination_start_date_doc/'.$docdataemployerform['nomination_start_date_doc'])  }}" />
                            @endif
                        </a>


                        @endif

                    </td>
                </tr>

                <tr>
                    <td> 4) Indicate the gross annual salary rate</td>
                    <td> <input type="file" name="nomination_gross_annual_salary" id="nomination_gross_annual_salary">

                        @if (array_key_exists('nomination_gross_annual_salary', $docdataemployerform))

                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/employerform/'.$data->user_id.'/nomination_gross_annual_salary/'.$docdataemployerform['nomination_gross_annual_salary'])  }}">
                            @if(str_contains($docdataemployerform['nomination_gross_annual_salary'] , '.pdf'))
                            <img class="imgfile" src="{{asset('pdficon.png')}}" />
                            @else
                            <img class="imgfile" src="{{  asset('/storage/employerform/'.$data->user_id.'/nomination_gross_annual_salary/'.$docdataemployerform['nomination_gross_annual_salary'])  }}" />
                            @endif
                        </a>


                        @endif

                    </td>
                </tr>

                <tr>
                    <td> 5) Indicate the super annuation in
                        addition to the gross annual salary
                        rate</td>
                    <td> <input type="file" name="nomination_super_annuation" id="nomination_super_annuation">

                        @if (array_key_exists('nomination_super_annuation', $docdataemployerform))

                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/employerform/'.$data->user_id.'/nomination_super_annuation/'.$docdataemployerform['nomination_super_annuation'])  }}">
                            @if(str_contains($docdataemployerform['nomination_super_annuation'] , '.pdf'))
                            <img class="imgfile" src="{{asset('pdficon.png')}}" />
                            @else
                            <img class="imgfile" src="{{  asset('/storage/employerform/'.$data->user_id.'/nomination_super_annuation/'.$docdataemployerform['nomination_super_annuation'])  }}" />
                            @endif
                        </a>


                        @endif

                    </td>
                </tr>

                <tr>
                    <td> 6) Indicate any other monetary
                        components as a separate figure to
                        the annual gross salary</td>
                    <td> <input type="file" name="nomination_separate_figure" id="nomination_separate_figure">

                        @if (array_key_exists('nomination_separate_figure', $docdataemployerform))

                        <a class="imgfileAnchor" target="_blank" href="{{  asset('/storage/employerform/'.$data->user_id.'/nomination_separate_figure/'.$docdataemployerform['nomination_separate_figure'])  }}">
                            @if(str_contains($docdataemployerform['nomination_separate_figure'] , '.pdf'))
                            <img class="imgfile" src="{{asset('pdficon.png')}}" />
                            @else
                            <img class="imgfile" src="{{  asset('/storage/employerform/'.$data->user_id.'/nomination_separate_figure/'.$docdataemployerform['nomination_separate_figure'])  }}" />
                            @endif
                        </a>


                        @endif
                    </td>
                </tr> -->



            </tbody>
        </table>

    </div>
    <input type="hidden" name="fieldset" value="xyz" class="currentfieldset">

    @if(!Auth::user()->hasRole('consultant') && !Auth::user()->hasRole('admin') )
    <input type="button" name="save" class="save action-button" value="Save" />
    @endif
    <input type="button" name="next" class="next action-button" value="Next" />
    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
</fieldset>